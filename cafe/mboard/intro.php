<?php
  include $_SERVER['DOCUMENT_ROOT']."/p2/younghae/cafe/include/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1 maximum-scale=1.0, minimum-scale=1, user-scalable=yes,initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/p2/younghae/cafe/css/responsive.css">
    <title>Document</title>
    <style>
      html{
                scroll-behavior: smooth;
            }
        .row {
            padding-top : 3%;
        }
        a {
      text-decoration: none;
    }
    a:link, a:visited,  a:hover, a:active {
        color : black;
      }
      #card {
        margin : 0 auto;
      }
      #m_btn {
        margin-top : 2%;
        margin-bottom : 2%;
        margin-left : 45%;
    }
    .change img {
      width : 5%;
      float: right;
    }
    .top img {
      width : 8%;
      float : right;
    }
      
    </style>
</head>
<body>
<button type="button" class="btn btn-outline-success" id="m_btn"><a href="/p2/younghae/cafe/mboard/intro_form.php">추가하기</a></button>
<?php
   include "session.php";

   $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
   $sql = "select * from introboard_cyh";
   $result = mysqli_query($con, $sql);

   while($row = mysqli_fetch_assoc($result)) {
        $num = $row["num"];
        $name = $row["name"];
        $content = $row["content"];
        $address = $row["address"];
        if($row["file_name"]){
          $file_image = "<img src='intro_data/'>";
        }
        else{
          $file_image = "";
        }
        $file_type  = $row["file_type"];
        $file_copied  = $row["file_copied"];
   
?>

  <div class="card mb-3" style="max-width: 540px;" id="card">
  <div class="change">
    <a href="/p2/younghae/cafe/mboard/modify_form_intro.php?num=<?=$num?>"><img src="/p2/younghae/cafe/img/change.png"></a>
  </div>
  <div class="row g-0">
    <div class="col-md-4">
    <?php
          if($file_image){
            echo "<img src='intro_data/".$file_copied."'width='100%'></img>";
          }
          ?>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $name?></h5>
        <p class="card-text"><?= $content?></p>
        <p class="card-text"><small class="text-muted"><?=$address?></small></p>
      </div>
    </div>
  </div>
</div>
  <?php
    }
    mysqli_close($con);
    ?>
    <div class="top">
      <a href="#m_btn"><img src="/p2/younghae/cafe/img/top.png"></a>
  </div>
</body>
</html>