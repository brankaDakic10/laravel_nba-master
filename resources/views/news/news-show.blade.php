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
<p>{{$single_news->content}}</p>




</div>
@endsection