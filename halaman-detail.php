<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman-Detail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #69002c; 
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; 
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; 
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; 
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="halaman-detail.php">QUINNZEL CORP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login-register.php">LOGIN & REGISTER</a></li>
        <li><a href="index.php">BACK</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Who are we?</h3>
  <img src="img\bg55.jpg" class="img-responsive img-circle margin" style="display:inline" alt="logo" width="350" height="350">
  <h3>We are Quinnzel Corp!</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Tentang Perusahaan</h3>
  <p>Perusahaan kami berdiri secara independent dan dibentuk oleh 6 orang. </p>
  <p>Perusahaan kami bergerak dalam bidang data mining.</p>
  <p>Dapat dipastikan beragam data yang anda inginkan kami akan membantu.</p>
  <p>Untuk itu anda dapat memulainya bersama kami.</p>
  <p>Ayo bergabung!</p>
  <h3 class="margin">Alamat & Kontak</h3>
  <p>Alamat : Jln. Raya Cihaurbeuti, Ciamis, 46262</p>
  <p>Kontak : 087767868456</p>
  </a>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
    <span><h6>@Copyright by 18111393_Muhamad Helmi Pratama_TIFRP18CIDA_UASWEB1</h6></span>
</footer>

</body>
</html>
