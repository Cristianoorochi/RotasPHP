<?php 

session_start();

if (!isset($_SESSION['view'])) {
	$_SESSION['view'] = 'inicio';
}

include_once '_cabecalho.php';


include_once 'routes.php';


include_once '_rodape.php';

?>