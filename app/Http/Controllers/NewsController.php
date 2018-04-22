<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Team;
class NewsController extends Controller
{
    public function index()
    {

        // $news=News::paginate(7);
        $news=News::with('user')->paginate(5);
       
        return view('news.news-index',compact('news'));
    }
    public function show($id)
    {
        $single_news=News::with(['user', 'teams'])->find($id);
        // $single_news=News::find($id);
        return view('news.news-show',compact('single_news'));
 
    }

  

    public function teamNews(Team $team)
        {
          $news= $team->news; 
         return view('news.news-teamNews', compact('news'));
       }


}


