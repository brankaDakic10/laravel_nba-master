<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class NewsController extends Controller
{
    public function index()
    {

        $news=News::paginate(7);
        // $news=News::with('user')->paginate(5);
       
        return view('news.news-index',compact('news'));
    }
    public function show($id)
    {
        $single_news=News::with('user')->find($id);
        // $single_news=News::find($id);
        return view('news.news-show',compact('single_news'));
 
    }


}
