<?php

   $num = $_GET["num"];

   $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
   $sql = "select * from introboard_cyh where num='$num'";
   $result = mysqli_query($con, $sql);

   $row = mysqli_fetch_assoc($result);

   $name = $row["name"];
   $content = $row["content"];
   $address = $row["address"];
   $file_name = $row["file_name"];

   mysqli_close($con);
?>
<?php
  include $_SERVER['DOCUMENT_ROOT']."/p2/younghae/cafe/include/header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/p2/younghae/cafe/css/responsive.css">
  <title>글쓰기</title>
  <style>
    * {
      padding : 0;
      margin : 0;
    }
    .board_from li {
      list-style: none;
      padding-top : 1%;
    }
    #board_f {
      padding-top : 3%;
    }
    #save {
        margin-left : 87%;
        margin-bottom : 2%;
        margin-top : 1%;
    }
    .sub_text {
      border-radius : 7px;
    }
    #formFileSm {
      width : 30% !important;
    }
    #sub {
      width : 30% !important;
    }
  </style>
  <script>
    function check_input(){
      if(!document.board.content.value) {
        alert("내용을 입력하세요!");
        document.board.content.focus();
        return;
      }
      document.board.submit();
    }
  </script>
</head>
<body>
  <form name="board" method="post" action="modify_intro.php?num=<?=$num?>"  enctype="multipart/form-data" id="board_f">
    <ul class="board_from">
      <li>
        <span class="col1">이름</span>
        <div class="col">
          <?=$name?>
      </li>
      <li>
        <span class="col1">내용</span>
        <span class="col2"><div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px; width : 90%;" name="content"><?=$content?></textarea>
          <label for="floatingTextarea2">Comments</label>
        </div></span>
      </li>
      <li>
        <span class="col1">주소</span>
        <div class="col">
          <?=$address?>
        </div>
      </li>
      <li>
        <span class="col1">첨부파일</span>
        <span class="col2"><div class="mb-3">
          <?=$file_name?>
        </div></span>
      </li>
    </ul>
    <button type="button" class="btn btn-outline-success" id="save" onclick="check_input()">올리기</button>
  </form>
  
</body>
</html>