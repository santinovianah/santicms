<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pasuruan</title>
  <style type="text/css">

    .tentang{
	width: 730px;
	height: 450px;
	background-color: #fafafa;
    padding: 33px;
    border-radius: 20px;
    margin-left: 50px;
        margin-top:50px;
    }
    .body
		{
			background-color:#44cce2;	
        }
        .gus{
	width: 40%;
	font-size: 15px;
	margin-left: 900px;
	margin-top: -70px;
	color: #fafafa;
	font-weight: bolder;
}
.tentang img{
	width: 40%;
	margin-left: 800px;
	margin-top: -80%;
}
</style>


  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

</head>


<body >
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" >DINAS KEBUDAYAAN DAN PARIWISATA KABUPATEN PASURUAN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="kuishome">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="kuisabout">About</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="kuisinfo">info</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="kuiskontak">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Blog Post -->
  <div class="card mb-4">
  
          <div class="tentang">
          @yield('content')
          <img src="img/gus.png">
          </div>
          <div class="gus">
     @yield('gus')
 </div>
     

 
  
 



  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; santinovianah 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
