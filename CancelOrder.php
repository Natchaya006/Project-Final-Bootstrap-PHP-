<?php
  $oid=$_POST['oid'];
  $mid=$_POST['mid'];
  $number = $_POST['number'];
$connect = mysqli_connect("localhost","id1494919_admin","admin","id1494919_movie_shop");

  $sql = 'Delete from list where  OID = "'.$oid.'"';
  $result = mysqli_query($connect,$sql);

  $sql = 'select * from movies where MID = '.$mid.'';
  $result = mysqli_query($connect,$sql);
  $row = mysqli_fetch_assoc($result) ;
  $quantity = $row['MQuantity'] + $number;
 echo $quantity;
  $sql = 'update movies set MQuantity = "'.$quantity.'" where MID = "'.$mid.'"';
  $result = mysqli_query($connect,$sql);

header("location:OrderLoginCompelete.php");
  mysqli_close($connect);
?>
