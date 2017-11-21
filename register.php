<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
  <head>
    <title>GAMU - Register</title>
    <?php $root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/head.php") ?>
      <style type="text/css">
        /* just for the demo */
        label {
            position: relative;
            vertical-align: middle;
            bottom: 1px;
        }
        input {
            display: block;
            margin-bottom: 15px;
        }
        input[type=checkbox] {
            margin-bottom: 15px;
        }
    </style>
  </head>
  <body>
    <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/top.html";
     include($path); ?>
     <div class="textBody">
         <h2>Register</h2>
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
         <form method="post" action="register.php" name="registerform">
            <label for="user_name" title="only letters and numbers, 2 to 64 characters"><?php echo WORDING_REGISTRATION_USERNAME; ?></label>
            <input id="user_name" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" value="<?php if(isset($_POST['user_name'])){ echo $_POST['user_name'];}?>" />

            <label for="user_real_name" title="only letters, 2 to 64 characters"><?php echo WORDING_REGISTRATION_REAL_NAME; ?></label>
            <input id="user_real_name" type="text" pattern="{2,64}" name="user_real_name" value="<?php if(isset($_POST['user_real_name'])){ echo $_POST['user_real_name'];}?>" required />

            <label for="user_email" title="please provide a real email address, you'll get a verification mail with an activation link"><?php echo WORDING_REGISTRATION_EMAIL; ?></label>
            <input id="user_email" type="email" name="user_email" value="<?php if(isset($_POST['user_email'])){ echo $_POST['user_email'];}?>" required />

            <label for="user_password_new" title="min. 6 characters!"><?php echo WORDING_REGISTRATION_PASSWORD; ?></label>
            <input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" autocomplete="off" />

            <label for="user_password_repeat" title="min. 6 characters!"><?php echo WORDING_REGISTRATION_PASSWORD_REPEAT; ?></label>
            <input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" autocomplete="off" />

            Register For: <br /><br />

            <label for="blog_1">Casual Games Club</label>
            <input type="checkbox" id="blog_1" name="blog_1" value="1" />

            <label for="blog_2">Video Games Club</label>
            <input type="checkbox" id="blog_2" name="blog_2" value="1" />

            <label for="blog_3">Esports Club</label>
            <input type="checkbox" id="blog_3" name="blog_3" value="1" />

            <input type="submit" name="register" value="<?php echo WORDING_REGISTER; ?>" />
             <a href="index.php"><?php echo WORDING_BACK_TO_LOGIN; ?></a>
        </form>
     </div>
   </body>
</html>
