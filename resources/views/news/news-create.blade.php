@extends('layouts.master')
@section ('title')
 
Create news
@endsection



@section ('content')
<div class="col-sm-8 blog-main">
<h2>Create news</h2>
         

<form method="POST" action="{{ route('news-store') }}">
       {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title">
        @include('partials.error-message',['fieldTitle'=>'title'])
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content"></textarea>
        @include('partials.error-message',['fieldTitle'=>'content'])
    </div>
   
<!-- start -->
 @if (count($teams))
            <div class="form-group">
                <label for="teams[]">Teams</label> <br>

                @foreach($teams as $team)
                    <input type="checkbox" id="team" name="teams[]" value="{{ $team->id }}"> {{ $team->name }} <br>
                @endforeach
                @include('partials.error-message',['fieldTitle'=>'teams'])

            </div>
        @endif
 <!-- ///end for teams -->



    <div class="form-group">
 <button type="submit" class="btn btn-primary">Submit</button>
 </div>




</div>
@endsection