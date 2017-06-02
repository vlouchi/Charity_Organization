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
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="<?php echo url(); ?>/assetslogin/css/regis.css" media="screen,print" rel="stylesheet" />
</head>
<body>
<!---->
  <?php
  $data['active'] = "profile";
  echo View::make('template/header',$data)->render();
  ?>

<!---->
<center>

<div class="wrapper">
  <h1>Profil Setting</h1>
  <p>------------------------</p>
  <form class="form" method="post" action="<?php echo url();?>/profil/update">
  <?php 
        if (Session::get('sucMessage')!=null) echo "<div class='alert alert-success' role='alert'>
         ".Session::get('sucMessage')." </div>"; 
        else if (Session::get('errMessage')!=null) echo "<div class='alert alert-danger' role='alert'>
         ".Session::get('errMessage')." </div>";
         
      ?>
    
    <input type="text" name="namalengkap" class="name" placeholder="Fullname" value="<?php echo $profile[0]->nama; ?>">
    <div>
      <p class="name-help">Please enter your Fullname</p>
    </div>

    <input type="text" name="username" class="name" placeholder="Username" value="<?php echo $profile[0]->username; ?>"readonly>
    <div>
      <p class="name-help">Please enter username</p>
    </div>

    <input type="password" name="password" class="name" placeholder="Password" value="<?php echo $profile[0]->password; ?>">
    <div>
      <p class="name-help">Please enter your password</p>
    </div>

   <input type="password" name="password_conf" class="name" placeholder="Password Confirm" value="<?php echo $profile[0]->username; ?>">
    <div>
      <p class="name-help">Please enter your pasword confirmation</p>
    </div>

    <input type="email" name="email" class="email" placeholder="Email" value="<?php echo $profile[0]->email; ?>">
     <div>
      <p class="email-help">Please enter your current email address.</p>
    </div>
    
    <input type="submit" name="Save" class="submit" value="Save">

  </form>
  </div>
</div>
</div>


<br>

<!---->

<?php
  echo View::make('template/footer')->render();
?>

<!---->
</body>
</html>