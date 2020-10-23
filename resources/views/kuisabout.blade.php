@extends('kuishome')

@section('kuisabout')
<style type="text/css">
.gus img{
	width: 40%;
	margin-left: 800px;
	margin-top: -100%;
}
</style>

<!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">
          <small>Selayang Pandang</small>
        </h1>

        <!-- Blog Post -->
        @foreach($kuisabout as $ka)
        <div class="card mb-4">
          
          <div class="card-body">
            <h2 class="card-title">{{$ka->title}}</h2>
            <p class="card-text">{{$ka->content}}</p>
          </div>
          

          
        </div>
        <div class="gus"><img src="img/gus.png">
        <p style="font-weight: bolder;font-size: 15px; position:absolute; left:850px;width: 40%; top:550px;">H.M. Irsyad Yusuf, SE, MMA <br>Bupati Pasuruan</p>
        </div>
@endforeach
        

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">

        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>
@endsection