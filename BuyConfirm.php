<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  </head>
  <body>
    <?php
    $mid = $_POST['mid'];
    $connect = mysqli_connect("localhost","id1494919_admin","02806","id1494919_movie");
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
