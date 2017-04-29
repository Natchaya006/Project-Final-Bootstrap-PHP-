<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $connect = mysqli_connect("localhost","id1494919_admin","02806","id1494919_movie");

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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
