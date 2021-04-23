<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h3>KULLANICI OLUŞTUR</h3><nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Veri Ekleme</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Anasayfa</a></li>
      <li><a href="create.php">Kullanıcı Oluştur</a></li>
     
    </ul>
  </div>
</nav>

<form name="frm" method="POST" action="">
	<div class="input-group">
      <span class="input-group-addon">Text</span>
      <input id="msg" name="kAdi" type="text" class="form-control" required name="msg" placeholder="Kullanıcı adınız">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="text" required name="email" class="form-control" name="email" placeholder="Mail Adresiniz">
    </div>
    
    <br>
    <div>
<input type="submit" class="btn btn-primary" value="Onayla" name="ekle">

    </div>
  </form>

</body>
</html>

<?php

$db=new PDO("mysql:host=localhost;dbname=databaseone","root","");
if (isset($_POST['ekle']))
{
$name=$_POST['kAdi'];

$email=$_POST["email"];


$sorgu=$db->prepare("INSERT INTO tableOne (kullaniciAdi,email)values(?,?)");
$sorgu->bindParam(1,$name,PDO::PARAM_STR); 

$sorgu->bindParam(2,$email,PDO::PARAM_STR);


$sorgu->execute();

echo "<script type='text/javascript'> alert('EKLEME ISLEMI BASARILI')</script>";
}
/*
asdsdaad
ad
*/

?>
