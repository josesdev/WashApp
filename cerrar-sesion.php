<?php
// include the config
require_once('config.php');
require_once('views/_header.php');

if(isset($_COOKIE['menu']) && !empty($_COOKIE['menu'])) {
setcookie('menu','',time()-100);
unset($_COOKIE["menu"]);

}

if(!isset($_COOKIE["menu"])) {
	header("Location: ".$site_url);
}

?>