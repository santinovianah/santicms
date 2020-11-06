<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kuisvisimisi;
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
}
