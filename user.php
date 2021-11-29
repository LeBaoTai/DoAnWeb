<?php
  session_start();
  include "config.php";
  $sql = mysqli_query($conn, "SELECT * FROM dang_ky");
  $output = "";

  if (mysqli_num_rows($sql) == 1) {
    // $output .= "Không tồn tại";
    include "data.php";
  }
  else if (mysqli_num_rows($sql) > 0) {
    include "data.php";
  } 
  
  echo $output;
?>