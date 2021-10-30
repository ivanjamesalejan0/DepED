<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use PDF;

class BestInterviewQuestionController extends Controller
{
public function pdfview(Request $request)
{
$items = DB::table("reports")->get();
view()->share('data',$items);
if($request->has('download')){
$pdf = PDF::loadView('pdfview');
return $pdf->download('pdfview.pdf');
}
return view('pdfview');
}
}