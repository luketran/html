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
            <form class="payment">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="logoption">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="logoption" id="lopop1" checked>
                                    <label class="form-check-label" for="lopop1">
                                        Tôi muốn thanh toán không cần đăng nhập
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="logoption" id="lopop2">
                                    <label class="form-check-label" for="lopop2">
                                        Đăng nhập tài khoản
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="paymentinfo">
                            <div class="col-md-6">
                                <div class="uaddress">
                                    <h4>ĐỊA CHỈ NHẬN HÀNG</h4>
                                    <div class="oldaddress">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="otadd" >
                                            <label class="form-check-label" for="otadd">
                                                Địa chỉ nhận hàng khác
                                            </label>
                                        </div>
                                    </div>
                                    <div class="uinput">
                                        <div class="_1uinput">
                                            <label for="puname">Họ và tên:</label>
                                            <input type="text" id="puname">
                                        </div>
                                        <div class="_1uinput">
                                            <label for="">Số điện thoại:</label>
                                            <input type="text">
                                        </div>
                                        <div class="_1uinput">
                                            <label for="">Tỉnh, Thành Phố:</label>
                                            <input type="text">
                                        </div>
                                        <div class="_1uinput">
                                            <label for="">Quận, Huyện:</label>
                                            <input type="text">
                                        </div>
                                        <div class="_1uinput">
                                            <label for="">Số nhà/Đường/Phường/Xã:</label>
                                            <input type="text">
                                        </div>
                                        <div class="_1uinput">
                                            <label for="">Email:</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="transfer">
                                    <h4>PHƯƠNG THỨC VẬN CHUYỂN</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="transfer" id="tranop1">
                                        <label class="form-check-label" for="tranop1">
                                            <span>Nội bộ vận chuyển</span>
                                            <span>2-3 ngày</span>
                                            <span>30.000đ</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="transfer" id="tranop2">
                                        <label class="form-check-label" for="tranop2">
                                            <span><img src="resources/images/ghtk.png" alt=""></span>
                                            <span>2-3 ngày</span>
                                            <span>30.000đ</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="transfer" id="tranop3">
                                        <label class="form-check-label" for="tranop3">
                                            <span><img src="resources/images/vtpost.png" alt=""></span>
                                            <span>2-3 ngày</span>
                                            <span>30.000đ</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="transfer" id="tranop4">
                                        <label class="form-check-label" for="tranop4">
                                            <span><img src="resources/images/247post.png" alt=""></span>
                                            <span>2-3 ngày</span>
                                            <span>30.000đ</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="transfer" id="tranop5">
                                        <label class="form-check-label" for="tranop5">
                                            <span><img src="resources/images/ghn.png" alt=""></span>
                                            <span>2-3 ngày</span>
                                            <span>30.000đ</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="paymethod">
                                    <h4>PHƯƠNG THỨC THANH TOÁN</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymethod" id="payop1">
                                        <label class="form-check-label" for="payop1">
                                            COD - Thanh toán khi nhận hàng
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymethod" id="payop2">
                                        <label class="form-check-label" for="payop2">
                                            <img src="resources/images/vnpay.png" alt="">
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymethod" id="payop3">
                                        <label class="form-check-label" for="payop3">
                                            <img src="resources/images/qrcode.png" alt="">QR CODE
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="coupon">
                                    <h4>Nhập mã để nhận ưu đãi</h4>
                                    <div class="cpform">
                                        <input type="text">
                                        <button>ÁP DỤNG</button>
                                    </div>
                                    <h4>Ghi chú đơn hàng</h4>
                                    <textarea name="" cols="" rows="5"></textarea>
                                </div>
                                <div class="yourcart">
                                    <h4>ĐƠN HÀNG CỦA BẠN</h4>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th>SẢN PHẨM</th>
                                            <th>THÀNH GIÁ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="resources/images/inshopitem.png" alt=""><span>x1</span></td>
                                                <td>2.100.000đ</td>
                                            </tr>
                                            <tr>
                                                <td><img src="resources/images/inshopitem.png" alt=""><span>x1</span></td>
                                                <td>2.100.000đ</td>
                                            </tr>
                                            <tr class="spbonus">
                                                <td>SẢN PHẨM TẶNG KÈM</td>
                                                <td>
                                                    <span>x1</span>
                                                    <img src="resources/images/inshopitem.png" alt="">
                                                </td>
                                            </tr>
                                            <tr>
                                            <td>GIÁ ĐÃ GIẢM<span class="dr">-10%</span>
                                            </td>
                                            <td>2.000.000đ</td>
                                            </tr>
                                            <tr>
                                                <td>TỔNG TIỀN</td>
                                                <td>2.000.000đ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                
                                </div>
                                <a class="confirm" href="xac-nhan.php">XÁC NHẬN HOÁ ĐƠN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <!-- end content -->
        <?php include 'header.php';?>
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