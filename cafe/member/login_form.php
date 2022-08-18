<?php
  include $_SERVER['DOCUMENT_ROOT']."/p2/younghae/cafe/include/header.php"
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1 maximum-scale=1.0, minimum-scale=1, user-scalable=yes,initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      * {
        padding: 0;
        margin : 0;
      }
      #login_box {
        padding-top : 10%;
        width : 50%;
        height : 100%;
        display : block;
        margin : 0 auto;
      }
      .container {
        margin: !important;
        margin: 0 auto;
      }
      #login_f {
        right : -5% !important;
        left : 1% !important;
      }
      .title h2 {
        text-align : center;
      }
      .row {
        margin-top : 2%;
      }
      .join {
        text-align : center;
        padding-top : 1%;
        text-decoration : underline;
      }

      a:link, a:visited,  a:hover, a:active {
        color : #000000;
      }
    </style>
    <script>
      function check_input(){
        if(!document.login.id.value) {
          alert("아이디를 입력해주세요!");
          document.login.id.focus();
          return;
        }
        if(!document.login.pass.value) {
          alert("비밀번호를 입력해주세요!");
          document.login.pass.focus();
          return;
        }
        document.login.submit();
      }
    </script>
  </head>
<body>
  <div id="login_box">
    <form name="login" id="login_f" method="post" action="login.php">
            <div class="container">
                <div class="title">
                    <h2><strong>Login</strong></h2>
                </div>
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="id">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">기억한다</label>
                    </div>
                  </form>
                  <div class="row">
                    <div class="col text-center">
                      <button type="button" class="btn btn-outline-success" onclick="check_input()">login</button>
                    </div>
                  </div>
                  <p class="join"><a href="/p2/younghae/cafe/member/form.php">회원가입하기</a></p>
            </div>
    </form>
  </div>
    
</body>
</html>