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
        <?php   
            include("header.php");
        ?>
		<!-- end header -->
		<section class="wrapper" >
			<div class="banner owl-carousel">
				<a href="san-pham.php"><img src="resources/images/content/banner.png" alt=""></a>
				<a href="san-pham.php"><img src="resources/images/content/banner.png" alt=""></a>
				<a href="san-pham.php"><img src="resources/images/content/banner.png" alt=""></a>
			</div>
			<div class="popularitems">
				<div class="container">
					<div class="row">
                        <div class="col-md-6">
                            <div class="_1pitem" href="">
                                <img src="resources/images/content/popular.png" alt="">
                                <div class="piinfo">
                                    <h1>Quần Áo <br> & <br> Đồ Chơi</h1>
                                    <a href="" class="pagebtnx">XEM NGAY</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="_1pitem" href="">
                                <img src="resources/images/content/popular.png" alt="">
                                <div class="piinfo">
                                    <h1>Bồn Tắm <br> & <br> Đồ Chơi</h1>
                                    <a href="" class="pagebtnx">XEM NGAY</a>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
            <div class="topsell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                             <h1>Sản phẩm bán chạy</h1>
                             <div class="topselllist owl-carousel">
                                 <div class="item">
                                     <div class="itemimg">
                                         <a href="chi-tiet-sp.php"><img src="resources/images/content/itemimg.png" alt=""></a>
                                     </div>
                                     <div class="itemdetail">
                                         <a href="chi-tiet-sp.php"><b>Vớ trẻ con gợn sóng</b></a>
                                         <div class="itemprice">
                                             <span class="price">30.000d</span>
                                             <span class="oldprice">30.000d</span>
                                         </div>
                                         <div class="star">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                         </div>
                                     </div>
                                    <a class="pagebtn addtocart" data-toggle="modal" data-target="#modalqview"> <i class="fa fa-shopping-bag"></i> LƯU GIỎ HÀNG</a>
                                    <a href="" id="addtowl" class="fa fa-heart addtowl"></a>
                                 </div>
                                 
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bestchoice">
                <div class="bccontainer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6 text-right">
                                <div class="bestchoicecontent">
                                    <h1>THỜI TRANG ĐÁNG YÊU CỦA BÉ</h1>
                                    <h4>LỰA CHỌN TỐT NHẤT CHO CÁC BẬC PHỤ HUYNH</h4>
                                    <a class="pagebtn">XEM NGAY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="topbrand">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Thương hiệu nổi bật</h1>
                            <div class="topbrandslider owl-carousel">
                                <div class="_1brand">
                                <a href="">
                                    <img src="resources/images/content/brand.png" alt="">
                                    <div class="brandname">
                                        BABYDOLL  
                                    </div>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="newcome">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Sản phẩm mới về</h1>
                            <div class="newcomelist owl-carousel">
                                <div class="item">
                                     <div class="itemimg">
                                         <a href="chi-tiet-sp.php"><img src="resources/images/content/itemimg.png" alt=""></a>
                                     </div>
                                     <div class="itemdetail">
                                         <a href="chi-tiet-sp.php"><b>Vớ trẻ con gợn sóng</b></a>
                                         <div class="itemprice">
                                             <span class="price">30.000d</span>
                                             <span class="oldprice">30.000d</span>
                                         </div>
                                         <div class="star">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                         </div>
                                     </div>
                                    <a class="pagebtn addtocart" data-toggle="modal" data-target="#modalqview"> <i class="fa fa-shopping-bag"></i> LƯU GIỎ HÀNG</a>
                                    <a href="" id="addtowl" class="fa fa-heart addtowl"></a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Tin tức</h1>
                            <div class="newslist owl-carousel">
                                <div class="_1news">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="newsimg">
                                                <a href="chi-tiet-tin.php"><img src="resources/images/content/newsimg.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="newsdetail">
                                                <p class="postday">16 - 07 - 2018</p>
                                                <a class="newstitle" href="chi-tiet-tin.php">Bí Quyết Diện Quần Áo Cực Chất Cho Bé</a>
                                                <p>Làn da mong manh của trẻ rất cần sự nâng niu chăm sóc vì thế khi chọn quần áo cho trẻ...</p>
                                                <a href="chi-tiet-tin.php" class="pagebtn">XEM NGAY</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_1news">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="newsimg">
                                                <a href="chi-tiet-tin.php"><img src="resources/images/content/newsimg.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="newsdetail">
                                                <p class="postday">16 - 07 - 2018</p>
                                                <a class="newstitle" href="chi-tiet-tin.php">Bí Quyết Diện Quần Áo Cực Chất Cho Bé</a>
                                                <p>Làn da mong manh của trẻ rất cần sự nâng niu chăm sóc vì thế khi chọn quần áo cho trẻ...</p>
                                                <a href="chi-tiet-tin.php" class="pagebtn">XEM NGAY</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_1news">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="newsimg">
                                                <a href="chi-tiet-tin.php"><img src="resources/images/content/newsimg.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="newsdetail">
                                                <p class="postday">16 - 07 - 2018</p>
                                                <a class="newstitle" href="chi-tiet-tin.php">Bí Quyết Diện Quần Áo Cực Chất Cho Bé</a>
                                                <p>Làn da mong manh của trẻ rất cần sự nâng niu chăm sóc vì thế khi chọn quần áo cho trẻ...</p>
                                                <a href="chi-tiet-tin.php" class="pagebtn">XEM NGAY</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="usercomment">
                <div class="ucmtwrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-push-2">
                                <div class="commentslide owl-carousel">
                                    <div class="_1comt">
                                        <div class="cmtinfo">
                                            <img src="resources/images/ucmt.png" alt="">
                                            <div class="cmtuinfo">
                                                <p>Nguyễn Thảo Mai</p>
                                                <p>Q.3 - Tp. Hồ Chí Minh</p>
                                            </div>
                                        </div>
                                        <div class="cmtcontent">
                                            Bố Mẹ nào cũng yêu thương con, tuy nhiên nhiều khi quá yêu trẻ mà vô tình lại chăm sóc trẻ không đúng cách khiến trẻ chậm phát triển. Dưới đây là những sai lầm cần tránh khi chăm sóc cho trẻ
                                        </div>
                                    </div>
                                    <div class="_1comt">
                                        <div class="cmtinfo">
                                            <img src="resources/images/ucmt.png" alt="">
                                            <div class="cmtuinfo">
                                                <p>Nguyễn Thảo Mai</p>
                                                <p>Q.3 - Tp. Hồ Chí Minh</p>
                                            </div>
                                        </div>
                                        <div class="cmtcontent">
                                            Bố Mẹ nào cũng yêu thương con, tuy nhiên nhiều khi quá yêu trẻ mà vô tình lại chăm sóc trẻ không đúng cách khiến trẻ chậm phát triển. Dưới đây là những sai lầm cần tránh khi chăm sóc cho trẻ
                                        </div>
                                    </div>
                                    <div class="_1comt">
                                        <div class="cmtinfo">
                                            <img src="resources/images/ucmt.png" alt="">
                                            <div class="cmtuinfo">
                                                <p>Nguyễn Thảo Mai</p>
                                                <p>Q.3 - Tp. Hồ Chí Minh</p>
                                            </div>
                                        </div>
                                        <div class="cmtcontent">
                                            Bố Mẹ nào cũng yêu thương con, tuy nhiên nhiều khi quá yêu trẻ mà vô tình lại chăm sóc trẻ không đúng cách khiến trẻ chậm phát triển. Dưới đây là những sai lầm cần tránh khi chăm sóc cho trẻ
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
		<?php   
            include("footer.php");
        ?>
		<?php   
            include("hide-content.php");
        ?>
		<!-- end foote -->
		
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