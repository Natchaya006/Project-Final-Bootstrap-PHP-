<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
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
    <div align = "left" class = "col-lg-offset-4 col-lg-7 col-md-offset-4 col-md-7 col-sm-offset-4 col-sm-7" >
      <br><br><h1 align = "left"><b>MOVIE</b></h1><br>
      <div class="header-content">
        <div class="header-content-inner">
          <img class="mySlides" src="assets/img/Action/CAPT.png" style="width:100%">
          <img class="mySlides" src="assets/img/Action/JOHNWICK2.png" style="width:100%">
          <img class="mySlides" src="assets/img/Sci-Fi/GRAVITY.png" style="width:100%">
          <img class="mySlides" src="assets/img/Sci-Fi/MAZERUNNER.png" style="width:100%">
          <img class="mySlides" src="assets/img/Horror/CONJURING.png" style="width:100%">
          <img class="mySlides" src="assets/img/Horror/FINAL.png" style="width:100%">
        </div>
      </div>
    </div>
    <script>
        var slideIndex1 = 1;
        showDivs(slideIndex1);
        function plusDivs(n) {
          showDivs(slideIndex1 += n);
        }
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex1 = 1}
          if (n < 1) {slideIndex1 = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          x[slideIndex1-1].style.display = "block";
        }
        var myIndex1 = 0;
        carousel();
        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          myIndex1++;
          if (myIndex1 > x.length) {myIndex1 = 1}
          x[myIndex1-1].style.display = "block";
          setTimeout(carousel, 2000);
        }
    </script>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
