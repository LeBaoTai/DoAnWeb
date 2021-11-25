<!-- <?php
        // session_start();
        if (!isset($_SESSION['user'])) {
            header("location:index.html");
        } else {
            echo "wellcome " . $_SESSION['user'];
        }
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./mainpage.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/610/610413.png" type="image/x-icon">
    <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
    <title>Home</title>
</head>

<body>
	<main>
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
						<ul class="sub-title">
							<li><a href="#"><i class="ti-user" style="font-size: 26px;"></i></a></li>
							<li><a href="#"><h3>User</h3></a></li>
							<li>
								<a href="">
									<i class="ti-settings"></i>
									<ul class="sub-title-2">
										<li><a href="#"> Thông tin</a></li>
										<li><a href="#"> Trợ giúp</a></li>
										<li><a href="#"> Đăng xuất</a></li>
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

				<div class="list-user">
					<ul class="user">
						<li>
							<div class="sub-user">
								<i class="ti-user"></i>
								<div class="mess">
									<h4 class="username">Phạm Minh Quân</h4>
									<p class="last-mess">ALo ALo</p>
								</div>
							</div>
						</li>

						<li>
							<div class="sub-user">
								<i class="ti-user"></i>
								<div class="mess">
									<h4 class="username"> Lê Bảo Tài </h4>
									<p class="last-mess">ALo ALo</p>
								</div>
							</div>
						</li>

						<li>
							<div class="sub-user">
								<i class="ti-user"></i>
								<div class="mess">
									<h4 class="username">Name</h4>
									<p class="last-mess">ALo ALo</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<div class="right">
				<div class="header">
					<div class="avatar">
						<i class="ti-user"></i>
					</div>

					<div class="user">
						<h3 class="name"> Lê Bảo Tài </h3>
						<h5 class="status">Offline</h5>
					</div>

					<div class="nav">
						<div class="icon"><i class="ti-microphone"></i></div>
						<div class="icon"><i class="ti-video-camera"></i></div>
						<div class="icon"><i class="ti-info-alt"></i></div>
					</div>
				</div>

				<div class="middle">

				</div>

				<div class="footer">
					<div class="nav">
						<div class="icon"><i class="ti-plus"></i></div>
						<div class="icon"><i class="ti-image"></i></div>
						<div class="icon"><i class="ti-file"></i></div>
						<div class="icon"><i class="ti-gift"></i></div>	
					</div>

					<div class="chat-box">
						<input type="text" name="" id="" placeholder="Aa">
					</div>

					<div class="send">
						<div class="icon"><i class="ti-angle-double-up"></i></div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
