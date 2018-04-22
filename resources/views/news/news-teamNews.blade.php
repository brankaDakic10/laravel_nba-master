@extends('layouts.master')

@section('title')
Team news
@endsection

@section('content')
<div class="col-sm-8 blog-main">
<h1>Team news page</h1>
<ul>
@foreach($news as $new)
    <li><a href="{{ route('single-news', ['id' => $new->id]) }}">{{ $new->title }}</a> <b>By</b> <i>{{$new->user->name}}</i></li>
   <p>{{ $new->content }}</p> 
@endforeach
</ul>

</div>
@endsection