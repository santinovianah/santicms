@extends('kuishome')
@section('kuissejarah')
 <!-- Page Content -->

 <div class="container">

<div class="row">

  <!-- Blog Entries Column -->
  
  <div class="col-md-8">
  <h1 class="my-4">Sejarah
          <small>Kabupaten Pasuruan</small>
        </h1>

<!-- Date/Time -->
<p>Posted on October 4, 2020 at 09:00 PM</p>

<hr>

    
    <!-- Blog Post -->

    <div class="card mb-4">
    
      <div class="card-body">
      @foreach($kuissejarah as $ks)
        <p></p>
        <p class="lead">{{$ks->title}}</p>
        <p>{{$ks->content}}</p>
        <p>Setelah masa kejayaan Kalingga berakhir muncullah Kerajaan Mataram Kuno dibawah kekuasaan Dinasti Sanjaya Tahun 856 Masehi dipimpin oleh Raja Rakai Pikatan, diantara keturunan raja Dinasti Sanjaya yang telah banyak meninggalkan beberapa prasasti baik di Jawa Timur maupun Jawa Tengah adalah Raja Balitung. Kemudian pada Tahun 929 seorang Raja dari keluarga lain memerintah yaitu Mpu Sindok yang telah menggeser pusat pemerintahan dari Jawa Tengah ke Jawa Timur dengan ibu kota kerajaan  Tawlang identik dengan nama Desa Tembelang di daerah Jombang. Selama memerintah Mpu Sindok telah mengeluarkan lebih dari dua puluh prasasti diantaranya Prasasti yang terletak di Dusun Sukci, Desa Bulusari, Kecamatan Gempol yang menyebutkan Mpu Sindok memerintahkan agar rakyat Cungrang yang termasuk wilayah bawang, dibawah langsung Wahuta  Tungkal untuk menjadi sima (tanah perdikan). Substansi dalam prasasti ini dikonfersikan oleh Balai Arkeologi Yogyakarta dengan Hari Jum’at Pahing, tanggal 18 September 929 Masehi.</p>

        <p>Dalam era jaman Majapahit dari Abad XII sampai Abad XIV  Masehi  nama Pasuruan sebagai nama tempat hunian masyarakat dikenal pertama kali dan  tertulis dalam Kitab Negara Kertagama karangan Empu Prapanca. Pasoeroean dari segi kebahasaan dapat diurai menjadi pa-soeroe-an artinya tempat tumbuh tanaman suruh atau kumpulan daun suruh. 
          <br><br>Pada era  Pasoeroean dalam kekuasaan Kerajaan Giri sekitar Abad  XIV sampai XVI  salah satu peninggalan utama adalah daerah Sidogiri. Berdasarkan sejarah lisan bahwa daerah inilah awal Sunan Giri meletakkan dasar-dasar dakwah dengan membuka langgar sekaligus tempat ngaji yang kemudian dinamakan Sidogiri.
          <br><br> Pada masa Kerajaan Demak Abad Ke XV,   Pasoeroean memiliki peranan penting dalam menyebarkan agama Islam. Bahkan Adipati Pasoeroean berhasil memperluas  kekuasaannya sampai Kediri. Pasoeroean dibawah Kerajaan Pajang  tidak lama karena pada Tahun 1616 ketika Sultan Agung bertahta Kerajaan Mataram berhasil merebut wilayah Pasoeroean. Perkembangan selanjutnya Pada saat  Amangkurat I memegang kekuasaan   diangkatlah  Kyai Darmoyuda menjadi wedana Bupati Pasuruan. Wilayah Pasoeroean dibawah kekuasaan Amangkurat I banyak pergolakan untuk memisahkan diri dari Kerajaan Mataram bahkan pada saat Untung Suropati berkuasa di Pasoeroean upaya itu sangat kuat sehingga mataram dibantu Kompeni  Belanda berupaya mengembalikan wilayah Pasuruan masuk kekuasaan Kerajaan Mataram.
          <br><br> Perkembangan selanjutnya  pada masa Kolonial Belanda berdasarkan Staatblad 1900 No 334 tanggal 1 Januari 1901dibentuklan Kabupaten Pasoeroean yang wilayahnya berbatasan dengan madura, laut hindia, sebelah barat dengan residen Kediri dan Surabaya.
          <br><br> Setelah melakukan kajian yang utuh dan menyeluruh terhadap fakta Sejarah Kabupaten Pasuruan, maka diperoleh lima kriteria pokok dalam penetapan hari jadi yang disepakati oleh masyarakat Kabupaten Pasoeroean yaitu :
          <br><br> 1.   Adanya periode sejarah tertua,
          <br><br> 2.   Bukti tertulis dan peninggalan yang tertua,
          <br><br> 3.   Pemukiman yang tertua,
          <br><br> 4.   Struktur pemerintahan tertua dan bersifat indonesia-sentris.
          <br><br> 5.   Menunjukkan kebanggaan pada peradapan lokal,
          <br><br> Maka diperoleh  hari kelahiran Kabupaten Pasoeroean berdasarkan PRASASTI CUNGRANG / SUKCI  yang terletak di Dusun Sukci, Desa Bulusari, Kecamatan Gempol maka Kabupaten Pasoeroean Lahir pada Hari Jum’at Pahing tanggal 18 September 929 M.
          <br><br> Dan atas dasar pertimbangan perjalanan sejarah inilah, maka diundangkan  Peraturan Daerah Kabupaten Pasuruan Nomor 8 Tahun 2007 tentang Hari Jadi Kabupaten Pasuruan yang menetapkan  tanggal 18 September sebagai Hari Jadi Kabupaten Pasuruan dan diperingati setiap tahun di wilayah Kabupaten Pasuruan.
        </p>
        @endforeach
        
        <h2 class="card-title"></h2>
        <p class="card-text"></p>
        

      </div>

    </div>


    
    

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
    

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
      <h5 class="card-header">Sekilias Info</h5>
      <div class="card-body">
      Makanan adalah zat yang dimakan oleh makhluk hidup untuk mendapatkan nutrisi yang kemudian diolah menjadi energi. Karbohidrat, lemak, protein, vitamin, dan mineral merupakan nutrien dalam makanan yang dibutuhkan oleh tubuh. Cairan yang dipakai untuk maksud ini sering disebut minuman, tetapi kata 'makanan' juga bisa dipakai. Makanan yang dikonsumsi oleh manusia disebut pangan, sedangkan makanan yang dikonsumsi oleh hewan disebut pakan.
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