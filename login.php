<?php
session_start();
$email = $_POST['email_dang_nhap'];
$password = $_POST['password_dang_nhap'];
// $password = md5($password);

$conn = mysqli_connect('localhost', 'root', '', 'data');
mysqli_set_charset($conn, "utf8");
$sql = "SELECT * FROM dang_ky WHERE email = '$email' AND mat_khau = '$password'";
$user = mysqli_query($conn, $sql);


if (isset($_POST['submit_dang_nhap']) && $_POST['email_dang_nhap'] !='' && $_POST['password_dang_nhap'] !='') {
    if (mysqli_num_rows($user)) {
        $_SESSION['user']  = $email;
        include 'mainpage.php';
    } else {
        echo "<script>alert('Sai email hoặc mật khẩu')</script>";
        include 'index.html';
    }
} else {    
    header("location:index.html");
}
?>  
