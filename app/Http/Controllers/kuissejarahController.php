<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kuissejarah;

class kuissejarahController extends Controller
{
    
    public function kuissejarah(){
        $kuissejarah=DB::table('kuissejarah')->get();
    return view('kuissejarah',['kuissejarah'=>$kuissejarah]);
    }
}
