<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function user()
    {
    return view('user');
    }
    public function profile()
 {
 $user = User::all();
 return view('profile',['user' => $user]);
 }
    public function add()
    {
    return view('profile');
    }
    public function create(Request $request)
{
 if($request->file('image')){
 $image_name = $request->file('image')->store('images','public');
 }
 User::create([
 'featured_image' => $image_name,
 ]);
 return redirect('/profile');
}
    public function edit(Request $request)
    {
        return view('profile', ['user' => $request->user()
        ]);
    }
}
