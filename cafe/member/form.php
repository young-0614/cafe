<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1 maximum-scale=1.0, minimum-scale=1, user-scalable=yes,initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/p2/younghae/cafe/css/responsive.css">
        <title>회원가입</title>
        <style>
            * {
           padding: 0;
           margin : 0;
            }
            body {
                background-color : #94B49F;
            }
            .title {
                text-align : center;
                margin-top : 3%;
            }
            .box {
                background-color : #fff;
                border-radius : 25px;
                width : 50%;
                height : 100%;
                display : block;
                margin : 0 auto;
                margin-top : 3%;
            }

            .box_wrap{
                width: 90%;
                margin: 0 auto;
            }
            .g-3{
                display: flex;
            }
            .btn-outline-success{
                width: 25%;
            }
            .col-auto {
                padding-top : 2%;
            }
            .buttons {
                padding-top : 3%;
                text-align : center;
            }
        </style>
        
        <script>
            function check_input() {
                if(!document.member.id.value) {
                    alert("아이디를 입력하세요!");
                    document.member.id.focus();
                    return;
                }
                if(!document.member.pass.value){
                    alert("비밀번호를 입력하세요!");
                    document.member.pass.focus();
                    return;
                }
                if(!document.member.pass_confirm.value){
                    alert("비밀번호 확인을 입력하세요!");
                    document.member.pass_confirm.focus();
                    return;
                }
                if(document.member.pass.value != document.member.pass_confirm.value) {
                    alert("비밀번호가 일치하지 않습니다.");
                    document.member.pass.focus();
                    document.member.pass.select();
                    return;
                }
                if(!document.member.nickname.value){
                    alert("닉네임을 입력하세요!");
                    document.member.nikname.focus();
                    return;
                }
                if(!document.member.email.value){
                    alert("이메일을 입력하세요!");
                    document.member.email.focus();
                    return;
                }
                document.member.submit();
            }

            function reset_form() {
                document.member.id.value = "";
                document.member.pass.value = "";
                document.member.pass_confirm.value = "";
                document.member.nickname.value = "";
                document.member.email.value = "";
                document.member.id.focus();
                return;
            }

            function check_id() {
                window.open("check_id.php?id=" + document.member.id.value, "IDcheck", "left=700, top=300, width=380, height=160, scrollbars=no, resizable=yes");
            }
            </script>
            </head>
            <body>
                <div class="title">
                        <img src="/p2/younghae/cafe/img/logo.png">
                        <h2> 회원가입 </h2>
                </div>
                <div class="row">
                   <form name="member" action="insert.php" method="post">
                        <div class="box" >
                            <div class="box_wrap">
                                <div class="id">
                                    <div class="row g-3 align-items-center" id="id">
                                        <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">아이디</label>
                                        </div>
                                        <div class="col-auto">
                                        <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="id">
                                        </div>
                                        <div>
                                        <button type="button" class="btn btn-outline-success" onclick="check_id()" id="id_overlap">중복확인</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center" >
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">비밀번호</label>
                                    </div>
                                    <div class="col-auto">
                                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="pass">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">비밀번호 확인</label>
                                    </div>
                                    <div class="col-auto">
                                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="pass_confirm">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">닉네임</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="nickname">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">이메일</label>
                                    </div>
                                    <div class="col-auto">
                                    <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="email">
                                    </div>
                                </div>
                                <ul class="buttons">
                                    <button type="button" class="btn btn-success" onclick="check_input()">저장하기</button>
                                    <button type="button" class="btn btn-success" onclick="reset_form()">취소하기</button>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </body>
</html>