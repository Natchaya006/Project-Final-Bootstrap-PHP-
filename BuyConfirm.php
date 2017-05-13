<?php
  $mid = $_POST['mid'];
  $connect = mysqli_connect("localhost","id1494919_admin","admin","id1494919_movie_shop");
  $sql = 'select * from movies where MID = '.$mid.'';
  $result = mysqli_query($connect,$sql);
  $row = mysqli_fetch_assoc($result) ;
  $id = $_POST['id'];
  $number = $_POST['number'];
  $mprice = $row['MPrice'];
  $oprice = $number*$mprice;
  $sql = 'INSERT INTO list VALUES("",'.'"'.$mid.'",'.'"'.$id.'",'.'"'.$number.'",'.'"'.$oprice.'",'.'"wait");';
  $result = mysqli_query($connect,$sql);
  header("location:OrderLoginCompelete.php");
?>
