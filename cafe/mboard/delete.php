<?php
  include "session.php";
  if(!$userid) {
    echo "<script>
             alert('권한이 없습니다!');
             history.go(-1)
             </script>";
    exit;
 }

  $num = $_GET["num"];
  $page = $_GET["page"];
  $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
  $sql = "delete from reviewboard_cyh where num='$num'";
  $result = mysqli_query($con, $sql);
  mysqli_close($con);
?>
<script>
   alert("삭제되었습니다");
</script>

<?php
  echo "<script>
        location.href='review.php?page=$page';
        </script>";
?> 