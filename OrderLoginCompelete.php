<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order</title>
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
              if($_SESSION['id']=='')
              {
                header("location:index.php");
              }
              else
              {
              $connect = mysqli_connect("localhost","id1494919_admin","admin","id1494919_movie_shop");
                $sql = 'select * from user where User_ID = "'.$_SESSION["id"].'"';
                $result = mysqli_query($connect,$sql);
                $row = mysqli_fetch_assoc($result);
                echo '<center><b>Hello </b>'.$row['FName'].'</center>';
              }
               ?>
            </li>
            <li>
              <a href="HomeCompeleteLogin.php" ><i class="glyphicon glyphicon-home"></i>Home</a>
            </li>
            <li>
              <a href="NewMovieLoginCompelete.php"><i class="glyphicon glyphicon-hand-right"></i>New Movies</a>
            </li>
            <li>
              <a href="HotMovieLoginCompelete.php"><i class="glyphicon glyphicon-hand-right"></i>Hot Movies</a>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-hand-right"></i>Category&nbsp;&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="CategoryAction.php"><i class="glyphicon glyphicon-pushpin"></i>&nbsp;&nbsp;<b>Action</b></a></li>
                <li><a href="CategoryHorror.php"><i class="glyphicon glyphicon-pushpin"></i>&nbsp;&nbsp;<b>Horror</b></a></li>
                <li><a href="CategorySci-FiPage1.php"><i class="glyphicon glyphicon-pushpin"></i>&nbsp;&nbsp;<b>Sci-Fi</b></a></li>
              </ul>
            </li>
            <li>
              <a href="OrderLoginCompelete.php"><i class="glyphicon glyphicon-shopping-cart"></i>Order</a>
            </li>
            <li>
              <a href="EditProfile.php"><i class="glyphicon glyphicon-user"></i>Edit Profile</a>
            </li>
            <li>
              <a href="index.php"><i class="glyphicon glyphicon-log-out"></i>Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <?php
    $id = $_SESSION["id"];
    $connect = mysqli_connect("localhost","id1494919_admin","admin","id1494919_movie_shop");
    $sql = 'select * from list where User_ID = '.$id.'';
    $result = mysqli_query($connect,$sql);
    $total = 0;
    echo '<div class="col-lg-offset-4 col-md-offset-5 col-sm-offset-5">';
    echo '<br><br><h2><b>Payment</b></h2><br>';
      echo '<table border = "1" >';
        echo '<tr>';
          echo '<td align = center><b>&nbsp;&nbsp;&nbsp;OrderID&nbsp;&nbsp;&nbsp;</b></td>';
          echo '<td align = center><b>&nbsp;&nbsp;&nbsp;MovieID&nbsp;&nbsp;&nbsp;</b></td>';
          echo '<td align = center><b>&nbsp;&nbsp;&nbsp;UserID&nbsp;&nbsp;&nbsp;</b></td>';
          echo '<td align = center><b>&nbsp;&nbsp;&nbsp;Quantity&nbsp;&nbsp;&nbsp;</b></td>';
          echo '<td align = center><b>&nbsp;&nbsp;&nbsp;Price&nbsp;&nbsp;&nbsp;</b></td>';
          echo '<td align = center><b>&nbsp;&nbsp;&nbsp;Status&nbsp;&nbsp;&nbsp;</b></td>';
        echo '</tr>';
        while($row = mysqli_fetch_assoc($result)){
          echo '<tr>';
          while(list($key,$value) = each($row)){
            if($value == ''){
              echo '<td align=center>'.'&nbsp;'.'</td>';
            }
            else{
              echo '<td align=center>'.$value.'</td>';
            }
        }
        if ($row['Status'] == 'success') {

        }else {
        echo '<td align = "center" bgcolor = "white">
        <form action="Pay.php" method="post">
        <input type="hidden" name = "oid" value = "'.$row['OID'].'">
        <input type="submit" value="Pay" class="btn btn-success" onClick = "return confirmConfrim();">
        </form>
        </td>'."\n";

        echo '<td align = "center" bgcolor = "white">
        <form action="CancelOrder.php" method="post">
        <input type="hidden" name = "oid" value = "'.$row['OID'].'">
        <input type="hidden" name = "mid" value = "'.$row['MID'].'">
        <input type="hidden" name = "number" value = "'.$row['OQuantity'].'">
        <input type="submit" value="Cancel" class="btn btn-danger" onClick = "return confirmCancel();">
        </form>
        </td>'."\n";
        $total += $row['OPrice'];
      }
      echo '</tr>';
    }
    echo '</table><br>';
    echo '<h4><b>Total </b>'.$total.' <b>Bath</b></h4>';
    echo '</div>';
    mysqli_close($connect);
     ?>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script language = "JavaScript">
		function confirmCancel()
		{
			return confirm('Are you sure you want to " CANCEL " this')
		}
    function confirmConfirm()
		{
			return confirm('Are you sure you want to " CONFIRM " this')
		}
	</script>
</body>
</html>
