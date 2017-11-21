<link type="text/css" rel="stylesheet" href="/main.css" />
<script src="/bowser.min.js"></script>
<script src="/Main.js" onload="checkMobile()"></script>
<script src="/jquery-1.11.3.min.js"></script>
<script src="/menu.js"></script>
<script src="/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<?php

/**
 * A simple PHP Login Script / ADVANCED VERSION
 * For more versions (one-file, minimal, framework-like) visit http://www.php-login.net
 *
 * @author Panique
 * @link http://www.php-login.net
 * @link https://github.com/panique/php-login-advanced/
 * @license http://opensource.org/licenses/MIT MIT License
 */

$root = $_SERVER['DOCUMENT_ROOT'];

// check for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once( $root.'/login/libraries/password_compatibility_library.php');
}
// include the config
require_once($root.'/login/config/config.php');

// include the to-be-used language, english by default. feel free to translate your project and include something else
require_once($root.'/login/translations/en.php');

// include the PHPMailer library
require_once($root.'/login/libraries/PHPMailer.php');

// load the login class
require_once($root.'/login/classes/User.php');

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process.
$user = new User();

define("DB_HOST", "127.0.0.1");
define("DB_NAME", "GAMU");
define("DB_USER", "GAMU");
define("DB_PASS", "Ruffles0920");

$db = new PDO("mysql:host=".DBHOST.";port=8889;dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//set timezone
date_default_timezone_set('America/Edmonton');
?>

<!--
<link rel="icon"
  type="/image/png"
  href="/images/eyecon.png">
-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
