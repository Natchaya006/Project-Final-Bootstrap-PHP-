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
    $pass = $_POST['pass'];

    $connect = mysqli_connect("localhost","id1494919_admin","02806","id1494919_movie");
    $sql = 'select * from user where User_ID = '.$id.' and Pass = '.$pass.'';
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    if ($row['User_ID']==$id && $row['Pass']==$pass) {
      session_start();
      $_SESSION["id"]=$id;
      header("location:HomeCompeleteLogin.php");
    }
    else {
      echo '<table align = "center"><tr><td>ID or Password you are wrong</td></tr>';
      echo '<form class="frmafterloginincomplete" action="index.php" method="post">';
      echo '<tr align = "center"><td><input type="submit" value="Back" class="btn btn-primary"></td></tr>';
      echo '</form>';
      echo '</table>';
    }
     ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
