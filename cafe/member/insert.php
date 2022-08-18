<?php 
  $id = $_POST["id"];
  $pass = $_POST["pass"];
  $nickname = $_POST["nickname"];
  $email = $_POST["email"];

  $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
  $sql = "insert into members_cyh(id, pass, nikname, email)";
  $sql .= "values('$id', '$pass', '$nickname', '$email')";

  mysqli_query($con, $sql);
  mysqli_close($con);
  echo "<script>
         location.href='/p2/younghae/cafe/index.php';
        </script>";
?>