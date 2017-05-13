<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id="wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="col-lg-5 col-md-5 col-sm-3 col-xs-5">
              <a class="navbar-brand">
                <p><span class="glyphicon glyphicon-cd"></span>&nbsp;&nbsp;MS</p>
              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-top:15px;">
              <marquee><font size = "3" color="white">ติดต่อโฆษณาได้ที่ 080-000-0000 หรือ Email : testsystem@testsystem.com</marquee>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar-default navbar-side" role="navigation">
          <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
              <li>
                <?php
                  session_start();
              $connect = mysqli_connect("localhost","id1494919_admin","admin","id1494919_movie_shop");
                    $sql = 'select * from user where User_ID = "'.$_SESSION["id"].'"';
                    $result = mysqli_query($connect,$sql);
                    $row = mysqli_fetch_assoc($result);
                    echo '<center><b>Welcome </b>'.$row['FName'].'</center>';
               ?>
              </li>
              <li>
                <a href="adminHome.php"><i class="glyphicon glyphicon-hand-right"></i>Home</a>
              </li>
              <li>
                <a href="adminUser.php" class = "active"><i class="glyphicon glyphicon-hand-right"></i>View User</a>
              </li>
              <li>
                <a href="adminOrder.php"><i class="glyphicon glyphicon-hand-right"></i>View Order</a>
              </li>
              <li>
                <a href="adminMovie.php"><i class="glyphicon glyphicon-hand-right"></i>View Movie</a>
              </li>
              <li>
                <a href="index.php"><i class="glyphicon glyphicon-log-out"></i>Logout</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
    <?php
    if($_SESSION['id']=='')
    {
      header("location:index.php");
    }
    else
    {
      $connect = mysqli_connect("localhost","id1494919_admin","admin","id1494919_movie_shop");
      $sql = 'select * from user';
      $result = mysqli_query($connect,$sql);
			$numrows = mysqli_num_rows($result);
      echo '<br><br>';
      echo '<div class = "col-lg-offset-3">';
      echo '<form action="viewUser.php" name="frmMain" method="post" target="iframe_target">';
      echo '<h3>Total number of users &nbsp;<b><u>&nbsp;'.$numrows.'&nbsp;</u></b></h3><br>';
      echo '<b>Report : </b>&nbsp;&nbsp;<select name = "title">';
      echo '<option value = "Name">Name</option>';
      echo '</select>';
      echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "sort" value = "asc">&nbsp;Ascending&nbsp;&nbsp;&nbsp;';
      echo '&nbsp;&nbsp;<input type = "radio" name = "sort" value = "desc">&nbsp;Descending';
      echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "submit" value = "Request" class = "btn btn-info">';
      echo '<br><br>';
      echo '</form>';
      echo '</div>';
      mysqli_close($connect);
    }
    ?>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
