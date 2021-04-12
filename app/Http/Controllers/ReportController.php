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
        $result = Report::get()->toArray() ?? [];

        return view('admin.views.reports.list', ['reports' => $result]);
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
            return view('admin.views.reports.small-scale.create');
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
            'name' => 'Sample report',
            'teacher_id' => 1,
            'status' => 'pending',
            'data' => json_encode($data),
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
            return view('admin.views.reports.small-scale.create', ['data' => $return_data]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}