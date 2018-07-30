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
			<div class="about-us">
				<div class="container">
					<div class="row">
						<article class="ourintro">
							<h3>Where does it come from?</h3>
							<h4>What is lorem ipsum?</h4>
							<p>Consequuntur quam tellus do? Per donec ullamco consectetur ullamco! Atque faucibus curabitur reprehenderit mollis, numquam, numquam habitasse, hac! Mauris dignissim! Incididunt sapiente ipsa soluta. Aliqua mollitia! Erat voluptates facilisis dolores nam atque culpa quasi voluptas earum, maiores leo repudiandae exercitationem, mattis cumque quod assumenda, dictumst. Cupidatat consectetur aliquid dapibus earum? Ab amet, eligendi odio, molestiae expedita aliquam, vero accusamus etiam. Praesentium aenean quos tellus minim adipisicing expedita dolore aspernatur maxime neque inventore? Eu quos rerum occaecat ullamcorper ultrices, aspernatur deleniti quia, impedit sodales augue, minus animi minim! Lorem vulputate aliquip? Tenetur ultricies culpa inceptos magnam. Fugiat, dignissimos a, nihil morbi.Consequuntur quam tellus do? Per donec ullamco consectetur ullamco! Atque faucibus curabitur reprehenderit mollis, numquam, numquam habitasse, hac! Mauris dignissim! Incididunt sapiente ipsa soluta. Aliqua mollitia! Erat voluptates facilisis dolores nam atque culpa quasi voluptas earum, maiores leo repudiandae exercitationem, mattis cumque quod assumenda, dictumst. Cupidatat consectetur aliquid dapibus earum? Ab amet, eligendi odio, molestiae expedita aliquam, vero accusamus etiam. Praesentium aenean quos tellus minim adipisicing expedita dolore aspernatur maxime neque inventore? Eu quos rerum occaecat ullamcorper ultrices, aspernatur deleniti quia, impedit sodales augue, minus animi minim! Lorem vulputate aliquip? Tenetur ultricies culpa inceptos magnam. Fugiat, dignissimos a, nihil morbi.</p>
							<img src="resources/images/aboutimg.png" alt="">
							<p>Officia mollit ridiculus mus quis occaecati? Semper luctus pede autem ea eos? Corporis. Illum dis facilisi molestiae aenean minima habitasse condimentum euismod consectetur quidem lacinia sodales provident, animi, et duis, fermentum culpa? Iusto elementum similique, faucibus? Perspiciatis excepteur earum rem dictum ipsum, explicabo ac vehicula, ridiculus magnis sapiente iste proident, eos. Illo consectetuer posuere cumque incidunt? Potenti praesent unde montes etiam iusto eget harum risus molestiae sunt eos eaque atque sed ad parturient fusce leo aliquid condimentum sollicitudin, tristique magnam vestibulum esse nisi iure. Optio facere optio praesent officiis proident perspiciatis commodi? Eligendi, aliquid potenti! Duis nobis. Aliquid porttitor cubilia.</p>
						</article>
					</div>
				</div>
			</div>
		</section>
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