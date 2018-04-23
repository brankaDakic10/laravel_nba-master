<div class="blog-masthead header-nba">
      <!-- <div class="container"> -->
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/">Home</a>
         
          <a class="nav-link" href="{{route('all-news')}}">News</a>
          
          <a class="nav-link" href="{{route('news-create')}}">Create News</a>

          @if(Auth::check())
        <p class="nav-link" > User name: {{Auth()->user()->name}}</p>
        <a class="nav-link"  href="/logout">LogOut</a>
        @else
        <a  class="nav-link"  href="/login">LOGIN</a>
        <a class="nav-link"  href="/register">REGISTER</a>
@endif


        </nav>
        
      <!-- </div> -->
    </div>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">NBA</h1> 
        <!-- session start -->
        @if($message=session('message'))
        <div class="alert alert-success">
         {{$message}}
        </div>
        @endif
        <!-- - session end message -->
        <p class="lead blog-description">An example template </p>
      </div>
    </div>