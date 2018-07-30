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
            <?php  include("page-local.php"); ?>
            <div class="contactus">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        <h1>Liên hệ</h1>
                            <div id="bigmap" class="bigmap">
            
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="contactinfo">
                            <h1>Địa chỉ liên hệ</h1>
                            <div class="col-md-4">
                                <div class="cticon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <span>Tầng 12A - Tòa nhà Pico Plaza, 20 Cộng Hòa, Phường 12, Quận Tân Bình, TP Hồ Chí Minh</span>
                            </div>
                            <div class="col-md-4">
                                <div class="cticon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <span>028 62613377 - 028 38111144</span>
                            </div>
                            <div class="col-md-4">
                                <div class="cticon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <span>info@polarisvietnam</span>
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
	<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async="" defer=""></script>
	<script>
		function initMap() {
			var bigmap = document.getElementById('bigmap');
			var bmap = new google.maps.Map(bigmap, {
			center: {lat: 10.800795, lng: 106.653317},
			zoom: 15
			});
		}
	</script>
</html>