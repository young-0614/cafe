<?php 
  session_start();
  unset($_SESSION["userid"]);

  echo "<script>
  location.href = '/p2/younghae/cafe/index.php';
  </script>";
?>