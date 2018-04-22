@extends('layouts.master')
@section ('title')
 
All news
@endsection



@section ('content')
<div class="col-sm-8 blog-main">
<h1>News</h1>
         
<ul>
@foreach($news as $new)

<li><h4><a href="{{route('single-news',['id'=>$new->id])}}">{{$new->title}}</a></h4></li>
<i>Published by  {{$new->user->name}} </i>


@endforeach





</ul>

 <nav class="blog-pagination">
                                       
   <a class="btn btn-outline-{{$news->currentPage()== 1? 'secondary disabled':'primary'}}" href="{{$news->previousPageUrl()}}">Previous</a>
   <a class="btn btn-outline-{{$news->hasMorePages()== 1? 'primary':'secondary disabled'}}" href="{{$news->nextPageUrl()}}">Next</a>
 </nav>
<!-- <div>{{$news->render()}}</div> -->

 
</div>
@endsection