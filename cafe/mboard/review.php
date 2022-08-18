<?php
  include $_SERVER['DOCUMENT_ROOT']."/p2/younghae/cafe/include/header.php"
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/p2/younghae/cafe/css/responsive.css">
  <title>리뷰 게시판</title>
  <style>
    @media screen and (min-width:900px) {
      * { padding: 0; margin: 0; box-sizing: border-box;}
    h3 {
      text-align : center;
      padding-top : 2%;
    }
    #cate {
      margin-left : 68%;
    }
    #re_se {
      width : 15% !important;
    }
    ul { list-style-type: none; }
    .pagination {
      padding-top : 2%;
      justify-content: center;
    }
    #m_btn {
      margin-left : 80%;
    }
    a {
      text-decoration: none;
    }
    a:link, a:visited,  a:hover, a:active {
        color : black;
      }
	  .board_list { margin-right : 4%;}
	.board_list li { padding: 2% 3% 1% 0; border-bottom: solid 1px #dddddd; }
    .board_list span { display: inline-block; text-align: center; }
    .board_list .col1 { width: 10%; }
    .board_list .col2 { width: 55%; text-align: left; }
    .board_list .col3 { width: 7%; }
    .board_list .col4 { width: 6%; }
    .board_list .col5 { width: 18%; }
    .page_num {	margin-left : 40%;	margin-top: 20px; }
    .page_num li { display: inline;}
    #content {
      line-height : 20%;
    }
    }
    @media screen and (max-width:900px) {
      * { padding: 0; margin: 0; box-sizing: border-box;}
    h3 {
      text-align : center;
      padding-top : 2%;
    }
    ul { list-style-type: none; }
    a {
      text-decoration: none;
    }
    a:link, a:visited,  a:hover, a:active {
        color : black;
      }
      .board_list { margin-right : 4%;}
	.board_list li { padding: 2% 3% 1% 0; border-bottom: solid 1px #dddddd; }
    .board_list span { display: inline-block; text-align: center;  }
    .board_list .col1 { width: 10%;  }
    .board_list .col2 { width: 70%; text-align: left; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
    .board_list .col2 img { width : 30%;}
    .board_list .col3 { width: 15%;  }
    .board_list .col4 { width: 100%; display:block; text-align:left; margin-left : 10%;}
    .board_list .col5 { width: 100%; display:block; text-align:left; margin-left : 10%;}
    .page_num {	margin-left : 40%;	margin-top: 20px; }
    .page_num li { display: inline;}
    #content {
      width : 100%;
    }
    #mobile_grade{
      display: none;
    }
    #mobile_day{
      display: none;
    }
  }
  </style>
  <script>
    function info(){
      var cate = document.getElementByID('cate');
      var cate_val = opt.options[cate.selectedIndex].value;
      var = info = "";
      if(cate_val=='subject'){
        info = "제목을 입력하세요.";
      }
      else if(cate_val == 'content'){
        info = "내용을 입력하세요";
      }
      else if(cate_val == 'nikname'){
        info = "작성자를 입력하세요";
      }
    }
    document.getElementById('re_se').placeholder = info;
    </script>
</head>
<body>
  <h3>리뷰게시판</h3>
  <form class="d-flex" method="get" action="search.php" id="review_search">
    <select name="cate" id="cate" onchange="info()">
       <option value="subject">제목</option>
       <option value="content">내용</option>
       <option value="nikname">작성자</option>
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="re_se" name="search">
      <button class="btn btn-outline-success" type="submit" >Search</button>
  </form>
  <ul class="board_list">
    <li>
        <span class="col1">번호</span>
        <span class="col2">제목</span>
        <span class="col3">작성자</span>
        <span class="col4" id='mobile_day'>등록일</span>
        <span class="col5" id='mobile_grade'>평점</span>
    </li>
  <?php 
   include "session.php";

   if(isset($_GET["page"]))
     $page = $_GET["page"];
   else {
    $page = 1;
   }
   $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
   $sql = "select * from reviewboard_cyh order by num desc";
   $result = mysqli_query($con, $sql);

   $total_record = mysqli_num_rows($result); //전체 글 수

   $scale = 4; //한 화면에 표시되는 글 수

   //전체 페이지 수 계산
   if($total_record % $scale == 0){
    $total_page = floor($total_record/$scale);
   }
   else {
    $total_page = floor($total_record/$scale) +1;
   }

   $start = (intval($page) - 1) * $scale;
   $number = $total_record - $start;
   for($i=$start; $i<$start+$scale && $i<$total_record; $i++) {
        mysqli_data_seek($result, $i);
        $row = mysqli_fetch_assoc($result);

        $num = $row["num"];
        $id = $row["id"];
        $username = $row["nikname"];
        $subject = $row["subject"];
        $regist_day = $row["regist_day"];
        $grade = $row["grade"];
        if($row["file_name"]){
          $file_image = "<img src='data/'>";
        }
        else{
          $file_image = "";
        }
        $file_type  = $row["file_type"];
        $file_copied  = $row["file_copied"];
   ?>
      <li id="content">
        <span class="col1"><?=$number?></span>
        <span class="col2">
        <?php
          if($file_image){
            echo "<img src='data/".$file_copied."'width='150'></img>";
          }
          ?><a href="view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span>
        <span class="col3"><?=$username?></span>
        <span class="col4"><?=$regist_day?></span>
        <span class="col5">
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
<?php
       $number--; 
   }
  mysqli_close($con);
?>
   </ul>

   <ul class="page_num">
    <?php
       if($total_page>=2 && $page >=2) {
        $new_page = $page -1;
        echo "<li><a href='review.php?page=$new_page'>◀</a></li>";
       }
       else{
        echo "<li>&nbsp;</li>";
       }
       //게시판 목록 하단에 페이지 링크 번호 출력
       for($i=1; $i<=$total_page; $i++) {
        if($page==$i){
          echo "<li><b>$i</b></li>";
        }
        else{
          echo "<li><a href='review.php?page=$i'>$i</a></li>";
        }
       }
       if($total_page>=2 && $page != $total_page) {
        $new_page = $page +1;
        echo "<li><a href='review.php?page=$new_page'>▶</a></li>";
       }
       else{
        echo "<li>&nbsp;</li>";
       }
       ?>
 
   <button type="button" class="btn btn-outline-success" id="m_btn"><a href="/p2/younghae/cafe/mboard/form.php" id="write">글쓰기</a></button>

  
</body>
</html>

<!--https://choco4study.tistory.com/m/65 검색기능-->