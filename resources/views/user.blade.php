@extends('kuishome')

@section('user')
 <!-- Page Content -->

  <div class="container">

    <div class="row">
    
      <!-- Blog Entries Column -->
      
      <div class="col-md-8">

        <h1 class="my-4">Wisata
          <small>Wajib di Kunjungi</small>
        </h1>
        
        <!-- Blog Post -->

        <div class="card mb-4">
          <div class="card-body">
          <a href="user/add" class="btn btn-primary">+Tambah Data</a>
          <a href="/wisata/cetak_pdf" class="btn btn-primary"target="_blank">CETAK PDF</a>


<table class="table table-bordered table-striped">
<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>Foto</th>
<th>Edit Profil</th>
</tr>
</thead>
<tbody>
@foreach($user as $u)
<tr>
<td>{{$u->id}}</td>
<td>{{$u->name}}</td>
<td>{{$u->email}}</td>
<td><img width="150px" src="{{asset('storage/'.$u->featured_image)}}"></td>
<td><a href="user/edit/{{ $u->id }}" ><img src="img/editt.png"></td>

</tr>
@endforeach
</tbody>
</table>
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

@endsection