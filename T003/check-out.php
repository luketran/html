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
			<div class="checkout">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="ttkh">
								<form class="puinfo">
									<div class="_1ktt logoption">
										<span class="tit">
											<b>Thông tin khách hàng</b><i class="fa fa-minus"></i>
										</span>
										<div class="logcont">
											<div class="logopts">
												<div class="opt2">
													<input type="radio" id="opt1" name="tgopt" value="#cont1" checked> <label for="opt1">Tôi muốn mua hàng không cần đăng nhập</label>
												</div>
												<div class="opt1">
													<input type="radio" id="opt2" name="tgopt" value="#cont2"> <label for="opt2">Đăng nhập</label>
												</div>
												<div class="opt3">
													<input type="radio" id="opt3" name="tgopt" value="#cont3"> <label for="opt3">Tạo tài khoản mới</label>
												</div>
											</div>
											<div class="changecont">
												<div class="cont1" id="cont1"></div>
												<div class="cont2" id="cont2">
													<div class="quicklog">
														<div class="row">
															<div class="col-sm-6">
																<input type="text" placeholder="Email">
															</div>	
															<div class="col-sm-6">
																<input type="text" placeholder="Mật khẩu">
															</div>	
														</div>
														<button class="pagebtn">ĐĂNG NHẬP</button>
													</div>
												</div>
												<div class="cont3" id="cont3">
													<div class="quickreg">
														<div class="row">
															<div class="col-sm-12">
																<input type="text" placeholder="Tên">
															</div>
															<div class="col-sm-6">
																<input type="text" placeholder="Email">
															</div>
															<div class="col-sm-6">
																<input class="col-sm-6" type="text" placeholder="Mật khẩu">
															</div>
														</div>
														<button class="pagebtn">ĐĂNG KÝ</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="_1ktt uaddress">
										<span class="tit">
											<b>Địa chỉ giao hàng</b><i class="fa fa-minus"></i>
										</span>
										<div class="uinput">
											<div class="row">
												<div class="col-sm-12">
													<div class="_1uinput">
														<input type="text" id="puname" placeholder="Tên">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="_1uinput">
														<input type="text" placeholder="Email">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="_1uinput">
														<input type="text" placeholder="Số điện thoại">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="_1uinput">
														<input type="text" placeholder="Tỉnh/Thành phố">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="_1uinput">
														<input type="text" placeholder="Quận/Huyện">
													</div>
												</div>
												<div class="col-sm-12">
													<div class="_1uinput">
														<input type="text" placeholder="Địa chỉ giao hàng">
													</div>
												</div>
												<div class="col-sm-12">
													<div class="_1uinput">
														<textarea name="" id="" cols="" rows="5" placeholder="Ghi chú đơn hàng"></textarea>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="rminfo">
														<input type="checkbox" name="" id="sinfo"><label for="sinfo">Lưu thông tin cho lần mua hàng tiếp theo</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="_1ktt paymethod">
										<span class="tit">
											<b>Phương thức thanh toán</b><i class="fa fa-minus"></i>
										</span>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="paymethod" id="payop1">
											<label class="form-check-label" for="payop1">
												COD - Thanh toán khi nhận hàng
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="paymethod" id="payop2">
											<label class="form-check-label" for="payop2">
												<img src="resources/images/checkout/vnpay.png" alt="">
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="paymethod" id="payop3">
											<label class="form-check-label" for="payop3">
												<img src="resources/images/checkout/onepay.png" alt="">
											</label>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-4">
							<form class="ttdh">
								<h4>Đơn hàng của bạn</h4>
								<div class="_1ttdh">
									<table>
										<thead>
											<tr>
												<th>Sản phẩm</th>
												<th></th>
												<th>Thành tiền</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													Áo thun thể thao dunlop
												</td>
												<td>x1</td>
												<td>400.000đ</td>
											</tr>
											<tr>
												<td>
													Áo thun thể thao dunlop
												</td>
												<td>x1</td>
												<td>400.000đ</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="_1ttdh coupon">
									<input type="text" placeholder="Mã giảm giá">
									<button class="pagebtn">Áp dụng</button>
								</div>
								<div class="_1ttdh otfee">
									<div class="_1fee">
										<span>Phí vận chuyển</span>
										<span>0đ</span>
									</div>
									<div class="_1fee">
										<span>Giảm giá <span class="dcountrate">#123123</span></span>
										<span class="ngg">50.000đ</span>
									</div>
									<h3>Tổng tiền: 450.000đ</h3>
								</div>
								<a href="order-success.php" class="pagebtn btconfirm">THANH TOÁN</a>
							</form>
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