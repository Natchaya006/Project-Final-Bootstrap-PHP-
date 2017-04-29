<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Movie</title>
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
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse"  >
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <a class="navbar-brand">
                <p><span class="glyphicon glyphicon-cd"></span>&nbsp;&nbsp;MS</p>
              </a>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8" style="margin-top:15px;">
              <marquee><font size = "3" color="white">ติดต่อโฆษณาได้ที่ 080-000-0000 หรือ EMAIL : testsystem@testsystem.com</marquee>
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
                $connect = mysqli_connect("localhost","id1494919_admin","02806","id1494919_movie");
                $sql = 'select * from user where User_ID = "'.$_SESSION["id"].'"';
                $result = mysqli_query($connect,$sql);
                $row = mysqli_fetch_assoc($result);
                echo '<center><b>Hello </b>'.$row['FName'].'</center>';
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
      <br><h1><b>&nbsp;&nbsp;&nbsp;NEW MOVIE</b></h1>
    </div>
    <div class="col-lg-offset-3 col-lg-8 col-sm-offset-3 col-sm-9">
      <hr>
    </div>
    <div class="col-lg-11 col-lg-offset-3 col-sm-offset-4">
      <h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "glyphicon glyphicon-cd"></span>&nbsp;&nbsp;Fast Furious 8</b></h3><br>
    </div>
    <div class="container">
      <div class="col-lg-offset-3 col-md-offset-5 col-sm-offset-5 col-md-3 col-sm-3 col-lg-3">
        <img src="assets/img/HotNew/Fast-And-Furious-8-2017-เร็ว.webp" class = "img-rounded" style="width:100%">
      </div>
      <div style="background-color: #F5F5F5;"class=" col-lg-6 col-sm-4">
        <p style="padding-top:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บทเรื่องราวของ Fast 8 จะเล่าถึงช่วงหลังจาก “ไบรอัน โอ คอนเนอร์” (พอล วอล์คเกอร์)และ “มีอา” ได้ถอนตัวออกจากวงการซิ่งตีนผีไปแล้ว เหลือเพียงชาวแก๊งที่ยังคงดำเนินชีวิตกันต่อไปโดยพ้นจากข้อกล่าวหาทั้งหมด แต่ทว่าวันหนึ่ง “ดอม” หรือ “โดมินิค ทอร์เรตโต้” (วิน ดีเซล) ได้รับโทรศัพท์สายปริศนาที่เรียกตัวเองว่า “ไซเฟอร์”- Cipher (ชารีส เทอรอน) และได้ลากเอาตัวของดอมเข้าสู่โลกของอาชญกรรมอีกครั้ง โดยคราวนี้เขาต้องทำภารกิจสุดระห่ำเพียงลำพัง เพราะไม่อยากให้เพื่อนรักอย่าง โอ คอนเนอร์ และครอบครัว พี่น้องต้องมาเดือดร้อน แต่ทว่าความไม่เข้าใจของทีม บวกกับพฤติกรรมแปลกๆของดอมที่ต้องทำตามคำสั่งของโทรศัพท์ปริศนาเพื่อปกป้องครอบครัว ทำให้ทางหน่วยงาน NSA้</p>
        <a href="https://www.youtube.com/watch?v=5TkgrYXgQYs">Trailer</a><br><br>
        <form action="BuyMovie.php" method="post">
          <?php
          $id = $_SESSION["id"];
          echo '<input type="hidden" name = "mid" value = "1">';
          echo '<input type="hidden" name = "id" value = "'.$id.'">';
          echo '<input type="submit" value="BUY" class="btn btn-success">';
          ?>
        </form>
      </div>
    </div><br><br><br>
    <div class="col-lg-11 col-lg-offset-3 col-sm-offset-4">
      <h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "glyphicon glyphicon-cd"></span>&nbsp;&nbsp;Fifty Shades</b></h3><br>
    </div>
    <div class="container">
      <div class="col-lg-offset-3 col-md-offset-5 col-sm-offset-5 col-md-3 col-sm-3 col-lg-3">
        <img src="assets/img/HotNew/Fifty-Shades-Darker-ฟิฟตี้-เชดส์-ดาร์กเกอร์.webp" class = "img-rounded" style="width:100%">
      </div>
      <div style="background-color: #F5F5F5;"class=" col-lg-6 col-sm-4">
        <p style="padding-top:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตอนรับเดือนแห่งความรัก เดือนกุมภาพันธ์ ที่จะเต็มไปด้วยความมืดมิดให้ดำดิ่งได้สุดขั้วหัวใจกับดูหนังอีโรติค-โรแมนติค ที่สร้างความฮือฮาให้กับผู้ชมมาแล้วทั่วโลกใน Fifty Shades of Grey จากบทประพันธ์ของ อี แอล เจมส์ ที่ได้สร้างโลกส่วนตัวของมิสเตอร์เกรย์ มหาเศรษฐีหนุ่ม ที่มีโลกลึกลับซ่อนไว้ โลกของเขาทำให้เราต้องตกตะลึงกับรสนิยมแหวกแนว จนมาเจอกับสาวสวยอย่างอนาสตาเซีย สตีล ทั้งสองต่างมีแรงดึงดูดต่อกัน แต่สาวโลกสวยอย่างอนาสตาเซียกับต้องเจอกับโลกอันมืดมนของมิสเตอร์เกรย์ ผู้ชายที่มีตัวตนและใกล้ชิดกับคำว่าสมบูรณ์แบบที่สุดเท่าที่เธอเคยเจอมา ทั้งสองได้คบหากันและก้าวสู่โลกของมิสเตอร์เกรย์ ได้ทดลอง ได้สัมผัส ได้เข้าถึงตัวตน แต่นั่นยังไม่ใช่ทั้งหมดของคนที่เธอคิดว่าจะใช้ชีวิตด้วย ทั้งความกลัวความกังวลต่างๆนานา ทำให้ อนาสตาเซีย ต้องเดินออกมาจากชีวิตของ คริสเตียน เกรย์ จนนำมาสู่ภาคต่อที่แฟนๆดูหนังรอคอยกันอย่างใจจดจ่อกับ Fifty Shades Darker</p>
        <a href="https://www.youtube.com/watch?v=NjoCpE49nTE">Trailer</a><br><br>
        <form action="BuyMovie.php" method="post">
          <?php
          $id = $_SESSION["id"];
          echo '<input type="hidden" name = "mid" value = "2">';
          echo '<input type="hidden" name = "id" value = "'.$id.'">';
          echo '<input type="submit" value="BUY" class="btn btn-success">';
          ?>
        </form>
      </div>
    </div><br><br><br>
    <div class="col-lg-offset-5 col-lg-5 col-md-offset-5 col-md-5 col-sm-offset-5 col-sm-5">
      <b><hr></b>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
