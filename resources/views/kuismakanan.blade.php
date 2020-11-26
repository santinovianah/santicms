@extends('kuishome')
@section('kuismakanan')
 <!-- Page Content -->

  <div class="container">

    <div class="row">
    
      <!-- Blog Entries Column -->
      
      <div class="col-md-8">

        <h1 class="my-4">3 Makanan
          <small>Wajib Di Coba</small>
        </h1>
        
        <!-- Blog Post -->
        @foreach($kuismakanan as $km)
        <div class="card mb-4">
        <img class="card-img-top" src="{{$km->featured_image}}" alt="Card image cap">
          <div class="card-body">
         
            <h2 class="card-title">{{$km->id}}. {{$km->title}}</h2>
            <p class="card-text">{{$km->content}}</p>
            
 
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
                    <a href="visimisi">Visi Misi</a>
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