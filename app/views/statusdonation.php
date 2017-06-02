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
	$data['active'] = "donate";
	echo View::make('template/header',$data)->render();
	?>
<!---->
<div class="pages">
		<div class="container">
			 <h2 class="top"><a href= '<?php echo url();?>/donate'> &lt; </a>Status</h2>
			 
			
<div class="headdings">
	<div class="pages">
		<div class="container">
			<div class="bs-docs-example">
				<table class="table table-hover">
					<thead>
						<tr>
						  <th>Number</th>
						  <th>Charity's Name</th>
						  <th>Donatur Name</th>
						  <th>Nominal </th>
						  <th>Status</th>
						</tr>
					</thead>
	<?php
	 $i=1;
		foreach ($listdonatur as $data) 
		 {
		 	if ($data['statusdonasi']==0){
		 		$status='<a href="'.url().'/donate/approve/'.$data['idcharity'].'/'.$data['iddonasi'].'">Pending</a>';
		 	}else{
		 		$status='Accepted';
		 	}
				
					echo'
					<tbody>
						<tr>
						  <td>'.$i++.'</td>
						  <td>'.$data['namacharity'].'</td>
						  <td>'.$data['usernamedonatur'].'</td>
						  <td>'.$data['jumlahdonasi'].'</td>
						  <td>'.$status.'</td>
						</tr>
				
					</tbody>

					';
		}
	?>
					
				</table>
			</div>
</center>

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