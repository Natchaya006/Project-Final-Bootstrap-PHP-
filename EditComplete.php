<?php
  $id = $_POST['id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $add1 = $_POST['add1'];
  $add2 = $_POST['add2'];
$connect = mysqli_connect("localhost","id1494919_admin","admin","id1494919_movie_shop");
  $sql = 'update user set FName = "'.$fname.'" where User_ID = "'.$id.'"';
  $result = mysqli_query($connect,$sql);
  $sql = 'update user set LName = "'.$lname.'" where User_ID = "'.$id.'"';
  $result = mysqli_query($connect,$sql);
  $sql = 'update user set Email = "'.$email.'" where User_ID = "'.$id.'"';
  $result = mysqli_query($connect,$sql);
  $sql = 'update user set Pass = "'.$pass.'" where User_ID = "'.$id.'"';
  $result = mysqli_query($connect,$sql);
  $sql = 'update user set Address1 = "'.$add1.'" where User_ID = "'.$id.'"';
  $result = mysqli_query($connect,$sql);
  $sql = 'update user set Address2 = "'.$add2.'" where User_ID = "'.$id.'"';
  $result = mysqli_query($connect,$sql);
  header("location:EditProfile.php");
  mysqli_close($connect);
?>
