<!DOCTYPE html>
<html>
<head>
<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
<style type="text/css">
table tr td,
table tr th{
font-size: 9pt;
}
</style>
<center>
<h5>Laporan Artikel</h4>
</center>
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
@foreach($us as $u)
<tr>
<td>{{$u->id}}</td>
<td>{{$u->name}}</td>
<td>{{$u->email}}</td>
<td><img width="150px" src="{{asset('storage/'.$u->featured_image)}}"></td>

</tr>
@endforeach
</tbody>
</table>
</body>
</html>