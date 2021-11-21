<?php
    if(isset($_POST['submit_dang_ky']) && $_POST['username_dang_ky']!='' && $_POST['email_dang_ky']!='' && $_POST['password_dang_ky']!='') {
        $username = trim($_POST['username_dang_ky']);
        $password = trim($_POST['password_dang_ky']);
        $email = trim($_POST['email_dang_ky']);
        
        $conn = mysqli_connect('localhost', 'root', '', 'data');
        mysqli_set_charset($conn, "utf8");
        $sql = "SELECT * FROM dang_ky WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            echo "<script>alert('Email đã tồn tại')</script>";
            require 'index.html';
        } else {
            // $password = md5($password);
            $sql = "INSERT INTO dang_ky(ten_nguoi_dung, email, mat_khau) VALUE ('$username', '$email', '$password')";
            mysqli_query($conn, $sql);
            echo "<script>alert('Đăng kí thành công')</script>";
            require 'index.html';
        }
    } else {
        header("location:index.html");
    }
?>