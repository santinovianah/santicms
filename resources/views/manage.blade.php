<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>info pasuruan</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

</head>

<body >

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">DINAS KEBUDAYAAN DAN PARIWISATA KABUPATEN PASURUAN</a>
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
          <li class="nav-item active">
            <a class="nav-link" href="kuisinfo">info</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="kuiskontak">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Page Content -->
  @yield('title')
  <div class="container">

    <div class="row">
    
      <!-- Blog Entries Column -->
      
      <div class="col-md-8">

        <h1 class="my-4">3 Wisata
          <small>Wajib di Kunjungi</small>
        </h1>
        
        <!-- Blog Post -->
        <a href="article/add" class="btn btn-primary">Tambah Data</a>

        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
        @foreach($article as $a)
            <tr>
                 <td>{{$a->id}}</td>
                 <td>{{$a->title}}</td>
                 <td>{{$a->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
       

        
        

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">

        <a href="kuiswisata" class="btn btn-primary">Show More &rarr;</a>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="kuismakanan">Makanan</a>
                  </li>
                  <li>
                    <a href="kuiswisata">Wisata</a>
                  </li>

                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                <li>
                    <a href="kuissejarah">Sejarah</a>
                  </li>
                  <li>
                    <a href="kuisvisimisi">Visi Misi</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Sekilas info</h5>
          <div class="card-body">
          Ke pasuruan tanpa mengunjungi wisata tampak kurang pas dan berpergian anda pasti ada yang kurang, jadi berikut tempat wisata rekomendasi di kabupaten pasuruan
          </div>
        </div>
            

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
