<?php
  include "config.php";
	if(!isset($_SESSION['user'])){
    header("index.html");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./mainpage.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/610/610413.png" type="image/x-icon">
    <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">

		<!-- add ajax -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Home</title>
</head>

<body>
<body>
	<main>
		<section class="users">
		<div class="container">
				<div class="left">
					<!-- phần header -->
					<div class="header">
						<!-- phần panner -->
						<div class="panner">
							<h1>2M2</h1>
						</div>
						<!-- phần title -->
						<div class="title">
							<?php
								session_start();
								include	"config.php";
								// $conn = mysqli_connect('localhost', 'root', '', 'data');
								$sql = mysqli_query($conn, "SELECT * FROM dang_ky WHERE email = '{$_SESSION['user']}'");
								if (mysqli_num_rows($sql)) {
									$row = mysqli_fetch_assoc($sql);
								}
							?>
							<ul class="sub-title">
								<li><a href="#"><i class="ti-user" style="font-size: 26px;"></i></a></li>
								<li>
									<a href="#">
										<h3>
											<?php
												echo $row['ten_nguoi_dung']
											?>
										</h3>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="ti-settings"></i>
										<ul class="sub-title-2">
											<li><a href="#"> Thông tin</a></li>
											<li><a href="#"> Trợ giúp</a></li>
											<li><a href="logout.php"> Đăng xuất</a></li>
										</ul>
									</a>
								</li>
								<li><a href="#"><i class="ti-video-camera"></i></a></li>
							</ul>
						</div>
						<!-- phần navigation -->
						<div class="nav">
							<input type="text" class="search" placeholder="Tìm kiếm">
							<button class="btn-search"><i class="ti-search"></i></button>
						</div>
					</div>
					<!-- phần list user -->
					<div class="list-user">
				
					</div>
				</div>

			<!-- phần right -->
			<div class="right">
				<!-- phần header -->
				<div class="header">
          <?php
            $user_name = mysqli_real_escape_string($conn, $_GET['user']);
            $sql = mysqli_query($conn, "SELECT * FROM dang_ky WHERE email = '{$user_name}'");
            if (mysqli_num_rows($sql)) {
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
					<div class="avatar">
						<i class="ti-user"></i>
					</div>

					<div class="user">
						<h3 class="name"><?php echo $row['ten_nguoi_dung']?> </h3>
					</div>

					<div class="nav">
						<div class="icon"><i class="ti-microphone"></i></div>
						<div class="icon"><i class="ti-video-camera"></i></div>
						<div class="icon"><i class="ti-info-alt"></i></div>
					</div>
				</div>

				<!-- phần tin nhắn middle -->
				<div class="middle">
					
				</div>

				<!-- phần footer -->
				<form action="#" class="typing-area" autocomplete="off">
				<div class="footer">
					<div class="nav">
						<div class="icon"><i class="ti-plus"></i></div>
						<div class="icon"><i class="ti-image"></i></div>
						<div class="icon"><i class="ti-file"></i></div>
						<div class="icon"><i class="ti-gift"></i></div>	
					</div>

					<div class="chat-box">
            <input type="text" name="outgoing_id" value="<?php echo $_SESSION['user'];?> " hidden>
            <input type="text" name="incoming_id" value="<?php echo $row['email'];?>" hidden>
						<input type="text" name="message" id="abc" class="input-field" placeholder="Aa">
					</div>

					<div class="send">
						<div class="icon"><button class="send-btn"><i class="ti-angle-double-up"></i></button></div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</section>
	</main>
</body>

<script src="./asset/js/chat.js"></script>
</html>