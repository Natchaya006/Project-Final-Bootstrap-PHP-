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
  $quantity = $row['MQuantity'] - $number;
  if ($number>$row['MQuantity']) {
    echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><table align = "center"><tr><td><b>Sorry, no stock!</b></td></tr>';
    echo '<form class="frmafterloginincomplete" action="HomeCompeleteLogin.php" method="post">';
    echo '<tr align = "center"><td><input type="submit" value="Back to Home" class="btn btn-primary"></td></tr>';
    echo '</form>';
    echo '</table>';
  }
  else {
  $sql = 'INSERT INTO list VALUES("",'.'"'.$mid.'",'.'"'.$id.'",'.'"'.$number.'",'.'"'.$oprice.'",'.'"wait");';
  $result = mysqli_query($connect,$sql);

  $sql = 'update movies set MQuantity = "'.$quantity.'" where MID = "'.$mid.'"';
  $result = mysqli_query($connect,$sql);
  header("location:OrderLoginCompelete.php");
}
?>
