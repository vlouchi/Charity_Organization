<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Charity Organization</title>
<?php
	echo View::make('linker/link')->render();
?>
</head>
<body>
<!---->
	<?php
	 $data['active']='home';
	echo View::make('template/header',$data)->render();
	?>

<!---->
<div class="banner">
	 <div class="container">			
			<script src="js/responsiveslides.min.js"></script>
			  <script>
					$(function () {
					  $("#slider").responsiveSlides({
						auto: true,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						pager: true,
					  });
					});
			 </script>
			 <div class="slider">
				 <div class="callbacks_container">
				     <ul class="rslides" id="slider">
						 <li>	          
							  <h2>Give a Helping Hand</h2>
							 <h3>A little help for our better life.</h3>
						 </li>
						 <li>	          
							 <h2>Help a Child Without Family</h2>
							 <h3>together we are stronger.</h3>
						 </li>
						 <li>	          
							 <h2>Don't Leave Orphans Alone</h2>		
							 <h3>Save our world by saving our children.</h3>
						 </li>
					  </ul>
				 </div>
			 </div>
			  <!----->		  

	 </div>
</div>
<!---->
<div class="welcome">
	 <div class="container">
		 <div class="welcome-top">
			 <h3>Welcome To Our Charity</h3>
			 <h4>Our Charity Has Over 100 Donors</h4>
			 <p>We’re a non-profit humanitarian organisation whose aim is to improve the health, 
			 wellbeing and self-reliance of people living in isolated regions connected to us through surfing.</p>

				<center>
				<h1 class="b1">
				<a href='<?php echo url()?>/home/rules'><span class="label label-info">Rules</span></a>
			<!--	<a href='<?php echo url()?>/home/donatur'><span class="label label-info">donatur</span></a> -->
				</h1>
				</center>
		 </div>
		  
			  <div class="clearfix"></div>
		 </div>		 
	 </div>
</div>
<!---->

<!---->
<!---->

<!---->
<?php
	echo View::make('template/footer')->render();
?>

<!---->
</body>
</html>