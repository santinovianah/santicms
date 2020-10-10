<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kuisinfo;
use App\info;
use\Cache;

class kuisinfoController extends Controller
{
    // public function kuisinfo(){
    // 	return view('kuisinfo');
    public function kuisinfo(){
        $kuisinfo=DB::table('kuisinfo')->get();
    return view('kuisinfo',['kuisinfo'=>$kuisinfo]);
    }

    // public function getAll(){
    //     $value = Cache::rememberForever('kuisinfo', function () {
    //         return DB::table('kuisinfo')->get();
    //     });
    //     return $value;
    // }

    // public function kuisinfo()
    // {
    //     $kuisinfo = Cache::remember('kuisinfo', 3, function () {
    //         return kuisinfo::all();
    //     });
    //     return view('kuisinfo')
    //         ->with('kuisinfo', $kuisinfo);
    // }

    
    
}
