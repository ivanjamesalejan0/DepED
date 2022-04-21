<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class chartController extends Controller
{

    public function randomGenerateReport()
    {
        $orig_ss = DB::select("select * from reports where json_extract(data, '$.report-type') = 'small-scale'")[0] ?? null;
        //$orig_ss = DB::select("select * from reports where json_extract(data, '$.report-type') = 'large-scale'")[0] ?? null;
        //$orig_ss = DB::select("select * from reports where json_extract(data, '$.report-type') = 'armed-conflict'")[0] ?? null;

        $teachers = DB::select("select * from teachers");

        $barangay = [
            'Magsaysay',
            'Maligaya',
            'Barangay 8',
            'Aglayan',
            'Apo Macote',
            'Bangcud',
            'Barangay 1',
            'Barangay 10',
            'Barangay 11',
            'Barangay 2',
            'Barangay 3',
            'Barangay 4',
            'Barangay 5',
            'Barangay 6',
            'Barangay 7',
            'Barangay 9',
            'Busdi',
            'Cabangahan',
            'Caburacanan',
            'Canayan',
            'Capitan Angel',
            'Casisang',
            'Dalwangan',
            'Imbayao',
            'Indalaza',
            'Kabalabag',
            'Kalasungay',
            'Kulaman',
            'Laguitas',
            'Linabo',
            'Managok',
            'Manalog',
            'Mapayag',
            'Mapulo',
            'Miglamin',
            'Patpat',
            'Saint Peter',
            'San Jose',
            'San Martin',
            'Santo Niño',
            'Silae',
            'Simaya',
            'Sinanglanan',
            'Sumpong',
            'Violeta',
            'Zamboanguita',
        ];

        $sql = "insert into reports (name, teacher_id, status, data, province, municipality, barangay, created_at) values (";
        $values_str = [];
        for ($a = 0; $a < 100; $a++)
        {

            $values = [$orig_ss->name, $teachers[rand(0, count($teachers) - 1)]->id, $orig_ss->status, $orig_ss->data, $orig_ss->province, $orig_ss->municipality, $barangay[rand(0, count($barangay) - 1)], '2022-' . rand(1, 12) . '-01 01:01:01'];
            $values_str[$a] = "'";
            $values_str[$a] .= implode("','", $values);
            $values_str[$a] .= "'";
        }
        $sql .= implode('),(', $values_str);

        $sql .= ')';

        $exec = DB::select($sql);

        dd($exec);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$this->randomGenerateReport();

        $count_ss = DB::select("select MONTHNAME(created_at) MONTH, count(*) as COUNT from reports where json_extract(data, '$.report-type') = 'small-scale' && YEAR(created_at) = YEAR(CURDATE()) group by MONTH");
        $count_ls = DB::select("select MONTHNAME(created_at) MONTH, count(*) as COUNT from reports where json_extract(data, '$.report-type') = 'large-scale' && YEAR(created_at) = YEAR(CURDATE()) group by MONTH");
        $count_ac = DB::select("select MONTHNAME(created_at) MONTH, count(*) as COUNT from reports where json_extract(data, '$.report-type') = 'armed-conflict' && YEAR(created_at) = YEAR(CURDATE()) group by MONTH");

        //parse small scale
        $tmp = [];
        for ($m = 1; $m <= 12; ++$m)
        {
            $month = date('F', mktime(0, 0, 0, $m, 1));
            $tmp[$month] = 0;
        }
        foreach ($count_ss as $k => $v)
        {
            $tmp[$v->MONTH] = $v->COUNT;
        }
        $count_ss = array_values($tmp);

        //parse large scale
        $tmp = [];
        for ($m = 1; $m <= 12; ++$m)
        {
            $month = date('F', mktime(0, 0, 0, $m, 1));
            $tmp[$month] = 0;
        }
        foreach ($count_ls as $k => $v)
        {
            $tmp[$v->MONTH] = $v->COUNT;
        }
        $count_ls = array_values($tmp);

        //parse armed conflict
        $tmp = [];
        for ($m = 1; $m <= 12; ++$m)
        {
            $month = date('F', mktime(0, 0, 0, $m, 1));
            $tmp[$month] = 0;
        }
        foreach ($count_ac as $k => $v)
        {
            $tmp[$v->MONTH] = $v->COUNT;
        }
        $count_ac = array_values($tmp);

        $geo = DB::table('reports')->selectRaw("province, municipality, barangay, count(*) as count")->whereRaw("YEAR(created_at) = YEAR(CURDATE())")->groupBy(['province', 'municipality', 'barangay'])->get();

        $school = DB::table('reports')->join('teachers', 'teachers.id', 'reports.teacher_id')->join('tbl_schools', 'teachers.school', 'tbl_schools.school_id')->selectRaw("tbl_schools.school_id as school_id, tbl_schools.school_name as school_name, count(*) as count")->whereRaw("YEAR(reports.created_at) = YEAR(CURDATE())")->groupBy(['school_id'])->get();

        return view('admin.statistics.statistics', [
            'count' => [
                'ss' => $count_ss,
                'ls' => $count_ls,
                'ac' => $count_ac,
            ],
            'geo' => $geo,
            'schools' => $school,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function geoDetailReport(Request $request)
    {
        $ss = DB::select("select count(*) as count from reports where province = ? and municipality = ? and barangay = ? and YEAR(created_at)  = ? and json_extract(data, '$.report-type') = 'small-scale'", [$request->province, $request->municipality, $request->barangay, $request->year])[0] ?? null;
        $lc = DB::select("select count(*) as count from reports where province = ? and municipality = ? and barangay = ? and YEAR(created_at)  = ? and json_extract(data, '$.report-type') = 'large-scale'", [$request->province, $request->municipality, $request->barangay, $request->year])[0] ?? null;
        $ac = DB::select("select count(*) as count from reports where province = ? and municipality = ? and barangay = ? and YEAR(created_at)  = ? and json_extract(data, '$.report-type') = 'armed-conflict'", [$request->province, $request->municipality, $request->barangay, $request->year])[0] ?? null;

        $reports = [
            'ss' => $ss->count,
            'ls' => $lc->count,
            'ac' => $ac->count,
        ];

        return view('admin.statistics.geo-detail-report', [
            'count' => $reports,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function schoolDetailReport(Request $request)
    {
        $ss = DB::select("select count(*) as count from reports join teachers on reports.teacher_id = teachers.id join tbl_schools on tbl_schools.school_id = teachers.school where school_id = ? and YEAR(reports.created_at)  = ? and json_extract(data, '$.report-type') = 'small-scale'", [$request->school_id, $request->year])[0] ?? null;
        $lc = DB::select("select count(*) as count from reports join teachers on reports.teacher_id = teachers.id join tbl_schools on tbl_schools.school_id = teachers.school where school_id = ? and YEAR(reports.created_at)  = ? and json_extract(data, '$.report-type') = 'large-scale'", [$request->school_id, $request->year])[0] ?? null;
        $ac = DB::select("select count(*) as count from reports join teachers on reports.teacher_id = teachers.id join tbl_schools on tbl_schools.school_id = teachers.school where school_id = ? and YEAR(reports.created_at)  = ? and json_extract(data, '$.report-type') = 'armed-conflict'", [$request->school_id, $request->year])[0] ?? null;

        $reports = [
            'ss' => $ss->count,
            'ls' => $lc->count,
            'ac' => $ac->count,
        ];

        return view('admin.statistics.school-detail-report', [
            'count' => $reports,
        ]);
    }

}