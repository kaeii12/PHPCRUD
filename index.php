<!DOCTYPE html>
<html>
<head>
	<title> CRUD </title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
  <h3>KULLANICI SIL VE GUNCELLE</h3><nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CRUD İŞLEMLERİ</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Anasayfa</a></li>
      <li><a href="create.php">Kullanıcı Oluştur</a></li>
     
    </ul>
  </div>
</nav>
 
</body>
</html>


<?php

$db=new PDO("mysql:host=localhost;dbname=databaseone","root","");
$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
$query=$db->query("select * from  tableone");

echo "<table  class='table table-hover'>
<tr><th>Id</th><th>Kullanici Adi</th><th>E-mail</th></tr>";
while ($cikti = $query->fetch(PDO::FETCH_ASSOC)) {
     echo "<tr><td>$cikti[id]</td><td>$cikti[kullaniciAdi]</td>
     <td>$cikti[email]</td>
     <td><a href='update.php?id=$cikti[id]'class='btn btn-success' >Güncelle</a></td>
     <td><a href='delete.php?id=$cikti[id]' class='btn btn-danger'>Sil</a></td>

     </tr>"; 
    }
		

	$query=null;





?>
