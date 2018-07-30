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
            <?php  include("page-local.php"); ?>
            <div class="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
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
                           <div class="recentblog">
                               <h4>BÀI VIẾT NỔI BẬT</h4>
                               <div class="recentbloglist">
                               <div class="row">
                                    <div class="col-sm-12">
                                        <div class="_1reblog">
                                            <a class="_1reblogimg" href="chi-tiet-tin.php"><img src="resources/images/content/recentimg.png" alt=""></a> 
                                            <div class="reblogcont">
                                                <a href="chi-tiet-tin.php">Hoa hồng xanh và truyền thuyết một ngày đẹp trời có con chim lợn</a>
                                                <p>18 - 07 - 2018</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="_1reblog">
                                            <a class="_1reblogimg" href="chi-tiet-tin.php"><img src="resources/images/content/recentimg.png" alt=""></a> 
                                            <div class="reblogcont">
                                                <a href="chi-tiet-tin.php">Hoa hồng xanh và truyền thuyết một ngày đẹp trời có con chim lợn</a>
                                                <p>18 - 07 - 2018</p>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                               </div>
                           </div>
                           <div class="ads">
                                <a href=""><img src="resources/images/content/adsimg.png" alt=""></a>
                           </div>
                        </div>
                        <div class="col-md-9">
                           <div class="bloglist">
                                <div class="_1blog">
                                    <a class="_1blogimg" href="chi-tiet-tin.php"><img src="resources/images/content/1blog.png" alt=""></a> 
                                    <div class="bloginfo">
                                        <div class="bloginfotop">
                                            <div class="postday">
                                                <h1>18</h1>
                                                <span>THANG 7</span>
                                            </div>
                                            <div class="blogsummary">
                                                <a class="blogtitle" href="chi-tiet-tin.php">KHÁM PHÁ NHỮNG CÁCH CẮM HOA LẠ MẮT</a>
                                                <div class="author">
                                                    <span class="_1author">Đăng bởi:<span>Admin</span></span>
                                                    <span class="_1author">Ngày đăng: <span>21/03/2018</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Việc vận chuyển chất liệu tới các nhà máy gia công thành sản phẩm may mặc, đến khâu vận chuyển đưa ra thị trường đều trải qua quá trình xử lý sản xuất phức tạp, đồng thời cũng phải trải qua những đợt “tẩy rửa” bằng nhiều loại hóa chất như nhuộm, chống co vải, chống nhăn, tẩy trắng…</p>
                                    </div>
                                </div>
                                <div class="_1blog">
                                    <a class="_1blogimg" href="chi-tiet-tin.php"><img src="resources/images/content/1blog.png" alt=""></a> 
                                    <div class="bloginfo">
                                        <div class="bloginfotop">
                                            <div class="postday">
                                                <h1>18</h1>
                                                <span>THANG 7</span>
                                            </div>
                                            <div class="blogsummary">
                                                <a class="blogtitle" href="chi-tiet-tin.php">KHÁM PHÁ NHỮNG CÁCH CẮM HOA LẠ MẮT</a>
                                                <div class="author">
                                                    <span class="_1author">Đăng bởi:<span>Admin</span></span>
                                                    <span class="_1author">Ngày đăng: <span>21/03/2018</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Việc vận chuyển chất liệu tới các nhà máy gia công thành sản phẩm may mặc, đến khâu vận chuyển đưa ra thị trường đều trải qua quá trình xử lý sản xuất phức tạp, đồng thời cũng phải trải qua những đợt “tẩy rửa” bằng nhiều loại hóa chất như nhuộm, chống co vải, chống nhăn, tẩy trắng…</p>
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
     <!-- slick and fancybox lib -->
     <script src="resources/vendor/slick/slick.min.js"></script>
    <script src="resources/vendor/fancybox/jquery.fancybox.min.js"></script>
    <!-- slick and fancybox lib -->
	<script src="resources/vendor/bootstrap/bootstrap.min.js"></script>
	<script src="resources/vendor/owlcarousel/owl.carousel.min.js"></script>
	<script  src="resources/vendor/font-awesome-4.7.0/fontawesome.min.js"></script>	
	<script  src="resources/js/main.js"></script>	
	
</html>