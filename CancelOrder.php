<?php
$mid=$_POST['mid'];
$connect = mysqli_connect("localhost","id1494919_admin","02806","id1494919_movie");
$sql = 'Delete from list where  OID = "'.$mid.'"';
$result = mysqli_query($connect,$sql);
header("location:OrderLoginCompelete.php");
mysqli_close($connect);
 ?>
