<!--Layout import-->
@extends ('layouts.blogmaster')


<!--Content for page -->
@section('blogcontent')
  <div class="blog-header">
    <h1 class="blog-title">Publish a post</h1>
    <p class="lead blog-description">Form testing grounds</p>
  </div>

  <form method="post" action="/blogtemp">
    <!--csrf token created for every user session to prevent request forgery-->
    {{csrf_field()}}
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title">    
  </div>
  <div class="form-group">
    <label for="body">Body:</label>
    <input type="text" class="form-control" id="body" name="body">
  </div>

  <div class="form-group"> 
  <button type="submit" class="btn btn-primary">Publish</button>
  </div>
  </form>
  
  @include('layouts.errors')
  
@endsection
<!--Content end-->

<!--Footer section-->

