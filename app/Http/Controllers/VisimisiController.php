<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Visimisi;
use Illuminate\Support\Facades\Gate;
use PDF;
use Illuminate\Support\Facades\DB;

class VisimisiController extends Controller
{
    public function __construct()
{
 $this->middleware('auth');
}

    public function Visimisi(){
        $Visimisis=DB::table('Visimisis')->get();
    return view('Visimisis',['Visimisis'=>$Visimisis]);
    }

    public function cetak_pdfvisimisi(){
        $Visimisis = Visimisi::all();
        $pdf = PDF::loadview('visimisis_pdf',['Visimisis'=>$Visimisis]);
        return $pdf->stream();
       }
       
}
