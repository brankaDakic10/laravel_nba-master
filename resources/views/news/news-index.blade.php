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



@endforeach

</ul>
</div>
@endsection