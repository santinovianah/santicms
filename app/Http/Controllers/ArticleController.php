<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function article(){
		return view('article');
    }
    

    public function getById($id){
      $Article = Article::find($id);
      return view('master',['Article=> $Article']);
      }
}
