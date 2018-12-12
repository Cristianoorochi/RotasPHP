<?php 

include_once 'conectar.php';

if (!isset($_SESSION['view'])) {
	exit();
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$conn = new conectar();

$rs = $conn->login($email, $senha);


if($rs){
	
	echo 'login efetuado com sucesso';
} else {
	echo 'login nao efetuado';
}


?>