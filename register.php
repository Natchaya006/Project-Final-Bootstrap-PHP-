  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Register</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
      <?php
      $address1 = $_POST['address1'];
      $address2 = $_POST['address2'];
      function test_input($data)
      {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      $check = 0;
      $fname = test_input($_POST['fname']);
      if (!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$fname)){
        $check = 0;
      }
      else{
        $check++;
      }
      $lname = test_input($_POST['lname']);
      if (!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$lname)){
        $check = 0;
      }
      else{
        $check++;
      }
      $email = test_input($_POST['email']);
      if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $check = 0;
      }
      else{
        $check++;
      }
      $pass = test_input($_POST['pass']);
      if (!preg_match("/^[1-9][0-9]*$/",$pass)){
        $check = 0;
      }
      else{
        $check++;
      }
      if($check==4)
      {
      $connect = mysqli_connect("localhost","id1494919_admin","admin","id1494919_movie_shop");
        $sql = 'INSERT INTO user VALUES("","'.$fname.'","'.$lname.'","'.$email.'","'.$pass.'","'.$address1.'","'.$address2.'","User");';
        $result = mysqli_query($connect,$sql);
        $sql = 'select MAX(User_ID) from user';
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_assoc($result);
        echo '<br>';
        echo '<center><b>You UserID is : </b>'.$row['MAX(User_ID)'].'</center>';
        echo '<form action="index.php" method="post">';
        echo '<center><input type="submit" value="Back to login" class="btn btn-primary"></center>';
        echo '</form>';
        mysqli_close($connect);
      }
      else
      {
        echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><table align = "center"><tr><td><b>Please, Put the required information!</b></td></tr>';
        echo '<form class="frmafterloginincomplete" action="index.php" method="post">';
        echo '<tr align = "center"><td><input type="submit" value="Back to Regist" class="btn btn-primary"></td></tr>';
        echo '</form>';
        echo '</table>';
      }
    ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
  </html>
