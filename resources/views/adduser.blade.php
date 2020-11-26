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
<form action="/user/create" method="post" enctype="multipart/form-data">
@csrf  
        <fieldset style=" margin-top:7%;">
        <legend>Tambah</legend>
        <p>
        <label for="name">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input style="width:100%; height:50px;border: 1px solid grey;border-radius: 20px;"type="text" required="required" name="name">
        </p>
        <p>
        <label for="email">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input style="width:100%; height:50px;border: 1px solid grey;border-radius: 20px;"type="text" class="form-control" required="required" name="email"></br>
        </p>
        <p>
        <label for="image">Feature Image</label>
        <input style="width:100%; height:50px;border: 1px solid grey;border-radius: 20px;" type="file" class="form-control" required="required" name="image" ></br>
        </p>
        <p>
        <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
        </p>
        </fieldset>
    </form>

</div>
</body>
</html>



