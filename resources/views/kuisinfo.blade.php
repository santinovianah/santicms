@extends('kuishome')
@section('kuisinfo')



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
        @foreach($kuisinfo as $ki)
        <div class="card mb-4">
          <div class="card-body">
          <img class="card-img-top" src="{{$ki->featured_image}}" alt="Card image cap">
            <h2 class="card-title">{{$ki->title}}</h2>
            <p class="card-text">{{$ki->content}}</p>
            
          </div>
          
        </div>
        
        @endforeach

        
        

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
