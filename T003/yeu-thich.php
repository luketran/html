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
		 <!-- slick and fancybox css -->
		 <link rel="stylesheet" href="resources/vendor/slick/slick.css">
		<link rel="stylesheet" href="resources/vendor/fancybox/jquery.fancybox.min.css">
        <!-- slick and fancybox css -->
		<link rel="stylesheet" href="resources/vendor/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="resources/css/style.css" rel="stylesheet">
  	</head>
  	<body>
	<section class="main">
        <?php   
            include("header-loged.php");
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
            <div class="tablecontent">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="wishlist">
								<table>
									<thead>
										<tr>
											<th>Sản phẩm</th>
											<th>Giá tiền</th>
											<th>Lưu giỏ hàng</th>
											<th>Xoá</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="wliteminfo">
												<img src="resources/images/content/wlitem.png" alt="">
												<div class="wlitemdetail">
													<p>Vợt tennis</p>
													<p>Màu sắc: Nâu</p>
													<p>Thương hiệu: Lusian</p>
												</div>
											</td>
											<td class="show-title st1" data-title1="Giá tiền :"><span class="_1price">1.100.000d</span> </td>
											<td>
												<a type="button" class="pagebtn savetocart" data-toggle="modal" data-target="#modalqview"><i class="fa fa-shopping-bag"></i>LƯU GIỎ HÀNG</a>
											</td>
											<td>
												<i class="rmfc fa fa-trash"></i>
											</td>
										</tr>
										<tr>
											<td class="wliteminfo">
												<img src="resources/images/content/wlitem.png" alt="">
												<div class="wlitemdetail">
													<p>Vợt tennis</p>
													<p>Màu sắc: Nâu</p>
													<p>Thương hiệu: Lusian</p>
												</div>
											</td>
											<td class="show-title st1" data-title1="Giá tiền :"><span class="_1price">1.100.000d</span> </td>
											<td>
												<a type="button" class="pagebtn savetocart" data-toggle="modal" data-target="#modalqview"><i class="fa fa-shopping-bag"></i>LƯU GIỎ HÀNG</a>
											</td>
											<td>
												<i class="rmfc fa fa-trash"></i>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="text-right wlaction">
									<a class="pagebtn" href="san-pham.php">TIẾP TỤC MUA SẮM</a>
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
	 <!-- slick and fancybox lib -->
	 <script src="resources/vendor/slick/slick.min.js"></script>
    <script src="resources/vendor/fancybox/jquery.fancybox.min.js"></script>
    <!-- slick and fancybox lib -->
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="resources/vendor/owlcarousel/owl.carousel.min.js"></script>
	<script  src="resources/vendor/font-awesome-4.7.0/fontawesome.min.js"></script>	
	<script  src="resources/js/main.js"></script>	
</html>