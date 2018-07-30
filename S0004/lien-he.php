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
            <div class="content">
				<div class="contactus">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="map">
                                <div class="bigmap" id="bigmap"></div>
                                <div class="contactinfo">
                                    <div class="_1info">
                                        <h4>Hotline</h4>
                                        <p>(+84) 937 334 594</p>
                                    </div>
                                    <div class="_1info">
                                        <h4>Từ  thứ 2- chủ nhật</h4>
                                        <p>11.30 am – 2 pm
                                            <br>
                                            3 pm – 7.30 pm</p>
                                    </div>
                                    <div class="_1info">
                                        <h4>Email</h4>
                                        <p>contact@bellastore.com</p>
                                    </div>
                                    <div class="_1info">
                                        <h4>Địa chỉ</h4>
                                        <p>Tầng 12A - Tòa nhà Pico Plaza, 20 Cộng Hòa, Phường 12, Quận Tân Bình, TP Hồ Chí Minh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="contactform">
                                <h3>Liên hệ chúng tôi</h3>
                                <form action="">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Tên">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Tiêu đề">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="" id="" cols="" rows="10" placeholder="Nội dung"></textarea>
                                    </div>
                                    <button class="pagebtn">GỬI</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<?php   
                include("hide-content.php");
            ?>
		</section>
		<!-- end content -->
		<?php   
            include("footer.php");
        ?>
		<!-- end foote -->
		
	</section>


      
	<script  src="resources/vendor/jquery/jquery-3.3.1.js"></script>
	<script src="resources/vendor/bootstrap/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
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