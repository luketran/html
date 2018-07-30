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
        <?php include("header-loged.php");?>
		<!-- end header -->
		<section class="wrapper" >
			<?php include("page-local.php");?>
			<div class="ordersuccess">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-push-2">
							<div class="successann">
								<div class="_1ann">
									<i class="fa fa-check"></i><b>Bạn đã đặt hàng thành công</b>
									<p>Cám ơn bạn đã đặt hàng tại OZ Place , yêu cầu đặt hàng của bạn đã được tiếp nhận và sẽ được xử lý nhanh chóng trong thời gian sớm nhất.</p>
								</div>
								<div class="_2ann">
									<b>Thông tin người nhận hàng:</b>
									<ul>
										<li>Họ và tên: <span class="username">Nguyễn Văn A</span></li>
										<li>Email:<span>abc@gmail.com</span></li>
										<li>Số điện thoại:<span>091236476</span></li>
										<li>Địa chỉ nhận hàng:<span> Tầng 12A - Tòa nhà Pico Plaza, 20 Cộng Hòa, Phường 12, Quận Tân Bình, TP Hồ Chí Minh</span></li>
									</ul>
									<b>Thông tin đơn hàng:</b>
									<ul>
										<li>Mã đơn hàng:<span>#04R343</span></li>
										<li>Ngày đặt:<span> 12:00 - 14/05/2018</span></li>
										<li>Hình thức thanh toán:<span>Giao hàng nhận tiền</span></li>
									</ul>
								</div>
								<div class="orderdetail">
									<table>
										<thead>
											<tr>
												<th colspan="5">Chi tiết đơn hàng</th>
											</tr>
											<tr>
												<th>#</th>
												<th class="text-left">Sản phẩm</th>
												<th>Giá</th>
												<th>Số lượng</th>
												<th>Thành tiền</th>
											</tr>
										</thead>
										<tbody>
											<tr class="orderitem">
												<td>1</td>
												<td class="text-left">Áo thun thể thao Nam Dunlop - DAGYS8074-1-WT</td>
												<td>1.000.000</td>
												<td>1</td>
												<td>1.000.000</td>
											</tr>
											<tr class="ordermoney totalmoney">
												<td colspan="4">Thành tiền:</td>
												<td>2.000.000</td>
											</tr>
											<tr class="ordermoney">
												<td colspan="4">Giảm giá <span class="dcount">(#5345345)</span> :</td>
												<td>1.000.000</td>
											</tr>
											<tr class="ordermoney">
												<td colspan="4">Phí giao hàng:</td>
												<td>0</td>
											</tr>
											<tr class="ordermoney totalpay">
												<td colspan="4">Tổng tiền:</td>
												<td><span class="totalpaynum">2.000.000</span> </td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<a href="san-pham.php" class="pagebtn shopmore">Tiếp tục mua sắm</a>
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
	<script src="resources/vendor/owlcarousel/owl.carousel.min.js"></script>
	<script  src="resources/vendor/font-awesome-4.7.0/fontawesome.min.js"></script>	
	<script  src="resources/js/main.js"></script>	
	
</html>