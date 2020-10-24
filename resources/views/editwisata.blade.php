<html>
<body bgcolor:#44cce2>

<style type="text/css">
body{
  background-color:#44cce2
}
nav{

background-color: #343a40!important;
justify-content: space-around;
height:55px;
position: fixed;
    top: 0;
    right: 0;
    left: 0;


}

nav ul{
  background: #343a40!important;
  list-style: none;

}
nav ul li{
  float: right;
  
}

nav ul li:hover{

}



nav ul li a{
  display: flex;
  padding: 20px;
  
  margin-top:-20px;
  direction: ltr;
  text-align:right;
  /* text-indent:200px; */
  color: #fff;
  text-decoration: none;
}
.tentang{
	width: 650px;
	height: 450px;
	background-color: #fafafa;
    padding: 33px;
    border-radius: 20px;
    margin-left: 50px;
    margin-top: 80px;
}

</style>

<nav>
<p style="color:white; position:absolute;left:50px;">DINAS KEBUDAYAAN DAN PARIWISATA KABUPATEN PASURUAN</p>
  <ul>
  <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
      <li><a href="kontak">Kontak</a></li>
      <li><a href="wisata">Info</a></li>
      <li><a href="kuisabout">About</a></li>
      <li><a href="kuishome">Home</a></li>
  </ul>
</nav>
<div class="tentang">
<form action="/update/{{$wisata->id}}" method="post">
{{csrf_field()}}  
<input type="hidden" name="id" value="{{$wisata->id}}">
        <fieldset style=" margin-top:7%;">
        <legend>Edit</legend>
        <p>
        <label for="title">Judul&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input style="width:100%; height:50px;border: 1px solid grey;border-radius: 20px;"type="text" required="required" name="title" value="{{$wisata->title}}">
        </p>
        <p>
        <label for="content">Content&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input style="width:100%; height:50px;border: 1px solid grey;border-radius: 20px;"type="text" class="form-control" required="required" name="content" value="{{$wisata->content}}"></br>
        </p>
        <p>
        <label for="image">Feature Image</label>
        <input style="width:100%; height:50px;border: 1px solid grey;border-radius: 20px;" type="text" class="form-control" required="required" name="image" value="{{$wisata->featured_image}}"></br>
        </p>
        <p>
        <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
        </p>
        </fieldset>
    </form>

</div>
</body>
</html>



