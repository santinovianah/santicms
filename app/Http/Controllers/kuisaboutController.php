<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kuisabout;

class kuisaboutController extends Controller
{
    // public function kuisabout(){
		// return view('kuisabout');
    // }
    public function __construct()
{
 $this->middleware('auth');
}

    public function kuisabout(){
      $kuisabout=DB::table('kuisabout')->get();
  return view('kuisabout',['kuisabout'=>$kuisabout]);
  }
}
