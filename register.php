<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $connect = mysqli_connect("localhost","id1494919_admin","02806","id1494919_movie");
    $sql = 'INSERT INTO user VALUES("","'.$_POST['fname'].'","'.$_POST['lname'].'","'.$_POST['email'].'","'.$_POST['pass'].'","'.$_POST['address1'].'","'.$_POST['address2'].'");';
    $result = mysqli_query($connect,$sql);
    $sql = 'select MAX(User_ID) from user';
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result) ;
      echo '<br>';
      echo '<center>You ID is : '.$row['MAX(User_ID)'].'</center>';
      echo '<form action="index.php" method="post">';
      echo '<center><input type="submit" value="Back" class="btn btn-primary"></center>';
      echo '</form>';
    mysqli_close($connect);
     ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
