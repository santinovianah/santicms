@extends('kuishome')
@section('kontak')
<!-- Page Content -->
  <div class="container">

    <div class="row">

     
      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Arti
          <small>Lambang</small>
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">

          <div class="card-body">
          <!-- Preview Image -->
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <img class="img-fluid rounded"  src="img/logopas.png" >

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
            <h2 class="card-title"></h2>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">

          <div class="card-body">

<h2>Komentar</h2>
<form action="/kontak/create" method="post">
 @csrf
 <div class="form-group">
 <label for="title">Nama</label>
 <input type="text" class="form-control"
required="required" name="title"></br>
<div class="form-group">
 <label for="content">Komentar</label>
 <textarea type="text" class="form-control" required="required" name="content" rows="5"></textarea>
<br><button type="submit" name="add" class="btn btn-primary float-right">Tambah Komentar</button>
 </div>
<br>
<br>

 
 </form>

<!-- Post Content -->
<table class="table table-bordered table-striped">

 <tbody>

 @foreach($kontak as $k)
 <tr>
 <td>{{$k->title}} Says: <br>{{$k->content}}
 <a href="kontak/delete/{{ $k->id }}">Hapus</a>
 </td>
 <!-- <td><a href="/kontak/edit/{$k->id}" class="badge badgewarning">Edit</a></td> -->
 </tr>
 @endforeach
 </tbody>
</table>



          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>

        <!-- Blog Post -->
</div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          
        </ul>

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
                <a href="kuisinfo">Wisata</a>
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

@endsection