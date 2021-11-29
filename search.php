<?php
  include "config.php";
  $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
  $output = "";
  $sql = mysqli_query($conn, "SELECT * FROM dang_ky WHERE ten_nguoi_dung LIKE '%{$searchTerm}%' OR email LIKE '%{$searchTerm}%'");

  if(mysqli_num_rows($sql) > 0) {
    include "data.php";
  }
  else {
    $output .= "Không tồn tại người dùng";
  }
  echo $output;
?>