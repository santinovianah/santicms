<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pasuruan</title>
  <!-- <style type="text/css">
    .coverBg{
        background-image: url(img/pasuruan-map.png);
        position: fixed;
        width:100%;
        height:100%;
        background-size:100%;
    }
</style> -->


  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

</head>


<body   >
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
            <a class="nav-link" href="master">Home</a>
          </li>
         
          <li class="nav-item ">
            <a class="nav-link" href="kuisabout">About</a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="wisata">info</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="kontak">Kontak</a>
          </li>

          <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="login"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
          </li>
 
        </ul>
 
      </div>
    </div>
  </nav>
  
  <h>

@yield('kuisabout')
@yield('kuisinfo')
@yield('kuismakanan')
@yield('kuissejarah')
@yield('wisata')
@yield('kuisvisimisi')
@yield('kontak')

@yield('editwisata')


  <!-- Footer -->
  <!-- Footer -->
 <!-- <div  style="color:red;height:50px;position:absolute; top:5p%;">ndsjam&nbsp; </div>
  <footer class="py-8 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div> -->
    
    <!-- /.container -->
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
