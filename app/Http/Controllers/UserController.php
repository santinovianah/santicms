<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Gate;
class UserController extends Controller
{
    public function __construct()
    {
     //$this->middleware('auth');
     $this->middleware(function($request, $next){
     if(Gate::allows('manage-admin')) return $next($request);
     abort(403, 'Anda tidak memiliki cukup hak akses');
     });
    }

    public function index( )
    {
    $user = User::all();;
    return view('user',['user' => $user]);
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
 return redirect('/user');
}

public function edit($id)
    {
    $user = User::find($id);
    return view('edituser',['user'=>$user]);
    }
    public function update($id, Request $request)
{
 $user = User::find($id);
 $user->name = $request->name;
 $user->email = $request->email;
 

 if($user->featured_image && file_exists(storage_path('app/public/' . $user->featured_image)))
 {
  
 }

 $image_name = $request->file('image')->store('images', 'public');
 $user->featured_image = $image_name;
 $user->save();
 return redirect('/user');

 $path = Storage::putFile(
    'public/images',
    $request->file('featured_image'),
);
}

    

    public function delete($id)
 {
 $wisata = Wisata::find($id);
 $wisata->delete();
 return redirect('/wisata');
 }
}
