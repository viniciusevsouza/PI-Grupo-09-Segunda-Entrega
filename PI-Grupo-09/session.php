<?php
session_start();
if(!array_key_exists('ultimo_login', $_SESSION)){
	$_SESSION['ultimo_login'] = date('H:i:s d/m/Y');
}
?>