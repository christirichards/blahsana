<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
    @foreach ($workspaces->data as $workspace)
    <li><a href="#">{{ $workspace->name }}</a></li>
    @endforeach
  </ul>
</div>
