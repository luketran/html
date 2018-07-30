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
            <div class="payconfirm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="orderinfo">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Họ tên:</td> 
                                            <td>Nguyễn Văn A</td>
                                        </tr>
                                        <tr>
                                            <td>Địa chỉ nhận hàng:</td> 
                                            <td>20 cộng hoà</td>
                                        </tr>
                                        <tr>
                                            <td>Số điện thoại người nhận:</td> 
                                            <td>+12346789</td>
                                        </tr>
                                        <tr>
                                            <td>Phương thức vận chuyển:</td>
                                            <td><img src="resources/images/vtpost.png" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>Phương thức thanh toán:</td>
                                            <td><img src="resources/images/vnpay.png" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>Ngày mua hàng:</td> 
                                            <td>06/06/2018</td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
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
                            <a class="confirm" href="thanh-cong.php">THANH TOÁN</a>
                        </div>
                    </div>
                </div>
            </div>
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