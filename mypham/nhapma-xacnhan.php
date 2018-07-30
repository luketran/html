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
			<div class="forgotpass">
				<div class="stepcont">
					<div class="cconfirmtype">
						<h5>Nhập mã xác nhận để lấy lại mật khẩu</h5>
						<form action="" class="uinput">
							<input class="form-check-input" placeholder="Mã xác nhận" type="text" name="cconfirmtype" id="cfbyphone" value="" checked>
							<button type="submit" class="">TIẾP TỤC</button>
						</form>
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
			  var map = new google.maps.Map(mapDiv, {
			  center: {lat: 10.800795, lng: 106.653317},
			  zoom: 15
			  });
		  }
	  </script>
	  
  	</body>
</html>