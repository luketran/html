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
									<h1>Đăng nhập</h1>
									<p>Nếu bạn có tài khoản với chúng tôi, hãy đăng nhập!</p>
									<form action="">
										<div class="form-input">
											<input type="text" placeholder="Email">
											<p class="form-error">Email chưa đúng định dạng</p>
										</div>
										<div class="form-input">
											<input type="text" placeholder="Mật khẩu">
											<p class="form-error">Email chưa đúng định dạng</p>
										</div>
										<div class="logopt">
											<label class="cuscheck" for="logopt">
												<input type="checkbox" id="logopt" name="" value="" checked><span>Nhớ đăng nhập</span>
											</label>
											<a href="quen-mat-khau.php">Quên mật khẩu</a>
										</div>
										<button class="pagebtn">ĐĂNG NHẬP</button>
									</form>
									<span>Bạn chưa có tài khoản? <a class="tolog" href="dang-ky.php">Đăng ký tại đây</a></span>
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