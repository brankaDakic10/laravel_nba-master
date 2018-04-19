<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class NewsController extends Controller
{
    public function index()
    {
        $news=News::all();
 
        return view('news.news-index',compact('news'));
    }
    public function show($id)
    {
        $single_news=News::find($id);
        return view('news.news-show',compact('single_news'));
 
    }


}
