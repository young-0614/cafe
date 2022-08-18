<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1 maximum-scale=1.0, minimum-scale=1, user-scalable=yes,initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .close {margin:2% 0 0 12%; cursor:pointer; text-align:center;}
        </style>
        </head>
        <body>
            <h3>아이디 중복체크</h3>
            <div>
            <?php
              $id = $_GET["id"];

              if(!$id) {
                echo("아이디를 입력해주세요");
              }
              else {
                $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
                $sql = "select * from members_cyh where id='$id'";
                $result = mysqli_query($con, $sql);

                $num_record = mysqli_num_rows($result);

                if($num_record) {
                    echo "중복된 아이디입니다.<br>";
                    echo "다른 아이디를 입력해주세요!<br>";
                }
                else {
                    echo "사용 가능한 아이디입니다.<br>";
                }
                mysqli_close($con);
              }
              ?>
              </div>
              <div class="close">
                <button type="button" class="btn btn-outline-success" onclick="javascript:self.close()">창 닫기</button>
              </div>
        </body>
</html>