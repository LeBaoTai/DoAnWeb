<?php
// session_start();
if (!isset($_SESSION['user'])) {
    header("location:index.html");
} else {
    echo "wellcome " . $_SESSION['user'];
}
?>
 
<!DOCTYPE html>
<html>
<head
    <title>Home page</title>
</head>
<body>
    <a href="fb.com">FB</a>
    <a href="login.php">Dang xuat</a>
</body>
</html>