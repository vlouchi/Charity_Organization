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
			 <h2 class="top"><a href= '<?php echo url();?>/donate'> &lt; </a>Donated</h2>
			 
			
			<div class="headdings">
<div class="pages">
	<div class="container">
	<div class="bs-docs-example">
				<table class="table table-hover">
					<thead>
						<tr>
						  <th>#</th>
						  <th>Charity Name</th>
						  <th>Charity Owner</th>
						  <th>Nominal</th>
						  <th>Status</th>
						</tr>
					</thead>
	<?php
	 $i=1;
		foreach ($listdonasi as $data) 
		 {
		 	if ($data['statusdonasi']==0){
		 		$status='Pending';
		 	}else{
		 		$status='Accepted';
		 	}
				
					echo'
					<tbody>
						<tr>
						  <td>'.$i++.'</td>
						  <td>'.$data['namacharity'].'</td>
						  <td>'.$data['usernameowner'].'</td>
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
</br>
<?php
  echo View::make('template/footer')->render();
?>
<!---->
</body>
</html>