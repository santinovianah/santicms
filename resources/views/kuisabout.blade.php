<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>kontak</title>

 <!-- Bootstrap core CSS -->
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">DINAS KEBUDAYAAN DAN PARIWISATA KABUPATEN PASURUAN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="kuishome">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kuisabout">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kuisinfo">Info</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="kuiskontak">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

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

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
