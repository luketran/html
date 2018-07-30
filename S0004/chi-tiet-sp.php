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
		<link rel="stylesheet" href="resources/vendor/onepage/jquery.fullPage.css">
		<link rel="stylesheet" href="resources/vendor/slick/slick.css">
		<link rel="stylesheet" href="resources/vendor/jssocial/jssocials.css">
		<link rel="stylesheet" href="resources/vendor/fancybox/jquery.fancybox.min.css">
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
                                            <a href="index.html">Trang chủ</a>
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
                            <div class="itemdetail">
                                <div class="_1detail">
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="gallery-photos clearfix">
                                                <div class="photo-thumbnails ">
                                                    <div class="thumblist">
                                                        <div class="thumbnail" style="background-image: url(resources/images/content/pro.png)">
                                                            <img src="resources/images/thumbroot.png" alt="" />
                                                        </div>
                                                        <div class="thumbnail" style="background-image: url(resources/images/content/pro1.png)">
                                                            <img src="resources/images/thumbroot.png" alt="" />
                                                        </div>
                                                        <div class="thumbnail" style="background-image: url(resources/images/content/pro3.png)">
                                                            <img src="resources/images/thumbroot.png" alt="" />
                                                        </div>
                                                        <div class="thumbnail" style="background-image: url(resources/images/content/pro.png)">
                                                            <img src="resources/images/thumbroot.png" alt="" />
                                                        </div>
                                                        <div class="thumbnail" style="background-image: url(resources/images/content/pro1.png)">
                                                            <img src="resources/images/thumbroot.png" alt="" />
                                                        </div>
                                                        <div class="thumbnail" style="background-image: url(resources/images/content/pro3.png)">
                                                            <img src="resources/images/thumbroot.png" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="big-photo" class="big-photo">
                                                        <a class="_1img" data-fancybox="gallery" href="resources/images/content/pro.png"><img src="resources/images/content/pro.png"></a>
                                                        <a class="_1img" data-fancybox="gallery" href="resources/images/content/pro1.png"><img src="resources/images/content/pro1.png"></a>
                                                        <a class="_1img" data-fancybox="gallery" href="resources/images/content/pro3.png"><img src="resources/images/content/pro3.png"></a>
                                                        <a class="_1img" data-fancybox="gallery" href="resources/images/content/pro.png"><img src="resources/images/content/pro.png"></a>
                                                        <a class="_1img" data-fancybox="gallery" href="resources/images/content/pro1.png"><img src="resources/images/content/pro1.png"></a>
                                                        <a class="_1img" data-fancybox="gallery" href="resources/images/content/pro3.png"><img src="resources/images/content/pro3.png"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="mtsp">
                                                <h4>SẢN PHẨM 001</h4>
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
                                                    <span class="dcount">(-30%)</span>
                                                </div>
                                                <p>Anim pharetra fames minus, facere convallis netus voluptatem pellentesque varius nemo placerat! Elementum, purus, beatae, impedit, commodi! Nihil, sodales consectetuer.</p>
                                                <ul class="sizepick">
                                                    <li><a href="#">S</a></li>
                                                    <li><a href="#">XS</a></li>
                                                    <li><a href="#">M</a></li>
                                                    <li><a href="#">L</a></li>
                                                    <li><a href="#">XL</a></li>
                                                </ul>
                                                <ul class="colorpick">
                                                    <li><a href="#" class="vang"></a></li>
                                                    <li><a href="#" class="xam"></a></li>
                                                    <li><a href="#" class="hong"></a></li>
                                                </ul>
                                                <div class="input-group _itemno">
                                                    <a href="" class="input-group-addon fa fa-angle-left"></a>
                                                    <input type="text" class="form-control" value="1">
                                                    <a href="" class="input-group-addon fa fa-angle-right"></a>
                                                </div>	
                                                <div class="_mtaction">
                                                    <button>
                                                        <i class="fa fa-shopping-cart"></i>
                                                        THÊM VÀO GIỎ HÀNG
                                                    </button>
                                                    <button>
                                                        <i class="fa fa-heart"></i>
                                                        THÊM VÀO YÊU THÍCH
                                                    </button>
                                                </div>
                                                <div class="line"></div>
                                                <div class="_mtsocial" >
                                                    <span>CHIA SẺ: </span>
                                                    <span id="sharePopup"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_2detail">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="">
                                            <a class="active" id="home-tab" data-toggle="tab" href="#tab1" role="tab" aria-selected="true">MÔ TẢ</a>
                                        </li>
                                        <li class="">
                                            <a class="" id="profile-tab" data-toggle="tab" href="#tab2" role="tab"  aria-selected="false">THÔNG TIN</a>
                                        </li>
                                        <li class="">
                                            <a class="" id="contact-tab" data-toggle="tab" href="#tab3" role="tab" aria-selected="false">BÌNH LUẬN</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active in" id="tab1" role="tabpanel" aria-labelledby="ttsp-tab">
                                            <b>Chất liệu</b> 
                                            <p>
                                                Quod aliqua ut netus porta mollitia! Adipisci cursus nullam tristique molestie at, labore vivamus eiusmod nostra dapibus curae! Facilisi, aperiam varius voluptates sociosqu 
                                                <ul>
                                                    <li>Hic dignissimos.</li>
                                                    <li>Hic dignissimos.</li>
                                                    <li>Hic dignissimos.</li>
                                                    <li>Hic dignissimos.</li>
                                                    <li>Hic dignissimos.</li>
                                                </ul>
                                            </p>
                                            <p>
                                                quod aliquam aliquid?  Ratione ultricies nam magnam ornare nascetur tempor harum? Nam eleifend adipisci repellendus. Dolores conubia, eget sollicitudin, cras vehicula cupidatat temporibus! Nonummy euismod tellus accusantium cubilia ducimus autem, ligula? Dignissimos? Perspiciatis. Excepturi incidunt numquam, egestas? Dis odit! Tempor nam per occaecat. Molestiae mauris accusamus duis ipsam. Lobortis ac facilisis tellus rerum.
                                            </p> 
                                            <b>Chất liệu</b> 
                                            <p>
                                                Quod aliqua ut netus porta mollitia! Adipisci cursus nullam tristique molestie at, labore vivamus eiusmod nostra dapibus curae! Facilisi, aperiam varius voluptates sociosqu <ul>
                                                    <li>Hic dignissimos.</li>
                                                    <li>Hic dignissimos.</li>
                                                    <li>Hic dignissimos.</li>
                                                    <li>Hic dignissimos.</li>
                                                    <li>Hic dignissimos.</li>
                                                </ul>
                                            </p>
                                            <p>
                                                quod aliquam aliquid?  Ratione ultricies nam magnam ornare nascetur tempor harum? Nam eleifend adipisci repellendus. Dolores conubia, eget sollicitudin, cras vehicula cupidatat temporibus! Nonummy euismod tellus accusantium cubilia ducimus autem, ligula? Dignissimos? Perspiciatis. Excepturi incidunt numquam, egestas? Dis odit! Tempor nam per occaecat. Molestiae mauris accusamus duis ipsam. Lobortis ac facilisis tellus rerum.
                                            </p> 
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="ttc-tab">Quod aliqua ut netus porta mollitia! Adipisci cursus nullam tristique molestie at, labore vivamus eiusmod nostra dapibus curae! Facilisi, aperiam varius voluptates sociosqu corporis quo lobortis? Nulla, consequuntur, soluta impedit magna impedit adipiscing asperiores, officia tempus diam malesuada porta magnis asperiores consequat asperiores unde ornare, quod aliquam aliquid? Hic dignissimos.</div>
                                    <div class="tab-pane fade " id="tab3" role="tabpanel" aria-labelledby="rate-tab">
                                            quod aliquam aliquid?  Ratione ultricies nam magnam ornare nascetur t
                                    </div>
                                    </div>
                                </div>
                                <div class="_3detail">
                                    <div class="sameitem">
                                        <h3>SẢN PHẨM LIÊN QUAN</h3>
                                        <div class="owl-carousel splienquan">
                                            <div class="item">
                                                <a href="chi-tiet-sp.html">
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
                                                <a href="chi-tiet-sp.html">
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
                                                <a href="chi-tiet-sp.html">
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
                                                <a href="chi-tiet-sp.html">
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
                                                <a href="chi-tiet-sp.html">
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
	<script src="resources/vendor/slick/slick.min.js"></script>
	<script src="resources/vendor/fancybox/jquery.fancybox.min.js"></script>
	<script src="resources/vendor/jssocial/jssocials.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="resources/vendor/onepage/jquery.fullPage.js"></script>
	<script src="resources/vendor/owlcarousel/owl.carousel.min.js"></script>
	<script  src="resources/vendor/font-awesome-4.7.0/fontawesome.min.js"></script>	
    <script  src="resources/js/main.js"></script>	
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
        });
    </script>
    <script>
        $("#sharePopup").jsSocials({
            shareIn: "popup",
            showLabel: false,
            shares: [ "facebook","pinterest","twitter", "googleplus", "linkedin"]
        });
    </script>
</html>