<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
  public function index(){
  $article = Article::all();
  return view('manage',['article' => $article]);
  }

  public function add(){
  return view('addarticle');
  }
 
//   public function create(Request $request)
//  {
//  Article::create([
//  'title' => $request->title,
//  'content' => $request->content,
//  'featured_image' => $request->image
//  ]);
//  return redirect('/manage');
//  }
   

}
