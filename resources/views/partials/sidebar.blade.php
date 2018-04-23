<div class="col-sm-3 offset-sm-1 blog-sidebar">

   
   <div class="sidebar-module">
  <h4>All Teams</h4>
  <ol class="list-unstyled">
  @foreach($teams as $team)
  
    <li><a href="/news/team/{{$team->name}}">{{$team->name}}</a></li>
    
    @endforeach
  </ol>
</div>
</div>