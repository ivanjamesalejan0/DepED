<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Modules\SMS;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if (Auth::user()->role == 'admin'){
        $result = Report::all();
        $reports = [];
        foreach ($result as $i => $r)
        {
            $reports[$i] = $r;
            $reports[$i]->data = json_decode($r->data);
        }

        return view('admin.views.reports.list', ['reports' => $reports]);
    }
    else if (Auth::user()->role == 'teacher'){
        $teacher = Teacher::where('user_id',Auth::user()->id)->first();
              $result = Report::where('teacher_id',$teacher->id)->get();
              $reports = [];
              foreach ($result as $i => $r)
              {
                  $reports[$i] = $r;
                  $reports[$i]->data = json_decode($r->data);
              }
      
              return view('admin.views.reports.list', ['reports' => $reports]);
          }
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        switch (strtolower($request->get('type') ?? 'small-scale'))
        {
        case 'small-scale':
            return view('admin.views.reports.small-scale.form');
        case 'large-scale':
            return view('admin.views.reports.large-scale.form');
        case 'armed-conflict':
            return view('admin.views.reports.armed-conflict.form');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [];
        foreach (collect($request->all())->keys()->toArray() as $r)
        {
            if ($r != '_token')
            {
                $data[$r] = $request->get($r);
            }
        }
        $user_teacher_data = Teacher::Where('user_id' , Auth::user()->id)->first();

        $new_report = Report::create([
            'name' => $request->input('report_name'),
            'teacher_id' => $user_teacher_data->id,
            'status' => 'pending',
            'data' => json_encode($data),
            'province' => $request->input('report_province'),
            'municipality' => $request->input('report_municipality'),
            'barangay' => $request->input('report_barangay'),
            'image' => $request->input('report_image'),
        ]);

        if ($new_report->id)
        {
            $sms = new SMS;
            $message = "New report has been received from ".$request->input('report_barangay');
            $sms->sendSMS($message);
            $return_data = ['success' => true, 'message' => 'Report saved successfully!'];
        }
        else
        {
            $return_data = ['success' => false, 'message' => 'Oops! Something went wrong.'];
        }

        switch (strtolower($request->get('type') ?? 'small-scale'))
        {
        case 'small-scale':
            return view('admin.views.reports.small-scale.form', ['data' => $return_data]);
            break;

        case 'large-scale':
            return view('admin.views.reports.large-scale.form', ['data' => $return_data]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report, Request $request)
    {
        $report->data = json_decode($report->data);
        view()->share('report', $report);

        switch (strtolower($request->get('type') ?? 'small-scale'))
        {
        case 'small-scale':
            $blade = 'Reports.summary';
            break;
        case 'large-scale':
            $blade = 'admin.views.reports.large-scale.';
            break;
        case 'armed-conflict':
            $blade = 'admin.views.reports.armed-conflict.';
            break;
        }

        if ($request->has('download'))
        {
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadView($blade . 'pdf-view', $report);
            return $pdf->download($report->name . '-report.pdf');
        }
        $sms = new SMS;
            $message = "Your report has been received";
            $sms->sendSMS1($message);
        return view($blade . 'view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        $report->data = json_decode($report->data);
        switch ($report->data->{'report-type'} ?? 'small-scale')
    {
        case 'small-scale':
            return view('admin.views.reports.small-scale.form', ['report' => $report]);
            break;
        case 'large-scale':
            return view('admin.views.reports.large-scale.form', ['report' => $report]);
            return view('admin.summary'); 
        case 'armed-conflict':
            return view('admin.views.reports.armed-conflict.form', ['report' => $report]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $data = [];
        foreach (collect($request->all())->keys()->toArray() as $r)
        {
            if ($r != '_token' && $r != '_method')
            {
                $data[$r] = $request->get($r);
            }
        }
        $user_teacher_data = Teacher::Where('user_id' , Auth::user()->id)->first();
        $report->fill([
            'name' =>$request->input('report_name'),
            'teacher_id' => $user_teacher_data->id, 
            'status' => 'pending',
            'data' => json_encode($data),
        ]);
        $report->save();
        return ['success' => true, 'message' => 'Successfully saved'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        $report->delete();
        return response()->json(['success' => true, 'message' => 'request submitted successfully']);
    }

    /**
     * Remove multiple resources from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroyMultiple(Request $request)
    {
        $ids = $request->get('id') ?? '';
        $ids = explode(',', $ids);
        if (count($ids))
        {
            Report::destroy($ids);
        }
        return response()->json(['success' => true, 'message' => 'request submitted successfully']);
    }
    
}