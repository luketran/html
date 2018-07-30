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
        <link rel="stylesheet" href="resources/vendor/slick/slick.css">
		<link rel="stylesheet" href="resources/vendor/fancybox/jquery.fancybox.min.css">
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
            <div class="products">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="lmenu ltop" >
                                <h4>Danh Mục</h4>
                                <ul id="sidemenu">
                                    <li class="panel">
                                        <a href="index.php">Trang chủ</a>
                                        <i class="fa fa-plus" data-toggle="collapse" data-target="#cl1" data-parent="#sidemenu"></i>
                                        <ul class="collapse" id="cl1">
                                            <li><a href="">Nước hoa</a></li>
                                            <li><a href="">Dưỡng da</a></li>
                                            <li class="active"><a href="">Dưỡng da</a></li>
                                        </ul>
                                    </li>
                                    <li class="panel">
                                        <a href="">Giới thiệu</a>
                                        <i class="fa fa-plus" data-toggle="collapse" data-target="#cl2" data-parent="#sidemenu"></i>
                                        <ul class="collapse" id="cl2">
                                            <li><a href="">Nước hoa</a></li>
                                            <li><a href="">Dưỡng da</a></li>
                                            <li><a href="">Dưỡng da</a></li>
                                        </ul>
                                    </li>
                                    <li class="panel">
                                        <a href="">Sản phẩm</a>
                                        <i class="fa fa-plus" data-toggle="collapse" data-target="#cl3" data-parent="#sidemenu"></i>
                                        <ul class="collapse" id="cl3">
                                            <li><a href="">Nước hoa</a></li>
                                            <li><a href="">Dưỡng da</a></li>
                                        </ul>
                                    </li>
                                    <li class="panel">
                                        <a href="">Tin tức</a>
                                    </li>
                                    <li class="panel">
                                        <a href="">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="lmenu lbot">
                                <h4>Tất cả sản phẩm</h4>
                                <form action="">
                                    <div class="lsearch">
                                        <input type="text" placeholder="Tìm theo tên">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <div class="loption">
                                        <h5>LOẠI</h5>
                                        <ul>
                                            <li>
                                                <label class="cuscheck" for="c1">
                                                    <input type="checkbox" id="c1" name="" value="">Kem da
                                                </label>
                                            </li>
                                            <li>
                                                <label class="cuscheck" for="c2">
                                                    <input type="checkbox" id="c2" name="" value="">Kem da
                                                </label>
                                            </li>
                                            <li>
                                                <label class="cuscheck" for="c3">
                                                    <input type="checkbox" id="c3" name="" value="">Kem da
                                                </label>
                                            </li>
                                            <li>
                                                <label class="cuscheck" for="c4">
                                                    <input type="checkbox" id="c4" name="" value="">Kem da
                                                </label>
                                            </li>
                                            <li>
                                                <label class="cuscheck" for="c5">
                                                    <input type="checkbox" id="c5" name="" value="">Kem da
                                                </label>
                                            </li>
                                        </ul>
                                        <h5>THƯƠNG HIỆU</h5>
                                        <ul>
                                            <li>
                                                <label class="cuscheck" for="th1">
                                                    <input type="checkbox" id="th1" name="" value="">3CE
                                                </label>
                                            </li>
                                            <li>
                                                <label class="cuscheck" for="th2">
                                                    <input type="checkbox" id="th2" name="" value="">AHA
                                                </label>
                                            </li>
                                            <li>
                                                <label class="cuscheck" for="th3">
                                                    <input type="checkbox" id="th3" name="" value="">ALOHA
                                                </label>
                                            </li>
                                            <li>
                                                <label class="cuscheck" for="th4">
                                                    <input type="checkbox" id="th4" name="" value="">AMSAMA
                                                </label>
                                            </li>
                                            <li>
                                                <label class="cuscheck" for="th5">
                                                    <input type="checkbox" id="th5" name="" value="">ABC
                                                </label>
                                            </li>
                                        </ul>
                                        <h5>GIÁ SẢN PHẨM</h5>
                                        <ul>
                                            <li>
                                                <label class="cuscheck" for="g1">
                                                    <input type="checkbox" id="g1" name="" value="">Giá dưới 100.000đ
                                                </label>
                                            </li>
                                            <li>
                                                <label class="cuscheck" for="g2">
                                                    <input type="checkbox" id="g2" name="" value="">100.000đ-200.000đ
                                                </label>
                                            </li>
                                            <li>
                                                <label class="cuscheck" for="g3">
                                                    <input type="checkbox" id="g3" name="" value="">200.000đ-300.000đ
                                                </label>
                                            </li>
                                            <li>
                                                <label class="cuscheck" for="g4">
                                                    <input type="checkbox" id="g4" name="" value="">300.000đ-500.000đ
                                                </label>
                                            </li>
                                            <li>
                                                <label class="cuscheck" for="g5">
                                                    <input type="checkbox" id="g5" name="" value="">500.000đ-1000.000đ
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="filter">
                                <div class="filterview">
                                    <ul class="nav nav-tabs" id="productviewfilter" role="tablist">
                                        <li class="nav-item active">
                                            <a class="nav-link fa fa-th active"  data-toggle="tab" href="#view1" role="tab" aria-controls="" aria-selected="true" aria-expanded="true"></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fa fa-th-list"  data-toggle="tab" href="#view2" role="tab" aria-controls="" aria-selected="false" aria-expanded="false"></a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <h5>Hiển thị 9 kết quả</h5>
                                <div class="filtoption">
                                    <span>Sắp xếp:</span>
                                    <select name="" >
                                        <option value="">Mới nhất</option>
                                        <option value="">Giá thấp tới cao</option>
                                        <option value="">Giá cao tới thấp</option>
                                        <option value="">Xem nhiều nhất</option>
                                    </select>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="view1" role="tabpanel">
                                    <div class="item-list">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="item">
                                                    <div class="itemimg">
                                                        <a href="chi-tiet-sp.php"><img src="resources/images/pro3.png" alt=""></a>
                                                        <ul class="action">
                                                            <li class="active"><a href="" class="fa fa-heart"></a></li>
                                                            <li><a data-toggle="modal" data-target="#modalqview" href="" class="fa fa-shopping-bag"></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="iteminfo">
                                                        <a href=""><h4>Sản phẩm 001</h4></a> 
                                                        <div class="star">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="itemprice">
                                                            <span class="price">2.100.000đ</span>
                                                            <span class="oldprice">2.500.000đ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="item">
                                                    <div class="itemimg">
                                                        <a href="chi-tiet-sp.php"><img src="resources/images/pro3.png" alt=""></a>
                                                        <ul class="action">
                                                            <li class="active"><a href="" class="fa fa-heart"></a></li>
                                                            <li><a data-toggle="modal" data-target="#modalqview" href="" class="fa fa-shopping-bag"></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="iteminfo">
                                                        <a href=""><h4>Sản phẩm 001</h4></a> 
                                                        <div class="star">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="itemprice">
                                                            <span class="price">2.100.000đ</span>
                                                            <span class="oldprice">2.500.000đ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="item">
                                                    <div class="itemimg">
                                                        <a href="chi-tiet-sp.php"><img src="resources/images/pro3.png" alt=""></a>
                                                        <ul class="action">
                                                            <li class="active"><a href="" class="fa fa-heart"></a></li>
                                                            <li><a data-toggle="modal" data-target="#modalqview" href="" class="fa fa-shopping-bag"></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="iteminfo">
                                                        <a href=""><h4>Sản phẩm 001</h4></a> 
                                                        <div class="star">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="itemprice">
                                                            <span class="price">2.100.000đ</span>
                                                            <span class="oldprice">2.500.000đ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="item">
                                                    <div class="itemimg">
                                                        <a href="chi-tiet-sp.php"><img src="resources/images/pro3.png" alt=""></a>
                                                        <ul class="action">
                                                            <li class="active"><a href="" class="fa fa-heart"></a></li>
                                                            <li><a data-toggle="modal" data-target="#modalqview" href="" class="fa fa-shopping-bag"></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="iteminfo">
                                                        <a href=""><h4>Sản phẩm 001</h4></a> 
                                                        <div class="star">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="itemprice">
                                                            <span class="price">2.100.000đ</span>
                                                            <span class="oldprice">2.500.000đ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="item">
                                                    <div class="itemimg">
                                                        <a href="chi-tiet-sp.php"><img src="resources/images/pro3.png" alt=""></a>
                                                        <ul class="action">
                                                            <li class="active"><a href="" class="fa fa-heart"></a></li>
                                                            <li><a data-toggle="modal" data-target="#modalqview" href="" class="fa fa-shopping-bag"></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="iteminfo">
                                                        <a href=""><h4>Sản phẩm 001</h4></a> 
                                                        <div class="star">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="itemprice">
                                                            <span class="price">2.100.000đ</span>
                                                            <span class="oldprice">2.500.000đ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                                <div class="tab-pane fade" id="view2" role="tabpanel">
                                    <div class="view2">
                                        <div class="item-list">
                                            <div class="item">
                                                <div class="itemimg col-sm-4 col-xs-12">
                                                    <a href=""><img src="resources/images/pro3.png" alt=""></a>
                                                </div>
                                                <div class="iteminfo col-sm-8 col-xs-12">
                                                    <a href=""><h4>Sản phẩm 001</h4></a> 
                                                    <div class="star">
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="itemprice">
                                                        <span class="price">2.100.000đ</span>
                                                        <span class="oldprice">2.500.000đ</span>
                                                    </div>
                                                    <p>Minus eleifend fermentum explicabo tortor magnis venenatis hymenaeos! Vitae magna, pariatur congue quisquam, at tempore ultricies? Vestibulum congue magna ornare lacus. Reiciendis? Euismod dignissim ante, vulputate.</p>
                                                    <a href="" class="btn">
                                                        <i class="fa fa-shopping-bag"></i> LƯU VÀO GIỎ HÀNG
                                                    </a>
                                                    <a href="" class="btn">
                                                        <i class="fa fa-heart"></i> DANH SÁCH YÊU THÍCH
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="itemimg col-sm-4 col-xs-12">
                                                    <a href=""><img src="resources/images/pro3.png" alt=""></a>
                                                </div>
                                                <div class="iteminfo col-sm-8 col-xs-12">
                                                    <a href=""><h4>Sản phẩm 001</h4></a> 
                                                    <div class="star">
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="itemprice">
                                                        <span class="price">2.100.000đ</span>
                                                        <span class="oldprice">2.500.000đ</span>
                                                    </div>
                                                    <p>Minus eleifend fermentum explicabo tortor magnis venenatis hymenaeos! Vitae magna, pariatur congue quisquam, at tempore ultricies? Vestibulum congue magna ornare lacus. Reiciendis? Euismod dignissim ante, vulputate.</p>
                                                    <a href="" class="btn">
                                                        <i class="fa fa-shopping-bag"></i> LƯU VÀO GIỎ HÀNG
                                                    </a>
                                                    <a href="" class="btn">
                                                        <i class="fa fa-heart"></i> DANH SÁCH YÊU THÍCH
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="itemimg col-sm-4 col-xs-12">
                                                    <a href=""><img src="resources/images/pro3.png" alt=""></a>
                                                </div>
                                                <div class="iteminfo col-sm-8 col-xs-12">
                                                    <a href=""><h4>Sản phẩm 001</h4></a> 
                                                    <div class="star">
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="itemprice">
                                                        <span class="price">2.100.000đ</span>
                                                        <span class="oldprice">2.500.000đ</span>
                                                    </div>
                                                    <p>Minus eleifend fermentum explicabo tortor magnis venenatis hymenaeos! Vitae magna, pariatur congue quisquam, at tempore ultricies? Vestibulum congue magna ornare lacus. Reiciendis? Euismod dignissim ante, vulputate.</p>
                                                    <a href="" class="btn">
                                                        <i class="fa fa-shopping-bag"></i> LƯU VÀO GIỎ HÀNG
                                                    </a>
                                                    <a href="" class="btn">
                                                        <i class="fa fa-heart"></i> DANH SÁCH YÊU THÍCH
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <ul class="pagination">
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">9</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php';?>
    </section>


      
      <script  src="resources/vendor/jquery/jquery-3.3.1.js"></script>
      <script src="resources/vendor/bootstrap/bootstrap.min.js"></script>
      <script src="resources/vendor/owlcarousel/owl.carousel.min.js"></script>
      <script src="resources/vendor/slick/slick.min.js"></script>
      <script src="resources/vendor/fancybox/jquery.fancybox.min.js"></script>
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
      <script>
          $('.lmenu.ltop a').on('click', function(e){
              e.preventDefault();
          })
      </script>
       <script>
            $(document).ready(function() {
              // slick carousel
                $('.thumblist').slick({
                    dots: false,
                    vertical: true,
                    nextArrow: '<i class="fa fa-angle-double-down"></i>',
                    prevArrow: '<i class="fa fa-angle-double-up"></i>',
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    centerMode: true,
                      focusOnSelect: true,
                    verticalSwiping: true,
                    asNavFor: '.big-photo'
                });
                $('.big-photo').slick({
                    dots: false,
                    arrows: false,
                    mobileFirst:true,
                    fade:true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    verticalSwiping: false,
                    asNavFor: '.thumblist'
                });
                $('#modalqview').on('shown.bs.modal', function(){
                    $('#modalqview').find('.slick-slider').slick('setPosition',0);
                })
            });
        </script>
  	</body>
</html>