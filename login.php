<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
  <head>
    <title>GAMU - Login</title>
    <?php $root = $_SERVER['DOCUMENT_ROOT'];
    require_once($root."/head.php");
    if ($user->isUserLoggedIn()){
      header('Location: /profile.php');
    }
    ?>
  </head>
  <body>
    <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/top.html";
     include($path); ?>
     <div class="textBody">
         <h2>Login</h2>
         <p style ="color:red;">
         <?php

         // show potential errors / feedback (from login object)
         if (isset($user)) {
             if ($user->errors) {
                 foreach ($user->errors as $error) {
                     echo $error;
                 }
             }
             if ($user->messages) {
                 foreach ($user->messages as $message) {
                     echo $message;
                 }
             }
         } ?></p>
    <form method="post" action="login.php" name="loginform">
        <label for="user_login"><?php echo WORDING_USERNAME; ?></label>
        <input id="user_login" type="text" name="user_login" required />
        <label for="user_password"><?php echo WORDING_PASSWORD; ?></label>
        <input id="user_password" type="password" name="user_password" autocomplete="off" required />
        <input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
        <label for="user_rememberme"><?php echo WORDING_REMEMBER_ME; ?></label>
        <input type="submit" name="login" value="<?php echo WORDING_LOGIN; ?>" />
    </form>

    <a href="register.php"><?php echo WORDING_REGISTER_NEW_ACCOUNT; ?></a>
    <a href="password_reset.php"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a>
     </div>
   </body>
</html>
