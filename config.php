<?php
  $conn = mysqli_connect('localhost', 'root', '', 'data');
  if (!$conn) {
    echo 'Database not connected' . mysqli_connect_error();
  }
?>