<?php 
/*
	Rotas
	=================================
*/

if (!isset($_SESSION['view'])) {
	exit();
}

$view = 'inicio';

if (isset($_GET['view'])) {
	$view = $_GET['view'];			
}		


switch ($view) {
	case 'conectar':		include_once 'conectar.php'; break;
		
	case 'inicio': 			include_once 'inicio.php'; break;

	case 'user':			include_once 'user.php'; break;
	
}




?>