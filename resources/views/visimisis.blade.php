@extends('kuishome')
@section('visimisi')
<!-- Page Content -->

<div class="container">

<div class="row">

  <!-- Blog Entries Column -->
  
  <div class="col-md-8">
  <h1 class="my-4">
          <small>Visi Misi</small>
        </h1>

<!-- Date/Time -->
<p>Posted on October 4, 2020 at 09:00 PM</p>

<hr>

    
    <!-- Blog Post -->

    <div class="card mb-4">
    
      <div class="card-body">
      <!-- Post Content -->

      <p></p>
        <p class="lead">Visi</p>
        <p>"Menuju Kabupaten Pasuruan yang Sejahtera, Maslahat dan Berdaya Saing"</p>
        
        <p class="lead">Misi</p>
        @foreach($Visimisis as $v)
        <p>{{$v->id}}. {{$v->content}}</p>

        </p>

        
@endforeach
<a href="/visimisi/cetak_pdfvisimisi" class="btn btn-primary"target="_blank">CETAK PDF</a>

        
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
    <div class="">
      
      <div class="">
      
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