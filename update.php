


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
      <a class="navbar-brand" href="#">CRUD İŞLEMLERİ</a>
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

<?php
$id=$_GET["id"];
$db=new PDO("mysql:host=localhost;dbname=databaseone","root","");
$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
$query=$db->query("select kullaniciAdi,email from tableone where id=$id");

while ($cikti = $query->fetch(PDO::FETCH_ASSOC)) {

echo "<input  required  type='text' class='form-control' name='kadi' value='$cikti[kullaniciAdi]'";
echo "<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span></div><br>";

echo "<div class='input-group'>";
    echo "<span class='input-group-addon'>Text</span>";

echo "<input  required  type='text' class='form-control' name='email' value='$cikti[email]'";
echo "<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span></div><br>";
}
?>

 
    <br>
    <div>
<input type="submit" class="btn btn-primary" value="Guncelle" name="Guncelle">

    </div>
  </form>

</body>
</html>


<?php
$db=new PDO("mysql:host=localhost;dbname=databaseone","root","");
if (isset($_POST['Guncelle']))
{

$id=$_GET["id"];
$k_ad=$_POST["kadi"];
$email=$_POST["email"];
$db=new PDO("mysql:host=localhost;dbname=databaseone","root","");
$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");


$query=$db->prepare("UPDATE  tableone set kullaniciAdi=?,email=? where id=$id");

$query->bindParam(1,$k_ad,PDO::PARAM_STR); //SALDIRILARINA ONLEM ICIN  BIND PARAM KOMUTU KULLANILDI
$query->bindParam(2,$email,PDO::PARAM_STR);

$query->execute();

if($query){
  echo "<script> alert('Güncelleştirme Başarılı Anasayfaya yönlendirileceksiniz')</script>";
header("refresh:0;url=index.php");
}
else
{
   echo "<script> alert('Hata')</script>";
}

}

?>
