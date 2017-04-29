<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sci-Fi Movie</title>
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
      <br><br><h1><b>&nbsp;&nbsp;&nbsp;SCI-FI MOVIE</b></h1>
    </div>
    <div class="col-lg-offset-3 col-lg-8 col-sm-offset-3 col-sm-9">
      <hr>
    </div>
    <div class="col-lg-11 col-lg-offset-3 col-sm-offset-4">
      <h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "glyphicon glyphicon-cd"></span>&nbsp;&nbsp;Morgan</b></h3><br>
    </div>
    <div class="container">
      <div class="col-lg-offset-3 col-md-offset-5 col-sm-offset-5 col-md-3 col-sm-3 col-lg-3">
        <img src="assets/img/Sci-Fi/1-12-230x300.jpg" class = "img-rounded" style="width:100%">
      </div>
      <div style="background-color: #F5F5F5;"class=" col-lg-6 col-sm-4">
        <p style="padding-top:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Morgan (2016) มอร์แกน HD Master พากย์ไทย เรื่องราวหนังที่มาพร้อมกับคำโปรยที่ว่า “อย่าปล่อยให้มันออกไป” ปรากฏภาพของเด็กสาววัยรุ่นภายใต้เสื้อฮู้ดมือข้างหนึ่งที่กำตุ๊กตาหมีในขณะที่อีกข้างมีเลือดหยดลงมาจากมือของเธอ โดยเรื่องราวของหนังโฟกัสมาที่ตัวละครที่ปรึกษาด้านการจัดการความเสี่ยง (เคต มาร่า) ที่ถูกส่งตัวไปประเมินมอร์แกน (แอนยา เทย์เลอร์-จอย จาก The Witch) ซึ่งเธอถูกขังอยู่ในศูนย์วิจัยวิทยาศาสตร์ที่ห่างไกลผู้คนภายหลังจากเกิดอุบัติเหตุสยองการประเมินมีการแจ้งเตือนว่า “มอร์แกน” สมควรจะได้รับการกำจัด เนื่องจากเธอไม่ใช่มนุษย์แต่ถูกดัดแปลงพันธุกรรมให้มีสภาพแข่งแกร่งเหนือมนุษย์และในเวลานี้สิ่งมีชีวิตที่ว่าก็เหนื่อยและเหลืออดกับการโดนจองจำเต็มทนหนังไซไฟระทึกขวัญที่เต็มไปด้วยความน่าตื่นเต้น นอกจากนักแสดงที่ได้กล่าวไปข้างต้นยังมีทั้งพอล จีอามาติ ,โรส เลสลี่, บอยด์ โฮลบรู๊ค,โจนาธาน เอรีส และ โทบี้ โจนส์ ตัวหนังเป็นผลงานการกำกับของ ลุค สก็อตต์ (ลูกชายของริดลีย์)</p>
        <a href="https://www.youtube.com/watch?v=rqmHSR0bFU8">Trailer</a><br><br>
        <form action="BuyMovie.php" method="post">
          <?php
          $id = $_SESSION["id"];
          echo '<input type="hidden" name = "mid" value = "16">';
          echo '<input type="hidden" name = "id" value = "'.$id.'">';
          echo '<input type="submit" value="BUY" class="btn btn-success">';
          ?>
        </form>
      </div>
    </div><br><br><br>
    <div class="col-lg-11 col-lg-offset-3 col-sm-offset-4">
      <h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "glyphicon glyphicon-cd"></span>&nbsp;&nbsp;Rogue One</b></h3><br>
    </div>
    <div class="container">
      <div class="col-lg-offset-3 col-md-offset-5 col-sm-offset-5 col-md-3 col-sm-3 col-lg-3">
        <img src="assets/img/Sci-Fi/1-21-230x300.jpg" class = "img-rounded" style="width:100%">
      </div>
      <div style="background-color: #F5F5F5;"class=" col-lg-6 col-sm-4">
        <p style="padding-top:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จาก ลูคัส ฟิล์ม สู่ครั้งแรกของภาพยนตร์เดี่ยวของสตาร์ วอร์ส “โร้ค วัน: ตำนานสตาร์ วอร์ส” มหากาพย์การผจญภัยกับเรื่องราวใหม่ ในช่วงเวลาแห่งความขัดแย้ง กลุ่มวีรบุรุษรวมตัวกันในปฏิบัติการโจรกรรมแผนผังการสร้างดาวมฤตยู (เดธสตาร์) สุดยอดอาวุธมหาประลัยของฝ่ายจักรวรรดิ เหตุการณ์อันสำคัญในเส้นเวลาของสตาร์ วอร์สนี้ ได้นำพากลุ่มคนธรรมดาที่เลือกที่จะทำในสิ่งไม่ธรรมดา และการทำเช่นนั้น กลับกลายเป็นบางสิ่งที่ยิ่งใหญ่เกินกว่าพวกเขาเอง “โร้ค วัน: ตำนานสตาร์ วอร์ส” กำกับโดย แกเร็ธ เอ็ดเวิร์ดส์ และนำแสดงโดย เฟลิซิตี้ โจนส์, ดิเอโก้ ลูน่า, เบน เมนเดลสัน, ดอนนี่ เยน, แมดส์ มิคเคลเซ่น, อลัน ทูดิค, ริซ อาห์เมด, ร่วมด้วย เจียง เหวิน และ ฟอเรสท์ วิธเทเกอร์ แคธลีน เคนเนดี, อัลลิสัน เชียร์เมอร์, ไซม่อน เอมานูเอล เป็นผู้อำนวยการสร้าง ร่วมด้วย จอห์น นอลล์, เจสัน แมคแกทลิน เป็นผู้อำนวยการสร้างบริหาร เรื่องราวโดย จอห์น นอลล์ และ แกรี่ วิธต้า และบทภาพยนตร์โดย คริส วิทซ์ และ โทนี่ กิลลอย “โร้ค วัน: ตำนานสตาร์ วอร์ส” เข้าฉายในประเทศไทยวันที่ 15 ธันวาคม ในโรงภาพยนตร์ และในระบบดิจิตอล 3 มิติ, ไอแมกซ์ 3 มิติ ,และ 4 มิติ</p>
        <a href="https://www.youtube.com/watch?v=o37A9cM7rAw">Trailer</a><br><br>
        <form action="BuyMovie.php" method="post">
          <?php
          $id = $_SESSION["id"];
          echo '<input type="hidden" name = "mid" value = "17">';
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
          <a href="CategorySci-FiPage1.php">1</a>
          </li>
        <li class="active col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <a href="CategorySci-FiPage2.php">2</a>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <a href="CategorySci-FiPage3.php">3</a>
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
