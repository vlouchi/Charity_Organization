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
  echo View::make('linker/linkerlogin')->render();
?>
</head>
<body>
<!---->

  <?php
  $data['active'] = "login";
  echo View::make('template/header',$data)->render();
  ?>

<!---->
<center>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="wrapper">
  <br />
  <h1>Reset Password</h1>
  <p>------------------------</p>
  <?php 
        if (Session::get('passMessage')!=null) echo "<div class='alert alert-info' role='alert'>
         ".Session::get('passMessage')." </div>"; 
        else if (Session::get('errMessage')!=null) echo "<div class='alert alert-danger' role='alert'>
         ".Session::get('errMessage')." </div>";
         
      ?>
  <form class="form" method="post" action="<?php echo url();?>/login/resetpassword/val">
    
   <input type="text" name="username" class="name" placeholder="username">
    <div>
      <p class="name-help">Please enter your username</p>
    </div>
    <br>
    <input type="password" name="pin" class="name" placeholder="pin">
    <div>
      <p class="name-help">Please enter your PIN</p>
    </div>
    <br>
    <input type="submit" name="login" class="submit" value="Reset">
  </form>
<br>
<br>
<br>
</div>
</div>

</center>
<br>
</div>
<br />
<!---->
<?php
  echo View::make('template/footer')->render();
?>
<!---->
</body>
</html>