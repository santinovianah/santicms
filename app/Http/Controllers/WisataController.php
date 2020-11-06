<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
use Illuminate\Support\Facades\Gate;
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
     public function create(Request $request)
    {
    Wisata::create([
    'title' => $request->title,
    'content' => $request->content,
    'featured_image' => $request->image
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
    $wisata->featured_image = $request->image;
    $wisata->save();
    return redirect('/wisata');
    }

    public function delete($id)
 {
 $wisata = Wisata::find($id);
 $wisata->delete();
 return redirect('/wisata');
 }


   
}
