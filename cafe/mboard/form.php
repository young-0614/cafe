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
      if(!document.board.subject.value) {
        alert("제목을 입력하세요!");
        document.board.subject.focus();
        return;
      }
      if(!document.board.content.value) {
        alert("내용을 입력하세요!");
        document.board.subject.focus();
        return;
      }
      document.board.submit();
    }
  </script>
</head>
<body>
  <form name="board" method="post" action="insert.php" enctype="multipart/form-data" id="board_f">
    <ul class="board_from">
      <li>
        <span class="col1">작성자: </span>
        <?php 
           include "session.php";
          ?>
      </li>
      <li>
        <span class="col1">제목</span>
        <div class="col">
          <input type="text" class="form-control" placeholder="title" aria-label="First name" id="sub" name="subject">
        </div>
      </li>
      <li>
        <span class="col1">내용</span>
        <span class="col2"><div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px; width : 90%;" name="content"></textarea>
          <label for="floatingTextarea2">Comments</label>
        </div></span>
      </li>
      <li>
        <span class="clo1">별점</span>
        <select name="grade">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </li>
      <li>
        <span class="col1">첨부파일</span>
        <span class="col2"><div class="mb-3">
          <input class="form-control form-control-sm" id="formFileSm" type="file" sytle="width: 50px;" name="upfile">
        </div></span>
      </li>
    </ul>
    <button type="button" class="btn btn-outline-success" id="save" onclick="check_input()">올리기</button>
  </form>
  
</body>
</html>