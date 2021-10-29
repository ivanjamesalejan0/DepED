<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        $result = DB::table('reports')->selectRaw("province, municipality, barangay")->whereRaw("DATE(created_at) >= DATE(NOW()) - INTERVAL 30 DAY")->groupBy(['province', 'municipality', 'barangay'])->get();

        return view('admin.views.home', ['geo' => $result]);
    }
}