<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kuiskontakController extends Controller
{
  public function __construct()
{
 $this->middleware('auth');
}

    public function kuiskontak(){
		return view('kuiskontak');
    }
}
