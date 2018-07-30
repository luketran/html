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
		<?php include 'header.php';?>
		<!-- end header -->
		<section class="wrapper">
			<div class="pagelocal">
				<div class="container">
					<div class="row">
						<ol class="breadcrumb">
							<li><a href="#">Trang chủ</a></li>
							<li class="active">Data</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="ourinfo">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div id="bigmap">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="lh">
								<div class="row">
	
									<div class="col-md-4 contactus">
										<h3>Liên hệ với chúng tôi</h3>
										<div class="_1ct">
											<i class="fa fa-map-marker"></i>
											<div class="ctdetail">
												<h5>Địa chỉ liên hệ:</h5>
												<span>20 Cộng Hoà - Quận Tân Bình - HCM</span>
											</div>
										</div>
										<div class="_1ct">
											<i class="fa fa-phone"></i>
											<div class="ctdetail">
												<h5>Hotline:</h5>
												<span>+01 23 456 - +012 345 666</span>
											</div>
										</div>
										<div class="_1ct">
											<i class="fa fa-envelope-o"></i>
											<div class="ctdetail">
												<h5>Email:</h5>
												<span>infopolaris@gmail.com</span>
											</div>
										</div>
									</div>
									<div class="col-md-8 ideal">
										<form action="">
										<h3>Gửi bình luận của bạn</h3>
										<div class="_1k">
											<div class="yname">
												<h5>Họ tên:</h5>
												<input type="text">
											</div>
											<div class="ymail">
												<h5>Email:</h5>
												<input type="text">
											</div>
											<div class="yideal">
												<h5>Bình luận:</h5>
												<textarea name=""  cols="" rows="6"></textarea>
											</div>
										</div>
										<button>GỬI BÌNH LUẬN</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include 'footer.php';?>
	</section>



      
      <script  src="resources/vendor/jquery/jquery-3.3.1.js"></script>
      <script src="resources/vendor/bootstrap/bootstrap.min.js"></script>
      <script src="resources/vendor/owlcarousel/owl.carousel.min.js"></script>
      <script  src="resources/vendor/font-awesome-4.7.0/fontawesome.min.js"></script>
      <script  src="resources/js/main.js"></script>
	  <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
	  <script>
		  function initMap() {
			  var mapDiv = document.getElementById('map');
			  var mapDiv2 = document.getElementById('bigmap');
			  var map = new google.maps.Map(mapDiv, {
			  center: {lat: 10.800795, lng: 106.653317},
			  zoom: 15
			  });
			  
			var map2 = new google.maps.Map(mapDiv2, {
			center: {lat: 10.800795, lng: 106.653317},
			zoom: 15
			});
		  }
	  </script>
  	</body>
</html>