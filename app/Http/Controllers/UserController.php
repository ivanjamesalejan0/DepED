<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Report;
use App\Models\Teacher;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $teachers = DB::table('teachers')->join('tbl_schools', 'teachers.school', '=', 'tbl_schools.school_id')->join('users', 'users.id', '=', 'teachers.user_id')->get();

        $admins = DB::table('admins')->join('users', 'users.id', '=', 'admins.user_id')->get();

        $invalid_requests = DB::select('SELECT * FROM teachers INNER JOIN users ON teachers.user_id = users.id where teachers.school not in (SELECT school_id FROM tbl_schools)');

        return view('admin.users.list', ['teachers' => $teachers, 'teachers_invalid' => $invalid_requests, 'admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::guard()->user()->role != 'admin')
        {
            return ['success' => false, 'title' => 'Access denied', 'message' => 'You have no permision to access this page'];
        }

        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'middlename' => 'required|string|max:255',
            'status' => 'required|string|in:single,married,widowed,widower',
            'gender' => 'required|string|in:male,female',
            'school' => 'required|digits_between:2,8',
            'role' => 'required|string|in:principal,teacher,admin',

            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails())
        {
            return ['success' => false, 'title' => 'Failed to add user!', 'message' => 'Oops! Something went wrong', 'errors' => $validator->messages()];
        }

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role'),
            'active' => $request->input('active'),
        ]);
        if ($request->input('role') == 'admin')
        {
            $teacher = Admin::create([
                'user_id' => $user->id,
                'firstname' => $request->input('firstname'),
                'middlename' => $request->input('middlename'),
                'lastname' => $request->input('lastname'),
            ]);
        }
        else if ($request->input('role') == 'teacher' || $request->input('role') == 'principal')
        {
            $teacher = Teacher::create([
                'user_id' => $user->id,
                'firstname' => $request->input('firstname'),
                'middlename' => $request->input('middlename'),
                'lastname' => $request->input('lastname'),
                'status' => $request->input('status'),
                'gender' => $request->input('gender'),
                'school' => $request->input('school'),
                'role' => $request->input('role'),
            ]);
        }
        return ['success' => true, 'title' => 'User successfully added!', 'message' => 'successfully saved'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('views.users.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher, $id)
    {
        $user = User::find($id);
        if ($user->role == 'admin')
        {
            $user_info = Admin::where('user_id', $id)->first();
        }
        else if ($user->role == 'teacher' || $user->role == 'principal')
        {
            $user_info = Teacher::where('user_id', $id)->first();
        }
        return view('admin.users.create', ['user' => $user, 'info' => $user_info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        /**
         * don't let other user edit other user's account
         */
        if (Auth::guard()->user()->role != 'admin' && Auth::guard()->user()->id != $request->input('id'))
        {
            return ['success' => false, 'title' => 'Access denied', 'message' => 'You have no permision to access this page'];
        }

        if ($request->input('name') === null)
        {
            if ($user->active)
            {
                $user->active = 0;
                $user->save();
                $data = [
                    'success' => true,
                    'title' => 'Success!',
                    'message' => 'Successfully deactivated member.',
                ];
            }
            else
            {
                $user->active = 1;
                $user->save();
                $data = [
                    'success' => true,
                    'title' => 'Success!',
                    'message' => 'Successfully activated member.',
                ];
            }
        }
        else
        {

            $validator = Validator::make($request->all(), [
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'middlename' => 'required|string|max:255',
                'status' => 'required|string|in:single,married,widowed,widower',
                'gender' => 'required|string|in:male,female',
                'school' => 'required|digits_between:2,8',
                'role' => 'required|string|in:principal,teacher,admin',

                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
                'password' => $request->input('password') != '' ? 'string|min:6|confirmed' : '',
            ]);

            if ($validator->fails())
            {
                return ['success' => false, 'title' => 'Failed to update user!', 'message' => 'Oops! Something went wrong', 'errors' => $validator->messages()];
            }

            $user_new_info = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'active' => $request->input('active'),
                'role' => $request->input('role'),
            ];
            if ($request->input('password') != '')
            {
                $user_new_info['password'] = bcrypt($request->input('password'));
            }
            User::find($request->input('id'))->update($user_new_info);

            if ($request->input('role') == 'admin')
            {
                Admin::find($request->info_id)->update([
                    'firstname' => $request->input('firstname'),
                    'middlename' => $request->input('middlename'),
                    'lastname' => $request->input('lastname'),
                ]);
            }
            else if ($request->input('role') == 'teacher' || $request->input('role') == 'principal')
            {

                Teacher::find($request->info_id)->update([
                    'firstname' => $request->input('firstname'),
                    'middlename' => $request->input('middlename'),
                    'lastname' => $request->input('lastname'),
                    'status' => $request->input('status'),
                    'gender' => $request->input('gender'),
                    'school' => $request->input('school'),
                    'role' => $request->input('role'),
                ]);
            }
            $data = [
                'success' => true,
                'title' => 'Success!',
                'message' => 'Successfully updated information.',
            ];
        }
        return json_encode($data);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $teacher = Teacher::where('user_id', $user->id)->firstOrFail();
        $assoc_reports = Report::find($teacher->id);
        if ($assoc_reports)
        {
            $assoc_reports->delete();
        }
        $user->delete();
        $teacher->delete();
        $data = [
            'success' => true,
            'title' => 'Success!',
            'message' => 'Successfully archive member.',
        ];
        return json_encode($data);

    }
}