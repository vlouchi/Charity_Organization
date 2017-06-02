<div class="header">
	 <div class="container">
		 <div class="header-top">
			 <div class="logo">
				 <a href="/tubes/public"><h1>Charity <span>Organization</span></h1></a>
			 </div>
			 <!--<div class="hdr-address">
				 <div class="address1">
					 <h5></h5>
					 <p></p>
				 </div>
				 <div class="call">
					 <h5></h5>
					 <p></p>
				 </div> 
				 <div class="clearfix"></div>
			 </div>
			 			 <div class="clearfix"> </div> -->
			 <!-- search-scripts -->
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
				<script>
					new UISearch( document.getElementById( 's'b-search' ) );
				</script>
			<!-- //search-scripts -->
		 </div>
		 <div class="top-menu">
			 <span class="menu">MENU</span>
			 <ul>
			 <li <?php if($active=='home') echo "class='active'"; ?>><a href="<?php echo url(); ?>/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home<br> </a></li>
			 <li <?php if($active=='profile') echo "class='active'"; ?> ><a href="<?php echo url(); ?>/profil"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Profil<br> </a></li>
			 <li <?php if($active=='donate') echo "class='active'"; ?> ><a href="<?php echo url(); ?>/donate"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>Donate<br> </a></li>
			 <li <?php if($active=='startcharity') echo "class='active'"; ?> ><a href="<?php echo url(); ?>/startcharity"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Start Charity<br> </a></li>
			 <li <?php if($active=='contact') echo "class='active'"; ?> ><a href="<?php echo url(); ?>/contact"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Contact<br> </a></li>
			 <?php 
			 	if (Session::get('username')==null) {
			 		if ($active == 'login') {echo "<li class='active'><a href='".url()."/login'><span class='glyphicon glyphicon-log-in' aria-hidden='true'></span>Login</a></li> ";
			 		}else{
						echo "<li><a href='".url()."/login'><span class='glyphicon glyphicon-log-in' aria-hidden='true'></span>Login</a></li> ";			 			
			 		}
			 	}
			 	else {
			 		echo "<li><a href='".url()."/logout'><span class='glyphicon glyphicon-log-out' aria-hidden='true'></span>Logout <br> <h6>(".Session::get('username').")</h6></a></li> ";
			 	}
			 ?>
			</ul>
		 </div>
		 <!-- script-for-menu -->
		 <script>					
					$("span.menu").click(function(){
						$(".top-menu ul").slideToggle("slow" , function(){
						});
					});
		 </script>
		 <!-- script-for-menu -->	
		 <div class="clearfix"></div>
	 </div>
	 <div class="clearfix"></div>
	 </div>
</div>