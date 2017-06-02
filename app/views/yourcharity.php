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
  $data['active']="donate";
  echo View::make('linker/link',$data)->render();
  ?>
  <link href="<?php echo url(); ?>/assetsdonate/css/cek.css" media="screen,print" rel="stylesheet" />
  <link href="<?php echo url(); ?>/assetsdonate/css/cek1.css" media="screen,print" rel="stylesheet" />

</head>
<body>
<!---->
<?php
	$data['active'] = "donate";
	echo View::make('template/header',$data)->render();
	?>
<!---->
<div class="NS_site__homepage_popular py4" id="trending-projects">
	<div class="container-flex px2 py2">
		<div class="title-card pb2">
			<div class="row">
				<div class="mobile-col">
					<center>
			<div class="container">
			 <h2 class="top"><a href= '<?php echo url();?>/donate'> &lt; </a>Your Charity</h2>
			</div>
			</center>
				</div>

		</div>
	</div>
</div>
	<br />

<?php
for($i=0; $i<sizeof($charity);$i++) {
		if ($charity[$i]->jumlahskg == 0) $progress = 0;
		else $progress = $charity[$i]->jumlahskg/$charity[$i]->target*100;
	
		$progress = number_format($progress,0);		
echo '<div class="container">
	<div class="row mobile-scroll-row">
		<div class="mobile-scroll-row-item col col-4">
			<div class="js-score-tracking project-card project-card-tall-big" data-project="{&quot;id&quot;:1399449442}">
				<div class="project-thumbnail">
					<center>
					<a data-pid="1399449442" href="'.url().'/charity/'.$charity[$i]->iddcharity.'" target="">
						<img alt="Project image" class="project-thumbnail-img" src="'.$charity[$i]->urlgambar.'" height="200 px"">
					</a>
					</center>
				</div>
<div class="project-card-content">
	<h6 class="project-title"><a data-pid="1399449442"  data-score="null" data-version="null" href="'.url().'/charity/'.$charity[$i]->iddcharity.'" target=""> '.$charity[$i]->namacharity.' </a></h6> <p class="project-byline">By @'.$charity[$i]->usernameowner.'</p>
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
	
<div class="project-progress-bar">
	<div class="project-percent-pledged" style="width: '.$progress.'%"></div>
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
	
	<div class="col-right right">
	<form action="'.url().'/yourcharity/editcharity" method="POST">
	<input type="hidden" name="iddcharity" value="'.$charity[$i]->iddcharity.'">
		<button type="submit" class="btn btn--border-gray btn--small" href="'.url().'/yourcharity/editcharity">Edit</button>
	</form>
	</div>

		</li>
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
</div>
</div>
<br>
</div>
</div>
</div>
<!---->
<?php
  echo View::make('template/footer')->render();
?>
<!---->
</body>
</html>