@extends('parent')
@section('editkontak')
<form action="/kontak/update/{{$kontak->id}}" method="post">
@csrf
 <input type="hidden" name="id" value="{{$kontak->id}}"></br>
 <div class="form-group">
 <label for="title">Judul</label>
 <input type="text" class="form-control"required="required" name="title" value="{{$kontak->title}}"></br>
 </div>
 <div class="form-group">
 <label for="content">Content</label>
 <input type="text" class="form-control" required="required" name="content" value="{{$kontak->content}}"></br>
 </div>
 <button type="submit" name="edit" class="btn btnprimary float-right">Ubah Data</button>
 </form>

@endsection