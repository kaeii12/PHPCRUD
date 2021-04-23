<?php
$db=new PDO("mysql:host=localhost;dbname=databaseone","root","");

 $id=$_GET ["id"];
  $query=$db->prepare("delete from tableone where id=?");
  $query->bindParam(1,$id,PDO::PARAM_INT); 

  $query->execute();
  if($query){
echo "<script type='text/javascript'> alert('silme işlemi başarılı')</script>";
header("refresh:0;url=index.php");
}
else
  echo "<script type='text/javascript'> alert('silme işlemi hatalı')</script>";



?>
