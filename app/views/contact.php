<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<?php

  echo View::make('linker/link')->render();
 ?>
</head>
<body>
<!---->
<?php
	$data['active']="contact";
	echo View::make('template/header',$data)->render();
	?>

<!---->
<div class="about">
	 <div class="container">
		 <h2>Contact Us</h2>
		 <div class="about-grids">
			 <div class="col-md-6 about-info">
				 <h3>Intan Raharni Wijaya</h3>
				 <h5>1107130106</h5>
				 <h5>CS-37-04</h5>
				 <p>Jln Suka Birus No 21 D RT 24 RW 08, Desa Citeureup</p>
				 <p> +62813-2135-9385 </p>
				 <!--<p>Nam dictum accumsan magna, vitae maximus massa consequat eget. Nullam dui magna, suscipit sit amet hendrerit iaculis, luctus sed nibh. Vivamus facilisis aliquam rutrum. Sed vel nisl dignissim ante gravida sagittis sed ac justo. Duis id lectus elit. Nunc commodo nibh nec ligula sagittis, at fringilla velit luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque eu enim et massa vulputate sollicitudin in eu justo.</p>-->
			 </div>

			 <div class="col-md-6 abt-pic">
				 <img src="images/tan.png" class="img-responsive" alt=""/>
			 </div>
			 <div class="clearfix"></div>			 
		 </div>
		 <div class="about-grids">
			 <div class="col-md-6 about-info">
				 <h3>Irba Fairuz Thufailah</h3>
				 <h5>1107131138</h5>
				 <h5>CS-37-04</h5>
				 <p>Jln Suka Birus No 21 D RT 24 RW 08, Desa Citeureup</p>
				 <p> +62857-2756-8008</p>
			 </div>

			 <div class="col-md-6 abt-pic">
				 <img src="images/ve.png" class="img-responsive" alt=""/>
			 </div>
			 <div class="clearfix"></div>			 
		 </div>
		 <div class="about-grids">
			 <div class="col-md-6 about-info">
				 <h3>Mahadika Philetas Riefrathama</h3>
				 <h5>1107134157</h5>
				  <h5>CS-37-04</h5>
				 <p></p>
			 </div>

			 <div class="col-md-6 abt-pic">
				 <img src="images/phil.png" class="img-responsive" alt=""/>
			 </div>
			 <div class="clearfix"></div>			 
		 </div>

</div>
</div>
<br />
</br>
<!---->
<?php
  echo View::make('template/footer')->render();
?>
<!---->
</body>
</html>