<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kuishomeController extends Controller
{
  public function __construct()
{
 $this->middleware('auth');
}
    public function kuishome(){
		return view('kuishome');
    }
}
