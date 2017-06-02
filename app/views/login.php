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
  <h1>Login</h1>
  <p>------------------------</p>
  <?php
     if (Session::get('sucMessage')!=null) echo "<div class='alert alert-success' role='alert'>
         ".Session::get('sucMessage')." </div>"; 
        else if (Session::get('errMessage')!=null) echo "<div class='alert alert-danger' role='alert'>
         ".Session::get('errMessage')." </div>";
     ?>


  <form class="form" method="post" action="<?php echo url();?>/login/validate">
    
    <input type="text" name="username"class="name" placeholder="Username">
    <div>
      <p class="name-help">Please enter your first and last name.</p>
    </div>

    <input type="password" name="password" class="name" placeholder="Password">
    <div>
      <p class="name-help">Please enter your first and last name.</p>
    </div>

    <input type="submit" name="login" class="submit" value="Login">
  </form>
  <h1> Don't have account ? click <a href= '<?php echo url();?>/register'> here </a> </h1>
  <h1> Forget Password ? click  <a href= '<?php echo url();?>/login/resetpassword'> here </a> </h1>
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