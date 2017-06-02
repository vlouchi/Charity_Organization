<!DOCTYPE html>
<html>
<head>
<?php
  echo View::make('linker/link')->render();
  ?>
  <link href="<?php echo url(); ?>/assets/css/bootstrap.css" media="screen,print" rel="stylesheet" />
  <link href="<?php echo url(); ?>/assets/css/lightbox.css" media="screen,print" rel="stylesheet" />
  <link href="<?php echo url(); ?>/assets/css/style.css" media="screen,print" rel="stylesheet" />	
	<title>Charity Organization</title>
</head>
<body>

	<?php
	$data['active'] = "startcharity";
	  echo View::make('template/header',$data)->render();
	  ?>

  		<br>
  		<br>
		<center>
			<div class="container">
				 <h2 class="top">Start Charity</h2>
			<div class="headdings">
			<?php 
				if (Session::get('sucMessage')!=null) echo "<div class='alert alert-success' role='alert'>
				 ".Session::get('sucMessage')." </div>"; 
				else if (Session::get('errMessage')!=null) echo "<div class='alert alert-danger' role='alert'>
				 ".Session::get('errMessage')." </div>";
				 
			?>

	<form action="<?php echo url(); ?>/startcharity/create" method="POST">
		<div class="input-group input-group-lg">
			<span class="input-group-addon" id="sizing-addon1">Title 	: </span>
			<input type="text" name="title" class="form-control" placeholder="Charity Title" aria-describedby="sizing-addon1">
		</div>

		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Contact 	:</span>
			<input type="text" name="contact" class="form-control" placeholder="+62. . ." aria-describedby="basic-addon1">
		</div>

		<div class="input-group">
			<span class="input-group-addon">Fund	:</span>
				<input type="text" name="fund" class="form-control" aria-label="Amount (to the nearest Rupiah)">
			<span class="input-group-addon">.00</span>
		</div>

		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Rekening	:</span>
			<input type="text" name="rekening" class="form-control" placeholder="" aria-describedby="basic-addon1">
		</div>

		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Lokasi	:</span>
			<input type="text" name="lokasi" class="form-control" placeholder="" aria-describedby="basic-addon1">
		</div>

		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Image link	:</span>
			<input type="text" name="imagelink" class="form-control" placeholder="" aria-describedby="basic-addon1">
		</div>

		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Additional Image	:</span>
			<input type="text" name="addimage1" class="form-control" placeholder="" aria-describedby="basic-addon1">
		</div>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Additional Image  :</span>
			<input type="text" name="addimage2" class="form-control" placeholder="" aria-describedby="basic-addon1">
		</div>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Additional Image  :</span>
			<input type="text" name="addimage3" class="form-control" placeholder="" aria-describedby="basic-addon1">
		</div>
		
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Summary 	:</span>
			<input type="text" name="summary" class="form-control" placeholder="" aria-describedby="basic-addon1">
		</div>

		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Description	:</span>
			<textarea style="width: 1033px; height: 128px;"type="text" name="description" class="form-control" placeholder="" aria-describedby="basic-addon1"></textarea> 
		</div>

		<h1 class="b1">
			<button class="label label-success">Start Charity</button>
		</h1>
	</form>
</div>

</div>
</div>
</center>
<br>
<?php
  echo View::make('template/footer')->render();
?>

</body>
</html>



