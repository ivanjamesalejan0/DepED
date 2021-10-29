<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        $result = Report::all();
        $reports = [];
        foreach ($result as $i => $r)
        {
            $reports[$i] = $r;
            $reports[$i]->data = json_decode($r->data);
        }

        return view('admin.views.reports.list', ['reports' => $reports]);
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

        $new_report = Report::create([
            'name' => $request->input('report_name'),
            'teacher_id' => 1, //temporary id
            'status' => 'pending',
            'data' => json_encode($data),
            'province' => $request->input('report_province'),
            'municipality' => $request->input('report_municipality'),
            'barangay' => $request->input('report_barangay'),
        ]);

        if ($new_report->id)
        {
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
    public function show(Report $report)
    {
        //
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

        $report->fill([
            'name' => 'Sample report',
            'teacher_id' => 1, //temporary id
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