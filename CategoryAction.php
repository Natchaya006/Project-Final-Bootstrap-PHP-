<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Movie</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
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
                  $connect = mysqli_connect("localhost","id1494919_admin","02806","id1494919_movie");
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
    <div class="col-lg-offset-6 col-md-offset-6 col-sm-offset-6">
      <br><br><h1><b>&nbsp;&nbsp;&nbsp;ACTION MOVIE</b></h1>
    </div>
    <div class="col-lg-offset-3 col-lg-8 col-sm-offset-3 col-sm-9">
      <hr>
    </div>
    <div class="col-lg-11 col-lg-offset-3 col-sm-offset-4">
      <h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "glyphicon glyphicon-cd"></span>&nbsp;&nbsp;Logan</b></h3><br>
    </div>
    <div class="container">
      <div class="col-lg-offset-3 col-md-offset-5 col-sm-offset-5 col-md-3 col-sm-3 col-lg-3">
        <img src="assets/img/Action/5b24f4646f_345x518_6f7c050383-10-230x300.jpg" class = "img-rounded" style="width:100%">
      </div>
      <div style="background-color: #F5F5F5;"class=" col-lg-6 col-sm-4">
        <p style="padding-top:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บทเรื่องย่อ Logan Wolverine 3 หรือชื่ออย่างเป็นทางว่า Logan กับการกลับมาอีกครั้งของ ฮิวจ์ แจ็คแมน กับบท วูล์ฟเวอรีน มนุษย์กลายพันธุ์สุดแข็งแกร่งคงกระพัน ซึ่ง Wolverine 3 เป็นหนังเดี่ยวภาคที่ 3 ของ วูล์ฟเวอรีน ต่อจาก X-Men Origins : Wolverine (2009) และThe Wolverine (2013) มีกำหนดเข้าฉาย 2 มีนาคม 2017 นำแสดงโดย ฮิวจ์ แจ็คแมน, แพทริค สจ๊วต,บอยด์ โฮลบรู๊ค, เอลิซาเบธ ร็อดริเกซ,สตีเฟ่น เมอร์แชนท์ กำกับการแสดงโดย เจมส์ แมนโกล์ด บทภาพยนตร์โดย ไมเคิล กรีน, เดวิด เคลลี่้</p>
        <a href="https://www.youtube.com/watch?v=phVYDZmdSP0">Trailer</a><br><br>
        <form action="BuyMovie.php" method="post">
          <?php
            $id = $_SESSION["id"];
            echo '<input type="hidden" name = "mid" value = "5">';
            echo '<input type="hidden" name = "id" value = "'.$id.'">';
            echo '<input type="submit" value="BUY" class="btn btn-success">';
          ?>
        </form>
      </div>
    </div><br><br><br>
    <div class="col-lg-11 col-lg-offset-3 col-sm-offset-4">
      <h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "glyphicon glyphicon-cd"></span>&nbsp;&nbsp;Resident Evil 6</b></h3><br>
    </div>
    <div class="container">
      <div class="col-lg-offset-3 col-md-offset-5 col-sm-offset-5 col-md-3 col-sm-3 col-lg-3">
        <img src="assets/img/Action/5b24f4646f_345x518_6f7c050383-230x300 (1).jpg" class = "img-rounded" style="width:100%">
      </div>
      <div style="background-color: #F5F5F5;"class=" col-lg-6 col-sm-4">
        <p style="padding-top:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เรื่องย่อ Resident Evil 6 อวสานผีชีวะ โดยเรื่องราวในภาค The Final Chapter จะเป็นการดำเนินต่อจากภาค Retribution ในครั้งก่อน เมื่อเผ่าพันธุ์มนุษยชาติผู้เหลือรอดได้ดำเนินมาถึงปลายทางของการดำรงอยู่ อลิซ (รับบทโดย มิลลา โยโววิช) สาวผู้รอดชีวิตในจำนวนไม่มาก จึงเป็นความหวังเดี่ยวที่จะต่อสู้กับเหล่าซอมบี้ต่อไป แต่การเดินหน้าไม่ใช่ทางออกที่ดีสำหรับครั้งนี้ เพราะเธอต้องย้อนกลับสู่จุดเริ่มต้นของหายนะ ณ เมือง Raccoon City เมื่อ The Umbrella Corporation กำลังรวบรวมกำลังพล เพื่อกำจัดมนุษยชาติผู้เหลือรอดเป็นครั้งสุดท้าย ให้สิ้นซาก อลิซจึงต้องผนึกกำลังกับมิตรเก่าและสหายใหม่ เพื่อต่อสู้กับศึกสองด้านในสงครามครั้งสุดท้ายนี้ ซึ่งมีการปรากฏตัวของอสูรกายตัวใหม่ออกมา cแต่ชะตากรรมของสงครามการต่อสู้ เพื่อการดำรงไว้ซึ่งเผ่าพันธุ์มนุษยชาติครั้งยิ่งใหญ่นี้จะจบลงอย่างไร? ติดตามเรื่องราวที่ถูกถ่ายทอดโดยนักแสดงชุดเดิมจากภาคก่อนๆ อีกทั้งมีการเพิ่มเติมนักแสดงหน้าใหม่อีกเพี้ยบในผลงานภาคสุดท้ายของ ผีชีวะ (Resident Evil)</p>
        <a href="https://www.youtube.com/watch?v=0cRtPdUjjE0">Trailer</a><br><br>
        <form action="BuyMovie.php" method="post">
          <?php
            $id = $_SESSION["id"];
            echo '<input type="hidden" name = "mid" value = "6">';
            echo '<input type="hidden" name = "id" value = "'.$id.'">';
            echo '<input type="submit" value="BUY" class="btn btn-success">';
          ?>
        </form>
      </div>
    </div><br><br>
    <div class="col-lg-offset-5 col-lg-5 col-md-offset-5 col-md-5 col-sm-offset-5 col-sm-5">
      <hr>
    </div>
    <div class="col-lg-offset-7 col-lg-5 col-md-offset-7 col-md-5 col-sm-offset-7 col-sm-5 col-xs-offset-4 col-xs-5">
      <ul class="pagination">
        <li class = "active col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <a href="CategoryAction.php">1</a>
          </li>
        <li class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <a href="CategoryAction2.php">2</a>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <a href="CategoryAction3.php">3</a>
        </li>
      </ul>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
