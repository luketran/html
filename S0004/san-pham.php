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
                <div class="product">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="sidebar">
                                <div class="category">
                                    <h4>Danh mục</h4>
                                    <ul id="sidemenu" class="sidemenu">
                                        <li class="panel">
                                            <a href="index.php">Trang chủ</a>
                                            <i class="fa fa-plus" data-toggle="collapse" data-target="#cl1" data-parent="#sidemenu"></i>
                                            <ul class="collapse" id="cl1">
                                                <li><a href="">Nước hoa</a></li>
                                                <li><a href="">Dưỡng da</a></li>
                                                <li><a href="">Dưỡng da</a></li>
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
                                            <ul class="collapse in" id="cl3">
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
                                <div class="filteroption">
                                    <ul id="sideop" class="sidemenu">
                                        <li class="panel">
                                            <h4>Kích thước
                                                <i class="fa fa-plus" data-toggle="collapse" data-target="#op1" data-parent="#sideop"></i>
                                            </h4>
                                            <ul class="collapse in" id="op1">
                                                <li>
                                                    <label class="cuscheck" for="c1">
                                                        <input type="checkbox" id="c1" name="" value="">XS
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cuscheck" for="c2">
                                                        <input type="checkbox" id="c2" name="" value="">S
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cuscheck" for="c3">
                                                        <input type="checkbox" id="c3" name="" value="">M
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cuscheck" for="c4">
                                                        <input type="checkbox" id="c4" name="" value="">L
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cuscheck" for="c5">
                                                        <input type="checkbox" id="c5" name="" value="">XL
                                                    </label>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="panel">
                                            <h4>Màu sắc
                                                <i class="fa fa-plus" data-toggle="collapse" data-target="#op2" data-parent="#sideop"></i>
                                            </h4>
                                            <ul class="collapse" id="op2">
                                                <li>
                                                    <label class="cuscheck" for="m1">
                                                        <input type="checkbox" id="m1" name="" value="">XS
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cuscheck" for="m2">
                                                        <input type="checkbox" id="m2" name="" value="">S
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cuscheck" for="m3">
                                                        <input type="checkbox" id="m3" name="" value="">M
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cuscheck" for="m4">
                                                        <input type="checkbox" id="m4" name="" value="">L
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cuscheck" for="m5">
                                                        <input type="checkbox" id="m5" name="" value="">XL
                                                    </label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="pagefilter">
                                <nav aria-label="Page navigation">
                                    <span>Hiển thị từ 1 đến 9 của 25</span>
                                    <ul class="pagination">
                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </nav>
                                <select name="">
                                    <option value="">Sắp xếp từ A-Z</option>
                                    <option value="">Giá thấp tới cao</option>
                                    <option value="">Giá cao tới thấp</option>
                                    <option value="">Phổ biến</option>
                                </select>
                            </div>
                            <div class="listitem">
                                <div class="item">
                                    <a href="chi-tiet-sp.php">
                                        <img src="resources/images/content/item.png" alt="">
                                        <div class="iteminfo">
                                            <h4>Đầm xòe Amun voan lưới phối ren</h4>
                                            <div class="itemprice">
                                                <span class="newp">100.000 đ</span>
                                                <span class="oldp">120.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="shortact">
                                            <i class="fa fa-shopping-cart"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </a> 
                                </div>
                                <div class="item">
                                    <a href="chi-tiet-sp.php">
                                        <img src="resources/images/content/item.png" alt="">
                                        <div class="iteminfo">
                                            <h4>Đầm xòe Amun voan lưới phối ren</h4>
                                            <div class="itemprice">
                                                <span class="newp">100.000 đ</span>
                                                <span class="oldp">120.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="shortact">
                                            <i class="fa fa-shopping-cart"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </a> 
                                </div>
                                <div class="item">
                                    <a href="chi-tiet-sp.php">
                                        <img src="resources/images/content/item.png" alt="">
                                        <div class="iteminfo">
                                            <h4>Đầm xòe Amun voan lưới phối ren</h4>
                                            <div class="itemprice">
                                                <span class="newp">100.000 đ</span>
                                                <span class="oldp">120.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="shortact">
                                            <i class="fa fa-shopping-cart"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </a> 
                                </div>
                                <div class="item">
                                    <a href="chi-tiet-sp.php">
                                        <img src="resources/images/content/item.png" alt="">
                                        <div class="iteminfo">
                                            <h4>Đầm xòe Amun voan lưới phối ren</h4>
                                            <div class="itemprice">
                                                <span class="newp">100.000 đ</span>
                                                <span class="oldp">120.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="shortact">
                                            <i class="fa fa-shopping-cart"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </a> 
                                </div>
                                <div class="item">
                                    <a href="chi-tiet-sp.php">
                                        <img src="resources/images/content/item.png" alt="">
                                        <div class="iteminfo">
                                            <h4>Đầm xòe Amun voan lưới phối ren</h4>
                                            <div class="itemprice">
                                                <span class="newp">100.000 đ</span>
                                                <span class="oldp">120.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="shortact">
                                            <i class="fa fa-shopping-cart"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </a> 
                                </div>
                                <div class="item">
                                    <a href="chi-tiet-sp.php">
                                        <img src="resources/images/content/item.png" alt="">
                                        <div class="iteminfo">
                                            <h4>Đầm xòe Amun voan lưới phối ren</h4>
                                            <div class="itemprice">
                                                <span class="newp">100.000 đ</span>
                                                <span class="oldp">120.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="shortact">
                                            <i class="fa fa-shopping-cart"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </a> 
                                </div>
                                <div class="item">
                                    <a href="chi-tiet-sp.php">
                                        <img src="resources/images/content/item.png" alt="">
                                        <div class="iteminfo">
                                            <h4>Đầm xòe Amun voan lưới phối ren</h4>
                                            <div class="itemprice">
                                                <span class="newp">100.000 đ</span>
                                                <span class="oldp">120.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="shortact">
                                            <i class="fa fa-shopping-cart"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </a> 
                                </div>
                                <div class="item">
                                    <a href="chi-tiet-sp.php">
                                        <img src="resources/images/content/item.png" alt="">
                                        <div class="iteminfo">
                                            <h4>Đầm xòe Amun voan lưới phối ren</h4>
                                            <div class="itemprice">
                                                <span class="newp">100.000 đ</span>
                                                <span class="oldp">120.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="shortact">
                                            <i class="fa fa-shopping-cart"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </a> 
                                </div>
                                <div class="item">
                                    <a href="chi-tiet-sp.php">
                                        <img src="resources/images/content/item.png" alt="">
                                        <div class="iteminfo">
                                            <h4>Đầm xòe Amun voan lưới phối ren</h4>
                                            <div class="itemprice">
                                                <span class="newp">100.000 đ</span>
                                                <span class="oldp">120.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="shortact">
                                            <i class="fa fa-shopping-cart"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </a> 
                                </div>
                                <div class="item">
                                    <a href="chi-tiet-sp.php">
                                        <img src="resources/images/content/item.png" alt="">
                                        <div class="iteminfo">
                                            <h4>Đầm xòe Amun voan lưới phối ren</h4>
                                            <div class="itemprice">
                                                <span class="newp">100.000 đ</span>
                                                <span class="oldp">120.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="shortact">
                                            <i class="fa fa-shopping-cart"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </a> 
                                </div>
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
	
</html>