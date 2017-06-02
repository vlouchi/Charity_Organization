
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
  <link href="<?php echo url(); ?>/assets/css/bootstrap.css" media="screen,print" rel="stylesheet" />
  <link href="<?php echo url(); ?>/assets/css/lightbox.css" media="screen,print" rel="stylesheet" />
  <link href="<?php echo url(); ?>/assets/css/style.css" media="screen,print" rel="stylesheet" />	
</head>
<body>
<!---->
<?php
	$data['active']="donate";
  echo View::make('template/header',$data)->render();
  ?>

<div class="about">
	 <div class="container">
		 <h2><?php echo $charity[0]->namacharity;?></h2>
		 <div class="about-grids">
			 <div class="col-md-6 about-info">
				 <h3><?php echo $charity[0]->namacharity;?></h3>
				 <h5> By <?php echo $charity[0]->usernameowner;?></h5>
				 <h5> Date : <?php echo $charity[0]->tanggalstart;?></h5>	
				 	<ul>
				 	 	<h4><li>Contact Number 	:<?php echo $charity[0]->contact;?> </li> </h4>
				 	 	<h4><li>Account Number	:<?php echo $charity[0]->rekening;?></li> </h4>
				 	 	<h4><li>Location		:<?php echo $charity[0]->lokasi;?></li> </h4>
				  	 	<h4><li>Description		: </li> </h4>
				  	 		<p> <?php echo $charity[0]->ketcharity;?> </p>
				  		
				 </ul>
			 </div>

		 <div class="col-md-6 abt-pic">
				 <img src="<?php echo $charity[0]->urlgambar;?>" class="img-responsive" alt=""/>
			 </div>
			 <div class="clearfix"></div>			 
		 </div>

		 	<center>
		 	<div class="container">
		 	<h2> Funded </h2>
		 	<br>
	 	 	 <h3> Funded : <?php echo $charity[0]->jumlahskg;?> / Target : <?php echo $charity[0]->target;?></h3>
		 	 		 	<br>
			<div class="progress">
				<div class="progress-bar progress-bar-success" style="width:<?php echo $progress;?>% " name="progressfund"></div>
			</div>
			</center>

			

			

		 <div class="images">
				<div class="images-grids">
					 <?php for($i=0; $i<sizeof($listgambar);$i++) {
					 	echo ' 
							 <div class="col-md-4 images-grid">
								 <div class="images-info">
								 <img src="'.$listgambar[$i]->urlgambar.'" class="img-responsive" alt=""/>
								 </div>
							 </div>
							 ';
							 if ($i==2) break;
							}
					 ?>
					 <div class="clearfix"></div>

				</div>
		 </div>
<br />
<form method="POST" action="<?php echo url()?>/charity/donating">
<center>
<input type="hidden" name="iddcharity" value="<?php echo $charity[0]->iddcharity ?>">
<div class="clearfix"></div>
<div class="input-group">
	<span class="input-group-addon">Fund	:</span>
		<input type="text" name="fund" class="form-control" aria-label="Amount (to the nearest Rupiah)">
	<span class="input-group-addon">.00</span>
</div>

<h1 class="b1">
	<button type="submit" class="label label-success" name="donate">Donate</button>
</h1>

</center>
</form>
</div>
</div>

<!---->

<?php
  echo View::make('template/footer')->render();
?>

<!---->
</body>
