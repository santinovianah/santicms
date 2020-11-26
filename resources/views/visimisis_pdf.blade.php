<!DOCTYPE html>
<html>
<head>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">
<style type="text/css">

</style>
<div class="card mb-4">
    
      <div class="card-body">
      <!-- Post Content -->
      <center>
<h5>Visi Misi</h4>
</center>

      <p></p>
        <p class="lead">Visi</p>
        <p>"Menuju Kabupaten Pasuruan yang Sejahtera, Maslahat dan Berdaya Saing"</p>
        
        <p class="lead">Misi</p>
        @php $i=1 @endphp
        @foreach($Visimisis as $v)
        <p>{{$v->id}}. {{$v->content}}</p>

        </p>

        
@endforeach


</tbody>
</table>
</body>
</html>
