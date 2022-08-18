<?php 
  session_start();

  if(isset($_SESSION["userid"]))
    $userid = $_SESSION["userid"];
  else {
    $userid="";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/p2/younghae/cafe/css/responsive.css">
    <title>Where</title>
    <style>
        .p-3 {
           position: relative;
        }
        .nav{
            position:absolute;
            right : 30%;
        }
        .d-flex {
          padding-left : 10%;
        }
    </style>
</head>
<body>
    <header class="p-3 text-dark" style="background-color:#CEE5D0;">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start" id="logo">
            <a href="/p2/younghae/cafe/index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <img src="/p2/younghae/cafe/img/logo.png" width="80%">
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" id="header_nav">
              <li><a href="/p2/younghae/cafe/index.php" class="nav-link px-2 text-secondary">메인</a></li>
              <li><a href="/p2/younghae/cafe/mboard/intro.php" class="nav-link px-2 text-dark">소개</a></li>
              <li><a href="/p2/younghae/cafe/mboard/review.php" class="nav-link px-2 text-dark">리뷰</a></li>
              <?php
              if(!$userid) {
              ?>
              <li><a href="/p2/younghae/cafe/member/login_form.php" class="nav-link px-2 text-dark">로그인</a></li>
              <?php
               } else {
               ?>
               <li><a href="/p2/younghae/cafe/member/logout.php" class="nav-link px-2 text-dark">로그아웃</a></li>
               <?php
               }
               ?>
            </ul>
            <form class="d-flex" id="header_search">
               <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success" type="submit" >Search</button>
            </form>
          </div>
        </div>
      </header>
</body>
</html>