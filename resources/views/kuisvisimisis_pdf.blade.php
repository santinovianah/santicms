<!DOCTYPE html>
<html>
<head>
<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
<style type="text/css">
table tr td,
table tr th{
font-size: 10pt;
}
table{
    border:2px;
}


</style>
<center>
<h5>Laporan Artikel</h4>
</center>
<table class='table table-bordered'>
<thead>
<tr>
<th>Isi</th>
</tr>
</thead>
<tbody>
@php $i=1 @endphp
@foreach($visimisi as $kvm)
<tr>
<td>{{ $i++ }}</td>

<td>{{$kvm->content}}</td>

</tr>
@endforeach
</tbody>
</table>
</body>
</html>
