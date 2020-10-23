<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;
class KontakController extends Controller
{
    public function kontak()
 {
 $kontak = Kontak::all();
 return view('kontak',['kontak' => $kontak]);
 }

 public function add()
    {
    return view('kontak');
    }
     public function create(Request $request)
    {
    Kontak::create([
    'title' => $request->title,
    'content' => $request->content,
    ]);
    return redirect('/kontak');
    }

    public function edit($id)
    {
    $kontak = Kontak::find($id);
    return view('editkontak',['kontak'=>$kontak]);
    }
   

    
    public function update($id, Request $request)
 {
 $kontak = Kontak::find($id);
 $kontak->title = $request->title;
 $kontak->content = $request->content;
 $kontak->save();
 return redirect('/kontak');
 }

 public function delete($id)
 {
 $kontak = Kontak::find($id);
 $kontak->delete();
 return redirect('/kontak');
 }


}
