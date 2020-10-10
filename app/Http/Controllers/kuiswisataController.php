<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kuiswisata;
class kuiswisataController extends Controller
{
    public function kuiswisata(){
        $kuiswisata=DB::table('kuiswisata')->get();
    return view('kuiswisata',['kuiswisata'=>$kuiswisata]);
    }
}
