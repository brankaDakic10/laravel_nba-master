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
        $news=News::with('user')->latest()->paginate(5);
       
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


     
     public  function create(){
   
          $teams = Team::all();
   
           return view('news.news-create',compact('teams'));
        }
    
        public function store(){

            $teams = Team::all();
            $this->validate(request(),[
                'title'=>'required',
               'content'=>'required',
                'teams'=>'required|array'
            ]);
    
            $news = new News();
        
            $news->title = request('title');
            $news->content = request('content');
            $news->user_id = auth()->user()->id;
        
            $news->save();

            ///////
            $news->teams()->attach(request('teams'));
            session()->flash('message', 
            'Thank you for publishing article on www.nba.com');

            return redirect()->route('all-news');
        }



       

}


