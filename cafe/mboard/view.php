<?php
  include $_SERVER['DOCUMENT_ROOT']."/p2/younghae/cafe/include/header.php"
?>
<?php
  $num = $_GET["num"];
  $page = $_GET["page"];

  $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
  $sql = "select * from reviewboard_cyh where num=$num";
  $result = mysqli_query($con, $sql);

  $row = mysqli_fetch_assoc($result);

  $id = $row["id"];
  $username = $row["nikname"];
  $subject = $row["subject"];
  $regist_day = $row["regist_day"];
  $grade = $row["grade"];

  $content = $row["content"];
  $content = str_replace("", "&nbsp;", $content);
  $content = str_replace("\n", "<br>", $content);

  $file_name  = $row["file_name"];
  $file_type  = $row["file_type"];
  $file_copied  = $row["file_copied"];
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    h2 {
        padding-top : 2%;
    }
    .board_view {
        padding-top : 2%;
    }
    ul li {
        list-style : none;
    }
    .col1 {
      font-size : 2rem;
    }
    .col2 {
      padding-left : 10%;
      font-size : 1rem;
    }
    .buttons {
      padding-top : 3%;
      padding-bottom : 2%;
    }
    .buttons li {
        float: left;
        margin-right : 3%;
    }
    @media screen and (max-width:900px) {
      .col1 {
        font-size : 1rem;
      }
    }
  </style>
</head>
<body>
    <ul class="board_view">
        <li class="row1">
            <sapn class="col1"><b>제목: </b><?=$subject?></span>
            <sapn class="col2"><?=$username?> | <?=$regist_day?> | </span>
            <span class="col3">
              <?php
                 switch($grade) {
                  case 5:
                    echo "★★★★★";
                    break;
                  case 4:
                    echo "★★★★☆";
                      break;
                  case 3:
                     echo "★★★☆☆";
                      break;
                  case 2:
                      echo "★★☆☆☆";
                       break;
                  case 1:
                      echo "★☆☆☆☆";
                      break;
                 }
                ?>
            </span>
        </li>
        <br>
        <li class="row2">
            <?php
              echo $content;
              if(!$file_name == null){
                echo "<br><img src='data/".$file_copied."'width='50%'></img>";
              }
            ?>
        </li>
        <br>
    </ul>
    <ul class="buttons">
        <li><button type="button" class="btn btn-success" onclick="location.href='review.php?page=<?=$page?>'">목록보기</button></li>
        <li>
          <?php
            if($id==$userid){
              ?>
                <button type="button" class="btn btn-success" onclick="location.href='delete.php?num=<?=$num?>&page=<?=$page?>'">삭제하기</button></li>
                <li><button type="button" class="btn btn-success" onclick="location.href='modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정하기</button></li>
            <?php
            }
            ?>
    </ul>
    <?php
       mysqli_close($con);
      ?>
</body>
</html>