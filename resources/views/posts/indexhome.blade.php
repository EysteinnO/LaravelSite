<!--Layout import-->
@extends ('layouts.master')


<!--Content for page -->
@section('content')

   <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Laravel</h1>
          <p class="lead text-muted">My journey through the Laravel framework.</p>
          <p>
            <a href="/posts/1" class="btn btn-primary my-2">Route 1</a>
            <a href="/posts/2" class="btn btn-secondary my-2">Route 2</a>
          </p>
        </div>
      </section>     
    </main>

@endsection
<!--Content end-->

<!--Footer section-->
@section('footer')

	<script src="/js/file.js"> 
	
@endsection