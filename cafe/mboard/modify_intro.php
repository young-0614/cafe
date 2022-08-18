<?php
   include "session.php";

   $num = $_GET["num"];

   $content = $_POST["content"];

   $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
   $sql = "update introboard_cyh set content='$content' where num='$num'";
   mysqli_query($con, $sql);

   mysqli_close($con);
?>
<script>
   alert("수정되었습니다");
</script>
<?php
   echo "<script>
            location.href='intro.php';
        </script>";
?>