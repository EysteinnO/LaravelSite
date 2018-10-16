<!--Layout import-->
@extends ('layouts.blogmaster')

<!--Content for page -->
@section('blogcontent')

      <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>

      <!--Foreach post in Task table include the article partial-->
      @foreach($posts as $post) 
      @include('blog.article')
      @endforeach
          

@endsection
<!--Content end-->
