<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
use Illuminate\Support\Facades\Gate;
use PDF;
class WisataController extends Controller
{
    public function __construct()
    {
     //$this->middleware('auth');
     $this->middleware(function($request, $next){
     if(Gate::allows('manage-wisata')) return $next($request);
     abort(403, 'Anda tidak memiliki cukup hak akses');
     });
    }

    public function index()
    {
    $wisata = Wisata::all();
    return view('wisata',['wisata' => $wisata]);
    }

    public function add()
    {
    return view('addwisata');
    }
    //  public function create(Request $request)
    // {
    // Wisata::create([
    // 'title' => $request->title,
    // 'content' => $request->content,
    // 'featured_image' => $request->image
    // ]);
    // return redirect('/wisata');
    // }

    public function create(Request $request)
{
 if($request->file('image')){
 $image_name = $request->file('image')->store('images','public');
 }
 Wisata::create([
 'title' => $request->title,
 'content' => $request->content,
 'featured_image' => $image_name,
 ]);
 return redirect('/wisata');
}

    public function edit($id)
    {
    $wisata = Wisata::find($id);
    return view('editwisata',['wisata'=>$wisata]);
    }
    public function update($id, Request $request)
{
 $wisata = Wisata::find($id);
 $wisata->title = $request->title;
 $wisata->content = $request->content;

 if($wisata->featured_image && file_exists(storage_path('app/public/' . $wisata->featured_image)))
 {
  
 }

 $image_name = $request->file('image')->store('images', 'public');
 $wisata->featured_image = $image_name;
 $wisata->save();
 return redirect('/wisata');
}

    

    public function delete($id)
 {
 $wisata = Wisata::find($id);
 $wisata->delete();
 return redirect('/wisata');
 }

//cetakpdf
public function cetak_pdf(){
    $wisata = Wisata::all();
    $pdf = PDF::loadview('wisatas_pdf',['wisata'=>$wisata]);
    return $pdf->stream();
   }
   
   
}
