  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="index.css">
    </head>
    <body>
      <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand"><p><span class="glyphicon glyphicon-cd"></span>&nbsp;&nbsp;Movie Shop</p></a>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="NewMovieIndex.php">New Movie</a></li>
                        <li><a href="HotMovieIndex.php">Hot Movie</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                    <ul class="nav navbar-nav navbar-right" style="margin-top:15px;">
                      <marquee><font size = "3" color="white">ติดต่อโฆษณาได้ที่ 080-000-0000 หรือ Email : testsystem@testsystem.com</marquee>
                    </ul>
                  </div>
              </div>
          </nav>
      <div class="container" id="page">
      <div class="col-sm-offset-1 col-sm-4" id="bg">
        <form class="frmlogin" action="login.php" method="post">
          <br><br>UserID  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" name="id"><br><br>
          Password &nbsp;&nbsp;:&nbsp;&nbsp;<input type="password" name="pass"><br><br>
        <input type="submit" value="Login" class="btn btn-primary">
        </form>
        <form class="frmreister" action="register.php" method="post">
          <br><br>Firstname &nbsp;:&nbsp;&nbsp;<input type="text" name="fname"><br><br>
          Lastname &nbsp;:&nbsp;&nbsp;<input type="text" name="lname"><br><br>
          E-mail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" name="email" placeholder="&nbsp;&nbsp;xxx@email.com"><br><br>
          Password &nbsp;:&nbsp;&nbsp;<input type="password" name="pass" placeholder="&nbsp;&nbsp;only number [0-9]"><br><br>
          Address1 &nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" name="address1" size="30"><br><br>
          Address2 &nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" name="address2" size="30"><br><br>
        <input type="submit" value="Register" class="btn btn-success">
        </form>
      </div>
      <div class="col-sm-offset-1 col-sm-6">
      <div class="col-sm-4" id="slide">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <br><div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="https://www.movie2free.com/wp-content/uploads/2017/03/5b24f4646f_345x518_6f7c050383-10-230x300.jpg" alt="logan">
          </div>
          <div class="item">
            <img src="https://www.movie2free.com/wp-content/uploads/2017/03/5b24f4646f_345x518_6f7c050383-230x300.jpg">
          </div>
          <div class="item">
            <img src="https://www.movie2free.com/wp-content/uploads/2017/02/5b24f4646f_345x518_6f7c050383-230x300.jpg">
          </div>
          <div class="item">
            <img src="https://www.movie2free.com/wp-content/uploads/2017/04/1-1-230x300.jpg">
          </div>
        </div><br>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
<div class="col-sm-4 " id="slide">
  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <br><div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="https://www.movie2free.com/wp-content/uploads/2017/04/1-1-230x300.jpg">
    </div>
    <div class="item">
      <img src="https://www.movie2free.com/wp-content/uploads/2017/02/5b24f4646f_345x518_6f7c050383-230x300.jpg">
    </div>
    <div class="item">
      <img src="https://www.movie2free.com/wp-content/uploads/2017/03/5b24f4646f_345x518_6f7c050383-10-230x300.jpg">
    </div>
    <div class="item">
      <img src="https://www.movie2free.com/wp-content/uploads/2017/03/5b24f4646f_345x518_6f7c050383-230x300.jpg">
    </div>
  </div><br>
  <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
<div class="col-sm-4" id="slide">
  <div id="myCarousel3" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <br><div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="https://www.movie2free.com/wp-content/uploads/2017/02/5b24f4646f_345x518_6f7c050383-230x300.jpg" alt="logan">
    </div>
    <div class="item">
      <img src="https://www.movie2free.com/wp-content/uploads/2017/04/1-1-230x300.jpg">
    </div>
    <div class="item">
      <img src="https://www.movie2free.com/wp-content/uploads/2017/03/5b24f4646f_345x518_6f7c050383-230x300.jpg">
    </div>
    <div class="item">
      <img src="https://www.movie2free.com/wp-content/uploads/2017/03/5b24f4646f_345x518_6f7c050383-10-230x300.jpg">
    </div>
  </div><br>
  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="col-sm-10 " id="img">
  <img src="http://www.seven-in.de/wp-content/uploads/2014/10/logo-moviestore.jpg" style="display: block; max-width: 100%; height: auto;">
</div>
</div>

      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
  </html>
