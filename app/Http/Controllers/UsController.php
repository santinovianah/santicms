<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;
use Illuminate\Support\Facades\Gate;
class UsController extends Controller
{
    public function __construct()
    {
     //$this->middleware('auth');
     $this->middleware(function($request, $next){
     if(Gate::allows('manage-user')) return $next($request);
     abort(403, 'Anda tidak memiliki cukup hak akses');
     });
    }

    public function index( )
    {
    $us = User::all();;
    return view('us',['us' => $us]);
    }

    public function add()
    {
    return view('adduser');
    }

    public function create(Request $request)
{
 if($request->file('image')){
 $image_name = $request->file('image')->store('images','public');
 }
User::create([
 'featured_image' => $image_name,
 ]);
 return redirect('/us');
}

public function edit($id)
    {
    $us = User::find($id);
    return view('edituser',['us'=>$us]);
    }
    public function update($id, Request $request)
    {
     $us = User::find($id);
     $us->name = $request->name;
     $us->email = $request->email;
    
     if($us->featured_image && file_exists(storage_path('app/public/' . $us->featured_image)))
     {
      
     }
    
     $image_name = $request->file('image')->store('images', 'public');
     $us->featured_image = $image_name;
     $us->save();
     return redirect('/us');
    }

    

    public function delete($id)
 {
 $us = User::find($id);
 $us->delete();
 return redirect('/us');
 }

 //cetak
 public function cetak_pdfus(){
    $us = User::all();
    $pdf = PDF::loadview('users_pdf',['us'=>$us]);
    return $pdf->stream();
   }
}
