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
			<div class="useracc">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="accountctrl">
								<div class="useravatar">
									<div class="changeava">
										<div class="fa fa-camera"></div>
										Đổi ảnh đại diện
									</div>
								</div>
								<b>Nguyễn Văn A</b>
								<ul class="ctroption nav nav-tabs" role="tablist">
									<li>
										<a href="#tab1" class="active" id="home-tab" data-toggle="tab" href="#tab1" role="tab" aria-selected="true" aria-expanded="true"></i>Thông tin cá nhân</a> 
									</li>
									<li>
										<a href="#tab2" class="active" id="home-tab" data-toggle="tab" href="#tab2" role="tab" aria-selected="true" aria-expanded="true"></i>Lịch sử mua hàng</a>
									</li>
									<li>
										<a href="#tab3" class="active" id="home-tab" data-toggle="tab" href="#tab3" role="tab" aria-selected="true" aria-expanded="true">Đổi mật khẩu</a>
									</li>
									<li>
										<a href="">Đăng xuất</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-9">
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="tab1" role="tabpanel" aria-labelledby="ttsp-tab">
                                    <div class="updateinfo">
                                        <h4>THÔNG TIN CÁ NHÂN</h4>
                                        <h5>Bạn có thể chỉnh sửa thông tin cá nhân của mình tại đây</h5>
                                        <form>
                                            <div class="form-group col-sm-12">
                                                <label for="">Họ và tên </label>
                                                <input type="" class="form-control"  placeholder="Họ tên">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label for="">Email <sup>*</sup></label>
                                                <input type="" class="form-control"  placeholder="abc@gmail.com">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label for="">Số điện thoại </label>
                                                <input type="" class="form-control"  placeholder="Số điện thoại">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="">Tỉnh/Thành phố</label>
                                                <input type="" class="form-control"  placeholder="Tỉnh/Thành phố">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="">Quận/Huyện</label>
                                                <input type="" class="form-control"  placeholder="Quận/Huyện">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label for="">Số nhà/Đường/Phường/Xã</label>
                                                <input type="" class="form-control"  placeholder="Số nhà/Đường/Phường/Xã">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <div class="gioitinh">
                                                    <label for="">Giới tính</label>
                                                    <select  class="form-control">
                                                        <option selected>Chọn giới tính</option>
                                                        <option>Nam</option>
                                                        <option>Nữ</option>
                                                        <option>Không xác định</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <div class="ngaysinh">
                                                    <label for="">Ngày sinh </label>
                                                    <input type="" class="form-control"  placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                
                                            <button type="submit" class="pagebtn">CẬP NHẬT THÔNG TIN</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="tab2" role="tabpanel" aria-labelledby="rate-tab">
                                    <div class="buyhistory">
                                        <h4>Lịch sử mua hàng</h4>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Mã đơn hàng</th>
                                                    <th>Ngày đặt hàng</th>
                                                    <th>SL sản phẩm</th>
                                                    <th>Địa chỉ nhận hàng</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Trạng thái</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> <a href="order-success.php">#123</a></td>
                                                    <td>06/06/2018</td>
                                                    <td>03</td>
                                                    <td>20 Cộng Hoà</td>
                                                    <td>2.100.000đ</td>
                                                    <td><span class="dgx">Đã giao</span></td>
                                                </tr>
                                                <tr>
                                                    <td> <a href="order-success.php">#123</a></td>
                                                    <td>06/06/2018</td>
                                                    <td>03</td>
                                                    <td>20 Cộng Hoà</td>
                                                    <td>2.100.000đ</td>
                                                    <td><span class="dgh">Đang giao</span></td>
                                                </tr>
                                                <tr>
                                                    <td> <a href="order-success.php">#123</a></td>
                                                    <td>06/06/2018</td>
                                                    <td>03</td>
                                                    <td>20 Cộng Hoà</td>
                                                    <td>2.100.000đ</td>
                                                    <td><span class="dxl">Đang xử lý</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="tab3" role="tabpanel" aria-labelledby="rate-tab">
                                    <div class="changepass">
                                        <div class="col-sm-8 col-sm-push-2">
                                            <form action="">
                                                <b>Đổi mật khẩu</b>
                                                <p>Bạn có thể đổi mật khẩu của mình tại đây</p>
                                                <label for="">
                                                    Mật khẩu cũ
                                                    <input type="text">
                                                </label>
                                                <label for="">
                                                    Mật khẩu mới
                                                    <input type="text">
                                                </label>
                                                <label for="">
                                                    Xác nhận mật khẩu mới
                                                    <input type="text">
                                                </label>
                                                <button class="pagebtn">XÁC NHẬN</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end content -->
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