@extends('master')
@section('title','halo')
@section('content')
<form action="/update/{{$wisata->id}}" method="post">
{{csrf_field()}}  
 <input type="hidden" name="id" value="{{$wisata->id}}"></br>
 <div class="form-group">
 <label for="title">Judul</label>
 <input type="text" class="form-control" required="required" name="title" value="{{$wisata->title}}"></br>
 </div>
 <div class="form-group">
 <label for="content">Content</label>
 <input type="text" class="form-control" required="required" name="content" value="{{$wisata->content}}"></br>
 </div>
 <div class="form-group">
 <label for="image">Feature Image</label>
 <input type="text" class="form-control" required="required" name="image" value="{{$wisata->featured_image}}"></br>
 </div>
 <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
 </form>

          
            <h2 class="card-title"></h2>
            <p class="card-text"></p>
          </div>
          <div class="card-footer text-muted">
          </div>
        </div>
@endsection