<!DOCTYPE html>
<html lang="en">
  	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title></title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="resources/vendor/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="resources/vendor/owlcarousel/owl.carousel.min.css">
		<link rel="stylesheet" href="resources/vendor/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="resources/css/style.css" rel="stylesheet">
  	</head>
  	<body>
	<section class="main">
        <?php   
            include("header.php");
        ?>
		<!-- end header -->
		<section class="wrapper" >
            <div class="pagelocal">
                <div class="container">
                    <h1>LIÊN HỆ</h1>
                    <ol class="breadcrumb">
						<li><a href="#">Trang chủ</a></li>
						<li class="active">Liên hệ</li>
					</ol>
                </div>
            </div>
            <div class="whitepage">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-push-4">
							<div class="formwrap">
								<div class="usericon">
									<img src="resources/images/content/usersymbol.png" alt="">
								</div>
								<div class="formcont">
									<h1>Đăng ký</h1>
									<p>Nếu bạn chưa có tài khoản với chúng tôi, hãy đăng ký!</p>
									<form action="">
										<input type="text" placeholder="Tên người dùng">
										<input type="text" placeholder="Số điện thoại">
										<input type="text" placeholder="Email">
										<input type="text" placeholder="Mật khẩu">
										<input type="text" placeholder="Xác nhận lại mật khẩu">
										<button class="pagebtn">ĐĂNG KÝ</button>
									</form>
									<span>Bạn đã có tài khoản?<a class="tolog" href="dang-nhap.php">Đăng nhập tại đây</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>
		
		<!-- end content -->
		<?php   
            include("footer.php");
        ?>
		<!-- end foote -->
		<?php   
            include("hide-content.php");
        ?>
	</section>


      
	<script  src="resources/vendor/jquery/jquery-3.3.1.js"></script>
	<script src="resources/vendor/bootstrap/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="resources/vendor/owlcarousel/owl.carousel.min.js"></script>
	<script  src="resources/vendor/font-awesome-4.7.0/fontawesome.min.js"></script>	
	<script  src="resources/js/main.js"></script>	
</html>