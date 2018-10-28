<!--Layout import-->
@extends ('layouts.blogmaster')

<!--Content for page -->
@section('blogcontent')

      <div class="col-sm-8 blog-main">

      	<h1>{{$posts->title}}</h1>

      	{{$posts->body}}

      </div>

      
      <div class="comments">
      	
      	@foreach($posts->comments as $comment)

      	<article>
      		{{$comment->body}}
      	</article>
      	@endforeach
      </div>
@endsection
<!--Content end-->
