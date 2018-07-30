<!DOCTYPE html>
<html lang="en">
  	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title></title>
		<!-- Bootstrap -->
        <link rel="stylesheet" href="resources/vendor/bootstrap/bootstrap.min.css">
         <!-- slick and fancybox css -->
        <link rel="stylesheet" href="resources/vendor/slick/slick.css">
		<link rel="stylesheet" href="resources/vendor/fancybox/jquery.fancybox.min.css">
        <!-- slick and fancybox css -->
		<link rel="stylesheet" href="resources/vendor/owlcarousel/owl.carousel.min.css">
		<link rel="stylesheet" href="resources/vendor/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="resources/css/style.css" rel="stylesheet">
  	</head>
  	<body>
	<section class="main">
        <?php  include("header.php"); ?>
		<!-- end header -->
		<section class="wrapper" >
            <?php  include("page-local.php"); ?>
            <div class="product">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="productsearch">
                                <h4>TÌM KIẾM SẢN PHẨM</h4>
                                <div class="searchinput">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Nhập tên sản phẩm">
                                        <span class="input-group-btn">
                                            <button class="btn pagebtn" type="button"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidenav">
							   	<h4>DANH MỤC BÀI VIẾT</h4>
                                <ul id="catlist">
                                    <li class="panel">
                                        <a href="">Bài viết mới nhất</a>
                                        <i class="fa fa-angle-down" data-toggle="collapse" data-target="#cl1" data-parent="#catlist"></i>
                                        <ul class="collapse" id="cl1">
                                            <li><a href="">Nước hoa</a></li>
                                            <li><a href="">Dưỡng da</a></li>
                                            <li><a href="">Dưỡng da</a></li>
                                        </ul>
                                    </li>
                                    <li class="panel">
                                        <a href="">Bài viết đọc nhiếu nhất</a>
                                        <i class="fa fa-angle-down" data-toggle="collapse" data-target="#cl2" data-parent="#catlist"></i>
                                        <ul class="collapse" id="cl2">
                                            <li><a href="">Bài viết mới nhất</a></li>
                                            <li><a href="">Dưỡng da</a></li>
                                            <li><a href="">Dưỡng da</a></li>
                                        </ul>
                                    </li>
                                    <li class="panel">
                                        <a href="">Sản phẩm</a>
                                        <i class="fa fa-angle-down" data-toggle="collapse" data-target="#cl3" data-parent="#catlist"></i>
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
                           <div class="productfilter">
								<h4>Bộ lọc</h4>
								<form class="loption">
									<div class="_1opt">
										<b>Giá</b>
										<ul>
											<li>
												<label class="cuscheck" for="g1">
													<input type="checkbox" id="g1" name="" value=""><span>50.000đ - 500.000đ</span> 
												</label>
											</li>
											<li>
												<label class="cuscheck" for="g2">
													<input type="checkbox" id="g2" name="" value=""><span>50.000đ - 500.000đ</span>
												</label>
											</li>
											<li>
												<label class="cuscheck" for="g3">
													<input type="checkbox" id="g3" name="" value=""><span>50.000đ - 500.000đ</span>
												</label>
											</li>
											<li>
												<label class="cuscheck" for="g4">
													<input type="checkbox" id="g4" name="" value=""><span>50.000đ - 500.000đ</span>
												</label>
											</li>
											<li>
												<label class="cuscheck" for="g5">
													<input type="checkbox" id="g5" name="" value=""><span>50.0000đ - 500.00000đ</span> 
												</label>
											</li>
										</ul>
									</div>
									<div class="_1opt">
										<b>Thương hiệu</b>
										<ul>
											<li>
												<label class="cuscheck" for="th1">
													<input type="checkbox" id="th1" name="" value=""><span>BT Fashion</span> 
												</label>
											</li>
											<li>
												<label class="cuscheck" for="th2">
													<input type="checkbox" id="th2" name="" value=""><span>BT Fashion2</span> 
												</label>
											</li>
											<li>
												<label class="cuscheck" for="th3">
													<input type="checkbox" id="th3" name="" value=""><span>BT Fashion3</span> 
												</label>
											</li>
											<li>
												<label class="cuscheck" for="th4">
													<input type="checkbox" id="th4" name="" value=""><span>BT Fashion4</span> 
												</label>
											</li>
											<li>
												<label class="cuscheck" for="th5">
													<input type="checkbox" id="th5" name="" value=""><span>BT Fashion5</span> 
												</label>
											</li>
										</ul>
									</div>
									<div class="_1opt">
										<b>Màu sắc</b>
										<ul>
											<li>
												<label class="cuscheck" for="m1">
													<input type="checkbox" id="m1" name="" value=""><span>Trắng</span>
												</label>
											</li>
											<li>
												<label class="cuscheck" for="m2">
													<input type="checkbox" id="m2" name="" value=""><span>Đen</span>
													
												</label>
											</li>
											<li>
												<label class="cuscheck" for="m3">
													<input type="checkbox" id="m3" name="" value=""><span>Vàng</span>
													
												</label>
											</li>
											<li>
												<label class="cuscheck" for="m4">
													<input type="checkbox" id="m4" name="" value=""><span>Tím</span>
													
												</label>
											</li>
											<li>
												<label class="cuscheck" for="m5">
													<input type="checkbox" id="m5" name="" value=""><span>Xanh lá</span>
													
												</label>
											</li>
										</ul>
									</div>
								</form>
							</div>
                            <div class="ads">
                                <a href=""><img src="resources/images/content/adsimg.png" alt=""></a>
                           </div>
                        </div>
                        <div class="col-md-9">
                            <div class="productnotfound">
                                <h1>Xin lỗi sản phẩm của bạn không đc tìm thấy</h1>
                            </div>
                            <div class="filter">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-6">
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
                                    </div>
                                    
                                    <div class="col-sm-4 col-xs-6 col-sm-push-4">
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
                                    <div class="col-sm-4 col-xs-12 col-sm-pull-4">
                                        <h5>Hiển thị 9 kết quả</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="view1" role="tabpanel">
                                    <div class="item-list">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="flower">
                                                    <div class="itemimg">
                                                        <a href="chi-tiet-sp.php" ><img src="resources/images/content/itemimg.png" alt=""></a>
                                                    </div>
                                                    <div class="itemdetail">
                                                        <div class="star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="chi-tiet-sp.php" class="ittitle"><b>HOA GIỎ CHÚC MỪNG: CHUYỂN TRỌN YÊU THƯƠNG</b></a>
                                                        <div class="itemprice">
                                                            <p class="oldprice">300.000d</p>
                                                            <p class="price">300.000d</p>
                                                        </div>
                                                        <div class="itemaction">
                                                            <a class="pagebtn addtocart fa fa-shopping-basket" data-toggle="modal" data-target="#modalqview"></a>
                                                            <a href="" id="addtowl" class="fa fa-heart addtowl pagebtn"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="flower">
                                                    <div class="itemimg">
                                                        <a href="chi-tiet-sp.php" ><img src="resources/images/content/itemimg.png" alt=""></a>
                                                    </div>
                                                    <div class="itemdetail">
                                                        <div class="star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="chi-tiet-sp.php" class="ittitle"><b>HOA GIỎ CHÚC MỪNG: CHUYỂN TRỌN YÊU THƯƠNG</b></a>
                                                        <div class="itemprice">
                                                            <p class="oldprice">300.000d</p>
                                                            <p class="price">300.000d</p>
                                                        </div>
                                                        <div class="itemaction">
                                                            <a class="pagebtn addtocart fa fa-shopping-basket" data-toggle="modal" data-target="#modalqview"></a>
                                                            <a href="" id="addtowl" class="fa fa-heart addtowl pagebtn"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="flower">
                                                    <div class="itemimg">
                                                        <a href="chi-tiet-sp.php" ><img src="resources/images/content/itemimg.png" alt=""></a>
                                                    </div>
                                                    <div class="itemdetail">
                                                        <div class="star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="chi-tiet-sp.php" class="ittitle"><b>HOA GIỎ CHÚC MỪNG: CHUYỂN TRỌN YÊU THƯƠNG</b></a>
                                                        <div class="itemprice">
                                                            <p class="oldprice">300.000d</p>
                                                            <p class="price">300.000d</p>
                                                        </div>
                                                        <div class="itemaction">
                                                            <a class="pagebtn addtocart fa fa-shopping-basket" data-toggle="modal" data-target="#modalqview"></a>
                                                            <a href="" id="addtowl" class="fa fa-heart addtowl pagebtn"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="flower">
                                                    <div class="itemimg">
                                                        <a href="chi-tiet-sp.php" ><img src="resources/images/content/itemimg.png" alt=""></a>
                                                    </div>
                                                    <div class="itemdetail">
                                                        <div class="star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="chi-tiet-sp.php" class="ittitle"><b>HOA GIỎ CHÚC MỪNG: CHUYỂN TRỌN YÊU THƯƠNG</b></a>
                                                        <div class="itemprice">
                                                            <p class="oldprice">300.000d</p>
                                                            <p class="price">300.000d</p>
                                                        </div>
                                                        <div class="itemaction">
                                                            <a class="pagebtn addtocart fa fa-shopping-basket" data-toggle="modal" data-target="#modalqview"></a>
                                                            <a href="" id="addtowl" class="fa fa-heart addtowl pagebtn"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="flower">
                                                    <div class="itemimg">
                                                        <a href="chi-tiet-sp.php" ><img src="resources/images/content/itemimg.png" alt=""></a>
                                                    </div>
                                                    <div class="itemdetail">
                                                        <div class="star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="chi-tiet-sp.php" class="ittitle"><b>HOA GIỎ CHÚC MỪNG: CHUYỂN TRỌN YÊU THƯƠNG</b></a>
                                                        <div class="itemprice">
                                                            <p class="oldprice">300.000d</p>
                                                            <p class="price">300.000d</p>
                                                        </div>
                                                        <div class="itemaction">
                                                            <a class="pagebtn addtocart fa fa-shopping-basket" data-toggle="modal" data-target="#modalqview"></a>
                                                            <a href="" id="addtowl" class="fa fa-heart addtowl pagebtn"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="flower">
                                                    <div class="itemimg">
                                                        <a href="chi-tiet-sp.php" ><img src="resources/images/content/itemimg.png" alt=""></a>
                                                    </div>
                                                    <div class="itemdetail">
                                                        <div class="star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="chi-tiet-sp.php" class="ittitle"><b>HOA GIỎ CHÚC MỪNG: CHUYỂN TRỌN YÊU THƯƠNG</b></a>
                                                        <div class="itemprice">
                                                            <p class="oldprice">300.000d</p>
                                                            <p class="price">300.000d</p>
                                                        </div>
                                                        <div class="itemaction">
                                                            <a class="pagebtn addtocart fa fa-shopping-basket" data-toggle="modal" data-target="#modalqview"></a>
                                                            <a href="" id="addtowl" class="fa fa-heart addtowl pagebtn"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="flower">
                                                    <div class="itemimg">
                                                        <a href="chi-tiet-sp.php" ><img src="resources/images/content/itemimg.png" alt=""></a>
                                                    </div>
                                                    <div class="itemdetail">
                                                        <div class="star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="chi-tiet-sp.php" class="ittitle"><b>HOA GIỎ CHÚC MỪNG: CHUYỂN TRỌN YÊU THƯƠNG</b></a>
                                                        <div class="itemprice">
                                                            <p class="oldprice">300.000d</p>
                                                            <p class="price">300.000d</p>
                                                        </div>
                                                        <div class="itemaction">
                                                            <a class="pagebtn addtocart fa fa-shopping-basket" data-toggle="modal" data-target="#modalqview"></a>
                                                            <a href="" id="addtowl" class="fa fa-heart addtowl pagebtn"></a>
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
                                            <div class="flower">
                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="itemimg">
                                                            <a href=""><img src="resources/images/content/itemimg2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <div class="itemdetail">
                                                            <div class="itemprice">
                                                                <span class="price">2.100.000đ</span>
                                                                <span class="oldprice">2.500.000đ</span>
                                                            </div>
                                                            <a class="ittitle" href=""><b>Sản phẩm 001</b></a> 
                                                            <div class="star">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <p>Minus eleifend fermentum explicabo tortor magnis venenatis hymenaeos! Vitae magna, pariatur congue quisquam, at tempore ultricies? Vestibulum congue magna ornare lacus. Reiciendis? Euismod dignissim ante, vulputate.</p>
                                                            <div class="itemaction">
                                                                <a class="pagebtn addtocart fa fa-shopping-basket" data-toggle="modal" data-target="#modalqview"></a>
                                                                <a href="" id="addtowl" class="fa fa-heart addtowl pagebtn"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flower">
                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="itemimg">
                                                            <a href=""><img src="resources/images/content/itemimg2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <div class="itemdetail">
                                                            <div class="itemprice">
                                                                <span class="price">2.100.000đ</span>
                                                                <span class="oldprice">2.500.000đ</span>
                                                            </div>
                                                            <a class="ittitle" href=""><b>Sản phẩm 001</b></a> 
                                                            <div class="star">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <p>Minus eleifend fermentum explicabo tortor magnis venenatis hymenaeos! Vitae magna, pariatur congue quisquam, at tempore ultricies? Vestibulum congue magna ornare lacus. Reiciendis? Euismod dignissim ante, vulputate.</p>
                                                            <div class="itemaction">
                                                                <a class="pagebtn addtocart fa fa-shopping-basket" data-toggle="modal" data-target="#modalqview"></a>
                                                                <a href="" id="addtowl" class="fa fa-heart addtowl pagebtn"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flower">
                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="itemimg">
                                                            <a href=""><img src="resources/images/content/itemimg2.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <div class="itemdetail">
                                                            <div class="itemprice">
                                                                <span class="price">2.100.000đ</span>
                                                                <span class="oldprice">2.500.000đ</span>
                                                            </div>
                                                            <a class="ittitle" href=""><b>Sản phẩm 001</b></a> 
                                                            <div class="star">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <p>Minus eleifend fermentum explicabo tortor magnis venenatis hymenaeos! Vitae magna, pariatur congue quisquam, at tempore ultricies? Vestibulum congue magna ornare lacus. Reiciendis? Euismod dignissim ante, vulputate.</p>
                                                            <div class="itemaction">
                                                                <a class="pagebtn addtocart fa fa-shopping-basket" data-toggle="modal" data-target="#modalqview"></a>
                                                                <a href="" id="addtowl" class="fa fa-heart addtowl pagebtn"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <div class="pagenav">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
										<li class="page-item"><a class="page-link" href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
										<li class="page-item"><a class="page-link" href="#">&#160</a></li>
										<li class="page-item"><a class="page-link" href="#">&#160</a></li>
										<li class="page-item"><a class="page-link" href="#">&#160</a></li>
										<li class="page-item"><a class="page-link" href="#">&#160</a></li>
										<li class="page-item"><a class="page-link" href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
									</ul>
                                </nav>
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
    <script src="resources/vendor/owlcarousel/owl.carousel.min.js"></script>
    <!-- slick and fancybox lib -->
    <script src="resources/vendor/slick/slick.min.js"></script>
    <script src="resources/vendor/fancybox/jquery.fancybox.min.js"></script>
    <!-- slick and fancybox lib -->
	<script  src="resources/vendor/font-awesome-4.7.0/fontawesome.min.js"></script>	
	<script  src="resources/js/main.js"></script>	
	
</html>