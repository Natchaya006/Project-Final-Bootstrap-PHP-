<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Horror Movie</title>
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
      <br><br><h1><b>&nbsp;&nbsp;HORROR MOVIE</b></h1>
    </div>
    <div class="col-lg-offset-3 col-lg-8 col-sm-offset-3 col-sm-9">
      <hr>
    </div>
    <div class="col-lg-11 col-lg-offset-3 col-sm-offset-4">
      <h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "glyphicon glyphicon-cd"></span>&nbsp;&nbsp;Bye Bye Man</b></h3><br>
    </div>
    <div class="container">
      <div class="col-lg-offset-3 col-md-offset-5 col-sm-offset-5 col-md-3 col-sm-3 col-lg-3">
        <img src="assets/img/Horror/5b24f4646f_345x518_6f7c050383-7-230x300.jpg" class = "img-rounded" style="width:100%">
      </div>
      <div style="background-color: #F5F5F5;"class="col-lg-6 col-sm-4">
        <p style="padding-top:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ถ้าคุณชอบหนังที่หลอนๆ สยองๆ แบบ A Nightmare on Elm Street และ Oculus น่าจะชอบหนังเรื่อง The Bye Bye Man ครับ เพราะเหมือนมีองค์ประกอบทั้งสองอย่างมารวมกันจากที่เห็นในตัวอย่างหนัง หนังเป็นเรื่องราวของวัยรุ่นสามคนที่พบกว่าตัวเองตกเป็นเป้าเอาชีวิตของปีศาจร้ายที่ชื่อ The Bye Bye Man ที่จะยิ่งเข้าใกล้เหยื่อมากขึ้นเมื่อเหยื่อคิดถึงหรือพูดชื่อของมันออกมา โดยจะทำให้เห็นภาพหลอนต่างๆ เพื่อเอาชีวิต หนังมีดั๊ก โจนส์ ผู้สวมบทอสุรกายน่ากลัวมาแล้วหลายครั้งในหนังของกีเยร์โม เดล ทอโร มารับบทเป็นปีศาจร้าย โดยมีดักลาส สมิธ, เครสซิดา โบนาส และ ลูเซียน ลาวิสเคาท์ รับบทสามวัยรุ่นผู้โชคร้าย สมทบด้วยแครี่-แอน มอส และ เฟย์ ดันนาเวย์ หนังกำกับโดยสเตซี ไทเทิล จากหนังสยองขวัญ The Last Supper ปี 1995 ครับ มีกำหนดฉายในสหรัฐมกราคม 2017 ชมตัวอย่างด้านใน้</p>
        <a href="https://www.youtube.com/watch?v=lN8-QY0Gh9o">Trailer</a><br><br>
        <form action="BuyMovie.php" method="post">
          <?php
            $id = $_SESSION["id"];
            echo '<input type="hidden" name = "mid" value = "11">';
            echo '<input type="hidden" name = "id" value = "'.$id.'">';
            echo '<input type="submit" value="BUY" class="btn btn-success">';
          ?>
        </form>
      </div>
    </div><br><br><br>
    <div class="col-lg-11 col-lg-offset-3 col-sm-offset-4">
      <h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "glyphicon glyphicon-cd"></span>&nbsp;&nbsp;โรงเรียนผี</b></h3><br>
    </div>
    <div class="container">
      <div class="col-lg-offset-3 col-md-offset-5 col-sm-offset-5 col-md-3 col-sm-3 col-lg-3">
        <img src="assets/img/Horror/5b24f4646f_345x518_6f7c050383-11-230x300 (1).jpg" class = "img-rounded" style="width:100%">
      </div>
      <div style="background-color: #F5F5F5;"class=" col-lg-6 col-sm-4">
        <p style="padding-top:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เรื่องย่อ Rong-Rean-Phee โรงเรียนผี ทุกโรงเรียน มีเรื่องเล่า สถานที่เดียวกัน แต่ต่างห้วงเวลากัน เรื่องลึกลับ เรื่องคนตาย และเรื่องผี… เรื่องเล่าสยองขวัญผีโรงเรียนแห่งนี้เริ่มต้นขึ้นในปีการศึกษาใหม่ เมื่อ “เอ๋, เอ้อ, เด่น, ป๊อป, ดอน” แก๊งนักเรียนมัธยมต้นสุดแสบประจำรุ่นได้รวมหัวกันหนีการปฐมนิเทศอันแสนน่าเบื่อ และหาเรื่องน่าตื่นเต้นทำแก้เซ็งแทน โดยพวกเขาขอลองดีด้วยการแข่งกันเล่าเรื่องผีสุดสยองในห้องเรียนของตึกเก่าที่เล่าลือกันว่าสุดหลอนจนไม่มีใครกล้าย่างกรายเข้าไป…เพื่อเป็นการข่มขวัญว่าใครจะแน่กว่ากัน และแล้วเรื่องผีๆ ไม่ว่าจะเป็น…ผีห้องสมุดสุดเฮี้ยนที่มักจะโผล่มาให้เหล่านักเรียนได้ขนหัวลุก, นักเรียนหญิงผู้ถูกเพื่อนกลั่นแกล้งจนต้องเอาคืนด้วยความอาฆาต, ครูสาวแสนสวยที่ทุกคนต่างรุมรักแต่แน่ใจแล้วหรือว่ารู้จักเธอดีพอ, ภารโรงกับหมาเห็นผี, ครูใหญ่ผู้โดดเดี่ยวกับบางสิ่งที่ไม่ยอมให้เขาอยู่คนเดียว และอีกหลากหลายเรื่องผีที่ถูกขุดขึ้นมาเล่าอย่างไม่รู้ว่าจะจบลงตรงไหน</p>
        <a href="https://www.youtube.com/watch?v=96UA5ytvPSQ">Trailer</a><br><br>
        <form action="BuyMovie.php" method="post">
          <?php
            $id = $_SESSION["id"];
            echo '<input type="hidden" name = "mid" value = "12">';
            echo '<input type="hidden" name = "id" value = "'.$id.'">';
            echo '<input type="submit" value="BUY" class="btn btn-success">';
          ?>
        </form>
      </div>
    </div><br>
    <div class="col-lg-offset-5 col-lg-5 col-md-offset-5 col-md-5 col-sm-offset-5 col-sm-5">
      <b><hr></b>
    </div>
    <div class="col-lg-offset-7 col-lg-5 col-md-offset-7 col-md-5 col-sm-offset-7 col-sm-5 col-xs-offset-4 col-xs-5">
      <ul class="pagination">
        <li class = "col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <a href="CategoryHorror.php">1</a>
          </li>
        <li class="active col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <a href="CategoryHorror2.php">2</a>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <a href="CategoryHorror3.php">3</a>
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
