<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\kuisvisimisi;
use Illuminate\Support\Facades\Gate;
use PDF;
use Illuminate\Support\Facades\DB;



class kuisvisimisiController extends Controller
{
    // public function kuisvisimisi(){
	// 	return view('kuisvisimisi');
    // }
    public function __construct()
{
 $this->middleware('auth');
}

    public function kuisvisimisi(){
        $kuisvisimisi=DB::table('kuisvisimisi')->get();
    return view('kuisvisimisi',['kuisvisimisi'=>$kuisvisimisi]);
    }

    //cetakpdf
public function cetak_pdfvisimisi(){
    $kuisvisimisi=kuisvisimisi::all();
    $pdf = PDF::loadview('kuisvisimisis_pdf',['kuisvisimisi'=>$kuisvisimisi]);
    return $pdf->stream();
   }
}
