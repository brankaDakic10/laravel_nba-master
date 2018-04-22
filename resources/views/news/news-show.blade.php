@extends('layouts.master')

@section ('title')
 
{{$single_news->title}}
@endsection


@section ('content')
<div class="col-sm-8 blog-main">
<h3> {{$single_news->title}}</h3>
<p>@if($single_news->user)
<i>Author:<a href="">by {{$single_news->user->name}}</a> </i>
@endif
</p>

News for teams:
<ul>
@foreach($single_news->teams as $team)
<li><a href="{{ route('team-news', ['team' => $team->name]) }}">{{$team->name}}</a></li>
@endforeach
</ul>
<p>{{$single_news->content}}</p>

</div>
@endsection


