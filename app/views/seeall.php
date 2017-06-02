<!DOCTYPE html>
<html>
<head>
	<title>Charity Organization</title>
  <?php
  echo View::make('linker/link')->render();
  ?>
  <link href="<?php echo url(); ?>/assetsdonate/css/cek.css" media="screen,print" rel="stylesheet" />
  <link href="<?php echo url(); ?>/assetsdonate/css/cek1.css" media="screen,print" rel="stylesheet" />

</head>
<body>
	<!---->
	<?php
	$data['active']="donate";
	echo View::make('template/header',$data)->render();
	?>
	<br />
	<!---->

	<div class="container">
			 <h2 class="top">Charity</h2>		
			<div class="headdings">
	<div class="container">
	<div class="row mobile-scroll-row">
	
	<?php
	for($i=0; $i<sizeof($charity);$i++) {
		if ($charity[$i]->jumlahskg == 0) $progress = 0;
		else $progress = $charity[$i]->jumlahskg/$charity[$i]->target*100;
		$progress = number_format($progress,0);	
					 	echo '
<div class="mobile-scroll-row-item col col-4">
	<div class="js-score-tracking project-card project-card-tall-big" data-project="{&quot;id&quot;:1399449442}">
		<div class="project-thumbnail">
			<center>	
			<a data-pid="1399449442" href="'.url().'/charity/'.$charity[$i]->iddcharity.'" target="">
		
				<img alt="Project image" class="project-thumbnail-img" src="'.$charity[$i]->urlgambar.'" height="200 px" >
			</0>
			</center>
		</div>
<div class="project-card-content">
	<h6 class="project-title"><a data-pid="1399449442" data-score="null" data-version="null" href="'.url().'/charity/'.$charity[$i]->iddcharity.'" target="">'.$charity[$i]->namacharity.'</a></h6> <p class="project-byline">By @'.$charity[$i]->usernameowner.'</p>
		<p class="project-blurb">
		'.$charity[$i]->summary.'
		</p>
</div>

<div class="project-card-footer">
	<div class="project-location">
		
			<span aria-hidden="true" class="glyphicon3 glyphicon-map-marker"></span>
			<span class="location-name">'.$charity[$i]->lokasi.'</span>
		
	</div>

<div class="project-stats-container">
	<div class="project-pledged-successful">
		
	</div>

<div class="project-progress-bar">
	<div class="project-percent-pledged" style="width:'.$progress.'%"></div>
	</div>
		<ul class="project-stats">
		
			<li>
				<div class="project-stats-value">'.$progress.'%</div> <span class="project-stats-label">funded</span>
			</li>
			
			<li>
				<div class="project-stats-value"><span class="money usd no-code">Rp '.$charity[$i]->jumlahskg.'</span></div> <span class="project-stats-label">Fund</span>
			</li>
		
			<li>
				<div class="project-stats-value"><span class="money usd no-code">'.$charity[$i]->jmlhdonatur.'</span></div> <span class="project-stats-label">Donatur</span>
			</li>
		
		<li class="ksr_page_timer" data-end_time="2016-01-19T01:37:27-05:00">
	<div class="project-stats-value">
	<div class="num"></div>
	</div>
	
		</li>
		</ul>
	</div>
	</div>
</div>
</div>';


}
?>
</div>
</div>
</div>
</div>
<br />
	<!---->
	<?php
	  echo View::make('template/footer')->render();
	?>
	<!---->
</body>
</html>