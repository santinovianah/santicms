<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use\Cache;


class HomeController extends Controller
{
  public function home(){
		return view('home');
    }

  // public function getAll(){
  //   $article = Article::all();
  //   return $article;
  //   }

    public function getAll(){
      $value=Cache::rememberForever('article',function(){
        return Article::all();
      });
      return $value;
    }



}

