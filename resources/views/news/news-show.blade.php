@extends('layouts.master')

@section ('title')
 
{{$single_news->title}}
@endsection


@section ('content')
<div class="col-sm-8 blog-main">
<h3> {{$single_news->title}}</h3>
<p>{{$single_news->content}}</p>
</div>


@endsection