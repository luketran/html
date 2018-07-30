<!DOCTYPE html>
<html lang="en">
  	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title></title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="resources/vendor/bootstrap/bootstrap.min.css">
		 <!-- slick and fancybox css -->
		 <link rel="stylesheet" href="resources/vendor/slick/slick.css">
		<link rel="stylesheet" href="resources/vendor/fancybox/jquery.fancybox.min.css">
        <!-- slick and fancybox css -->
		<link rel="stylesheet" href="resources/vendor/owlcarousel/owl.carousel.min.css">
		<link rel="stylesheet" href="resources/vendor/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="resources/css/style.css" rel="stylesheet">
  	</head>
  	<body>
	<section class="main">
        <?php  include("header.php"); ?>
		<!-- end header -->
		<section class="wrapper" >
			<?php  include("page-local.php"); ?>
            <div class="whitepage">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-push-4">
							<div class="formwrap">
								<div class="usericon">
									<i class="fa fa-user"></i>
								</div>
								<div class="formcont">
									<form action="">
										<div class="form-input">
											<input type="text" placeholder="&#xf2c0; Họ và tên" style="font-family:Open Sans, FontAwesome">
											<p class="form-error">Email chưa đúng định dạng</p>
										</div>
										<div class="form-input">
											<input type="text" placeholder="&#xf003; Email" style="font-family:Open Sans, FontAwesome">
											<p class="form-error">Email chưa đúng định dạng</p>
										</div>
										<div class="form-input">
											<input type="text" placeholder="&#xf10b; Số điện thoại" style="font-family:Open Sans, FontAwesome">
											<p class="form-error">Email chưa đúng định dạng</p>
										</div>
										<div class="form-input">
											<input type="text" placeholder="&#xf023; Mật khẩu" style="font-family:Open Sans, FontAwesome">
											<p class="form-error">Email chưa đúng định dạng</p>
										</div>
										<div class="form-input">
											<input type="text" placeholder="&#xf023; Xác nhận lại mật khẩu" style="font-family:Open Sans, FontAwesome">
											<p class="form-error">Email chưa đúng định dạng</p>
										</div>
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
	 <!-- slick and fancybox lib -->
	 <script src="resources/vendor/slick/slick.min.js"></script>
    <script src="resources/vendor/fancybox/jquery.fancybox.min.js"></script>
    <!-- slick and fancybox lib -->
	<script src="resources/vendor/bootstrap/bootstrap.min.js"></script>
	<script src="resources/vendor/owlcarousel/owl.carousel.min.js"></script>
	<script  src="resources/vendor/font-awesome-4.7.0/fontawesome.min.js"></script>	
	<script  src="resources/js/main.js"></script>	
</html>