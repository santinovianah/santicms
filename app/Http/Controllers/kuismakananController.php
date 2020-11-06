<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kuismakanan;

class kuismakananController extends Controller
{
    // public function kuismakanan(){
	// 	return view('kuismakanan');
    // }

    public function __construct()
{
 $this->middleware('auth');
}

    public function kuismakanan(){
        $kuismakanan=DB::table('kuismakanan')->get();
    return view('kuismakanan',['kuismakanan'=>$kuismakanan]);
    }
}
