<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buy Movie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>
    <?php
      $id = $_POST['id'];
      $mid = $_POST['mid'];
      $connect = mysqli_connect("localhost","id1494919_admin","02806","id1494919_movie");
      $sql = 'select * from movies where MID = '.$mid.'';
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_assoc($result) ;
      echo '<form action= "BuyConfirm.php" method = "post">';
      echo '<center>MovieID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="'.$row['MID'].'" disabled = "false"><br></center>';
      echo '<input type="hidden" name = "mid" value = "'.$row['MID'].'">';
      echo '<input type="hidden" name = "id" value = "'.$id.'">';
      echo '<center>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="floors" value="'.$row['MName'].'"  disabled = "false"></center>';
      echo '<center>Category&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price" value="'.$row['MCategory'].'" disabled = "false"></center>';
      echo '<center>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sd" value="'.$row['MPrice'].'" disabled = "false"></center>';
      echo '<center>Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="number" value="0"><br><br></center>';
      echo '<center><input type = "submit" value = "BUY" class="btn btn-success"></center>';
      echo '</form>';
      echo '<form action= "HomeCompeleteLogin.php" method = "post"><input type="hidden" name = "id" value = "'.$id.'"><center><br><input type = "submit" value = "CANCEL" class="btn btn-success"></center></form>';
      mysqli_close($connect);
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
