<?php
   include "session.php";

   $num = $_GET["num"];
   $page = $_GET["page"];

   $subject = $_POST["subject"];
   $content = $_POST["content"];
   $regist_day = date("Y-m-d");

   $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
   $sql = "update reviewboard_cyh set subject='$subject', ";
   $sql .= "content='$content', regist_day='$regist_day' where num='$num'";
   mysqli_query($con, $sql);

   mysqli_close($con);
?>
<script>
   alert("수정되었습니다");
</script>
<?php
   echo "<script>
            location.href='review.php?page=$page';
        </script>";
?>