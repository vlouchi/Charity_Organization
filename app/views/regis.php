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
  $data['active']='login';
  echo View::make('template/header',$data)->render();
  ?>

<!---->
<center>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="wrapper">
  <h1>Register For New Account</h1>
  <p>------------------------</p>
  <?php
  if (Session::get('sucMessage')!=null) echo "<div class='alert alert-info' role='alert'>
         ".Session::get('sucMessage')." </div>"; 
        else if (Session::get('errMessage')!=null) echo "<div class='alert alert-danger' role='alert'>
         ".Session::get('errMessage')." </div>";
  ?>
  <form class="form" method="post" action="<?php echo url();?>/register/validate">
    <input type="text" name="namalengkap" class="name" placeholder="Fullname">
    <div>
      <p class="name-help">Please enter your Fullname</p>
    </div>

    <input type="text" name="username" class="name" placeholder="Username">
    <div>
      <p class="name-help">Please enter username</p>
    </div>

    <input type="password" name="password" class="name" placeholder="Password">
    <div>
      <p class="name-help">Please enter your password</p>
    </div>

   <input type="password" name="password_conf" class="name" placeholder="Password Confirm">
    <div>
      <p class="name-help">Please enter your pasword confirmation</p>
    </div>

    <input type="password" name="pin" class="name" placeholder="Pin">
    <div>
      <p class="name-help">Please enter your pin</p>
    </div>

    <input type="email" name="email" class="email" placeholder="Email">
     <div>
      <p class="email-help">Please enter your current email address.</p>
    </div>
    <input type="submit" name="register" class="submit" value="Register">
  </form>
</div>

</center>
<br>
<!---->
<?php
  echo View::make('template/footer')->render();
?>

<!---->
</body>
</html>