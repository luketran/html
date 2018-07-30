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
        <?php include 'header-loged.php';?>
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
            <div class="likeitems">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Tên SP</th>
                                        <th>Giá tiền</th>
                                        <th>Số lượng</th>
                                        <th>Trạng thái</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="litem">
                                        <td><img src="resources/images/itemdetail.png" alt=""></td>
                                        <td class="show-title st1" data-title1="Tên SP :">SẢN PHẨM 001</td>
                                        <td class="show-title st2" data-title2="Giá tiền :"><span>2.100.000đ</span></td>
                                        <td class="show-title st3" data-title3="Số lượng :">
                                            <div class="input-group _itemno">
                                                <a class="input-group-addon fa fa-angle-left"></a>
                                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="1">
                                                <a class="input-group-addon fa fa-angle-right"></a>
                                            </div>	
                                        </td>
                                        <td class="show-title st4" data-title4="Trạng thái :">Còn hàng</td>
                                        <td><i class="fa fa-trash-o"></i></td>
                                    </tr>
                                    <tr class="litem">
                                        <td><img src="resources/images/itemdetail.png" alt=""></td>
                                        <td class="show-title st1" data-title1="Tên SP :">SẢN PHẨM 001</td>
                                        <td class="show-title st2" data-title2="Giá tiền :"><span>2.100.000đ</span></td>
                                        <td class="show-title st3" data-title3="Số lượng :">
                                            <div class="input-group _itemno">
                                                <a class="input-group-addon fa fa-angle-left"></a>
                                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="1">
                                                <a class="input-group-addon fa fa-angle-right"></a>
                                            </div>	
                                        </td>
                                        <td class="show-title st4" data-title4="Trạng thái :">Còn hàng</td>
                                        <td><i class="fa fa-trash-o"></i></td>
                                    </tr>
                                </tbody>
                            </table>
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