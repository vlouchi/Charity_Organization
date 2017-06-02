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
<div class="clearfix"></div>
<?php
	$data['active']='home';
	echo View::make('template/header',$data)->render();
	?>
<!---->
<div class="pages">
		<div class="container">
			 <h2 class="top">Rules</h2>		
			<div class="headdings">
			<ol>
			<li>1. Charity must create something to share with others</li>
			<p>		Charity can be used to create all sort of charity things: donation for orphans, disaster, events  etc. but every charity needs a plan for sharing your care to the one who needs. </p>
			
			<li>2. Each charity can only be share once
			<p>		It is not allowed to make the same charity more than once, to avoid doubled post of charity and spam that will be inconvenience and disturbing for the other visitors.
			</p>
			</li>
			<li>3. we are not responsible for any charity
			<p>		We are not responsible for any charity in case of fraud against the charity post. </p>
			</li>
			<li>4. Charity’s can’t fundrise for something involeve prohibited action
			<p>	We banned all of charity’s event that involve prohibited action such as political fundraising, donation related to paraphernalia etc.</p>
			</li>
			</ol>

			<br />
			<div class="container">
			 <h2 class="top">The rules don’t cover every possible use of Charity, but they explain our purpose perspective.</h2>
			</di>

</div>
</div>
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