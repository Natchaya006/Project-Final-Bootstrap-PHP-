     <html lang="en">
       <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Login</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       </head>
       <body>
         <?php
         $id = $_POST['id'];
         $pass = $_POST['pass'];
         function test_input($data)
         {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
         }
         $check = 0;
         $pass = test_input($_POST['pass']);
         if (!preg_match("/^[1-9][0-9]*$/",$pass)){
           $check = 0;
         }
         else{
           $check++;
         }
         if($check==1){
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
           echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><table align = "center"><tr><td><b>ID or Password you are wrong!</b></td></tr>';
           echo '<form class="frmafterloginincomplete" action="index.php" method="post">';
           echo '<tr align = "center"><td><input type="submit" value="Back to Login" class="btn btn-primary"></td></tr>';
           echo '</form>';
           echo '</table>';
         }
       }
         else{
           echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><table align = "center"><tr><td><b>ID or Password you are wrong!</b></td></tr>';
           echo '<form class="frmafterloginincomplete" action="index.php" method="post">';
           echo '<tr align = "center"><td><input type="submit" value="Back to Login" class="btn btn-primary"></td></tr>';
           echo '</form>';
           echo '</table>';
       }

          ?>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
       </body>
     </html>
