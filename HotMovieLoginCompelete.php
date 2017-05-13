<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hot Movie</title>
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
            <div class="col-lg-4 col-md-4 col-sm-4">
              <a class="navbar-brand">
                <p><span class="glyphicon glyphicon-cd"></span>&nbsp;&nbsp;MS</p>
              </a>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8" style="margin-top:15px;">
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
    <div class="col-lg-offset-6 col-md-offset-6 col-sm-offset-6">
      <br><h1><b>&nbsp;&nbsp;&nbsp;HOT MOVIE</b></h1>
    </div>
    <div class="col-lg-offset-3 col-lg-8 col-sm-offset-5 col-sm-7">
      <hr>
    </div>
    <div class="col-lg-11 col-lg-offset-3 col-sm-offset-4">
      <h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "glyphicon glyphicon-cd"></span>&nbsp;&nbsp;Monster Trucks</b></h3><br>
    </div>
    <div class="container">
      <div class="col-lg-offset-3 col-md-offset-5 col-sm-offset-5 col-md-3 col-sm-3 col-lg-3">
        <img src="assets/img/HotNew/Monster-Trucks-2017-บิ๊กฟุตตะลุยเต็มสปีด.webp" class = "img-rounded" style="width:100%">
      </div>
      <div style="background-color: #F5F5F5;"class=" col-lg-6 col-sm-4">
        <p style="padding-top:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บิ๊กฟุตตะลุยเต็มสปีด ความสนุกของหนังเรื่องนี้เริ่มตรงที่ สัตว์ประหลาดตัวที่หลุดการจับกุม เพราะหนีติดมากับซากรถเก่าและมาถึงป่าช้ารถยนต์ที่พระเอกทำงานอยู่ เมื่อพบกันครั้งแรก ต่างคนต่างกลัวกัน แต่ท้ายสุดกลับกลายเป็นเพื่อนกัน เจ้าสัตว์ประหลาดตัวนี้ มีลักษณะพิเศษคือ ทั้งฉลาดทั้งทรงพลัง และกินน้ำมันดิบ เป็นอาหาร !!! พระเอกของเราเลยเกิดปิ๊งไอเดีย นำเอาเจ้าสัตว์ประหลาดนี้ไปใส่เป็นเครื่องยนต์ให้รถยนต์ของตัวเองซะเลย แต่เหตุการณ์เริ่มตึงเครียดเมื่อ เจ้าหน้าที่จากบริษัทฯ ขุดเจาะน้ำมัน ก็ส่งคนมาตามล่าหาเจ้าตัวประหลาดที่หลบหนีมา จนมาเจอว่าอยู่กับพระเอกของเราและเขาพยายามที่จะจับมันกลับไป คราวนี้ล่ะสนุก ตื่นเต้น กันใหญ่ เพราะ เกิดชุลมุนทั้งฝ่ายที่หนี และฝ่ายที่ตามจับ ท้ายสุด พระเอกของเรา ต้องหาวิธีช่วยส่งเจ้าสัตว์ประหลาดและพรรคพวกของมันให้ได้กลับบ้านที่อยู่ลึกลงไปใต้ดินของพวกมันให้ได้</p>
        <a href="https://www.youtube.com/watch?v=T6myA_zOCiQ">Trailer</a><br><br>
        <form action="BuyMovie.php" method="post">
          <?php
          $id = $_SESSION["id"];
          echo '<input type="hidden" name = "mid" value = "3">';
          echo '<input type="hidden" name = "id" value = "'.$id.'">';
          echo '<input type="submit" value="BUY" class="btn btn-success">';
          ?>
        </form>
      </div>
    </div><br><br><br>
    <div class="col-lg-11 col-lg-offset-3 col-sm-offset-4">
      <h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = "glyphicon glyphicon-cd"></span>&nbsp;&nbsp;The Smurfs 3</b></h3><br>
    </div>
    <div class="container">
      <div class="col-lg-offset-3 col-md-offset-5 col-sm-offset-5 col-md-3 col-sm-3 col-lg-3">
        <img src="assets/img/HotNew/The-Smurfs-3-2017-สเมิร์ฟ-หมู่บ้านที่สาบสูญ.webp" class = "img-rounded" style="width:100%">
      </div>
      <div style="background-color: #F5F5F5;"class=" col-lg-6 col-sm-4">
        <p style="padding-top:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In this fully animated, all-new take on the Smurfs, a mysterious map sets Smurfette and her best friends Brainy, Clumsy and Hefty on an exciting and thrilling race through the Forbidden Forest filled with magical creatures to find a mysterious lost village before the evil wizard Gargamel does. Embarking on a rollercoaster journey full of action and danger, the Smurfs are on a course that leads to the discovery of the biggest secret in Smurf history!</p>
        <a href="https://www.youtube.com/watch?v=lPdocS4X7hM">Trailer</a><br><br>
        <form action="BuyMovie.php" method="post">
          <?php
          $id = $_SESSION["id"];
          echo '<input type="hidden" name = "mid" value = "4">';
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
