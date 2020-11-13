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
        <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
            @can('manage-display')
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            @endcan
          </li>


          <li class="nav-item {{ Route::is('wisata') ? 'active' : '' }}">
            @can('manage-wisata')
            <a class="nav-link" href="{{ route('wisata') }}">Kelola</a>
            @endcan
          </li>

          <li class="nav-item {{ Route::is('kontak') ? 'active' : '' }}">
            @can('manage-display')
            <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
            @endcan
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">Arti Lambang</h1>

        <!-- Author -->
 

        <hr>

        <!-- Date/Time -->
        <p>Posted on October 4, 2020 at 09:00 PM</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="img/logopas.png" alt="">

        <hr>

        <!-- Post Content -->
        <p></p>
        <p class="lead">Berdasarkan PERDA No. II/1988 Pasal.3 tentang bentuk lambang daerah, maka lambang Kabupaten Pasuruan adalah sebagai berikut :</p>
        <p>Perisai dengan warna hijau tua melambangkan sifat-sifat ketahanan dan ketabahan dalam mencapai kesejahteraan dan kedamaian</p>

        <p>Bingkai warna hitam melambangkan garis-garis kebijaksanaan.</p>

        <p>Pita bertuliskan "KABUPATEN PASURUAN", menunjukkan 1 daerah yang dilukiskan dalam lambang daerah.
          <br><br> Bintang yang terletak di tengah bagian atas, berwarna kuning emas, melambangkan "Ketuhanan Yang Maha Esa" yang harus dijunjung tinggi penuh keagungan, sedangkan pancaran sinarnya yang berjumlah 5 buah mencerminkan PANCASILA.
          <br><br> Kubah berwarna biru muda, melambangkan tempat ibadah agama, secara khusus merupakan kehidupan spiritual masyarakat Kabupaten Pasuruan yang dilaksanakan dengan penuh ketakwaan.
          <br><br> Keris berwarna hitam dan kuning dengan garis tepi berwarna putih melambangkan sikap kepahlawanan.
          <br><br> Tebu dan Kapuk Randu melambangkan salah satu gambar penghasilan serta merupakan penunjang perekonomian yang menonjol bagi masyarakat di wilayah Kabupaten Pasuruan.
          <br><br> Gunung, Daratan dan Laut masing-masing berwarna hijau tua, kuning tua dan biru tua, melambangkan bahwa kondisi geografis Kabupaten Pasuruan secara khusus sangat strategis dan terletak diantara ketiganya yang masing-masing mengandung potensi perekonomian yang dapat dikembangkan dan bersifat dinamis.
          <br><br> Pita Putih bertuliskan "Guna Karya Sarana Bhakti", merupakan motto pembangunan yang berarti kerja yang bermanfaat sebagai amal untuk berbakti.
        </p>

        

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <!-- Single Comment -->
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            @foreach ($posts as $row)
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5><a href="{{ url('/' . $row->slug) }}" style="text-decoration: none">{{ \Str::limit($row->title, 100) }}</a></h5>
                                        <p>{!! $row->content !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Comment with nested comments -->
        

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

        

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">kontak</h5>
          <div class="card-body">
          <p style="font-size:11px;"><img src="img/lok.png"> Alamat Kantor : JL. Hayam Wuruk No.14 Pasuruan - Jatim</p>
          <p style="font-size:11px;"><img src="img/telepon.png"> Telepon Kantor : (0343) 429064</p>
          <p style="font-size:11px;"><img src="img/email.png"> Email : diskominfo@pasuruankab.go.id</p>
          <p style="font-size:11px;"><img src="img/fax.png"> Fax Kantor : (0343) 429064</p>
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
