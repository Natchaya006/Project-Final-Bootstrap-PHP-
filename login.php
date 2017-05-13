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
         session_start();
         $id = $_POST['id'];
         $pass = $_POST['pass'];
           $connect = mysqli_connect("localhost","id1494919_admin","admin","id1494919_movie_shop");
           $sql = 'select * from user where User_ID = '.$id.'';
           $result = mysqli_query($connect,$sql);
           $row = mysqli_fetch_assoc($result);
             if ($row['User_ID']==$id && $row['Pass']==$pass)
             {
               $_SESSION["id"]=$id;
               if($row['Status']=='User'){
               header("location:HomeCompeleteLogin.php");
             }
             else{
                header("location:adminHome.php");
              }
             }
             else
             {
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
