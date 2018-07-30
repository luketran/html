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
                <div class="news">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="newscategory">
                                <ul>
                                    <li><a href="">Túi xách sành điệu</a></li>
                                    <li><a href="">Túi xách sành điệu</a></li>
                                    <li><a href="">Túi xách sành điệu</a></li>
                                    <li><a href="">Túi xách sành điệu</a></li>
                                </ul>
                            </div>
                            <div class="bestnews">
                                <h4>Bài viết phổ biến</h4>
                                <div class="newsslider">
                                    <div class="_1news">
                                        <h1> “ Bỏ túi một số phương pháp
                                                giải cứu mái tóc chẻ ngọn ” </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="newslist" id="newslist">
                                <div class="_each4">
                                    <div class="_1news">
                                        <img src="resources/images/content/newsimg.png" alt="">
                                    </div>
                                    <div class="_1news">
                                        <img src="resources/images/content/newsimg.png" alt="">
                                    </div>
                                    <div class="_1news">
                                        <img src="resources/images/content/newsimg.png" alt="">
                                    </div>
                                    <div class="_1news">
                                        <img src="resources/images/content/newsimg.png" alt="">
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
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="resources/vendor/owlcarousel/owl.carousel.min.js"></script>
	<script  src="resources/vendor/font-awesome-4.7.0/fontawesome.min.js"></script>	
	<script  src="resources/js/main.js"></script>	
	
</html>