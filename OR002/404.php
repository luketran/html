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
        <?php  include("header.php");?>
		<!-- end header -->
		<section class="wrapper" >
			<?php  include("page-local.php");?>
            <div class="whitepage _404">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-push-2">
							<div class="_404cont">
								<img src="resources/images/404.png" alt="">
								<b>Không tìm thấy trang!</b>
								<p>Bạn có thể quay lại trang chủ của chúng tôi qua link bên dưới, Nếu sự cố vẫn tiếp diễn, vui lòng gửi email cho chúng tôi <a class="" href="index.php">support@kidos.com</a></p>
								<a class="pagebtn" href="index.php">Trở về trang chủ</a>
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