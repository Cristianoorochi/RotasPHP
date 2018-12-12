<?php 

	if (!isset($_SESSION['view'])) {
		exit();
	}

	include_once 'config.php';

	class conectar extends config {
		var $pdo;


		function __construct(){
			$this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->db,$this->user, $this->senha);
		}

		function login($email, $senha){
			$stmt = $this->pdo->prepare('SELECT * FROM usuarios WHERE email = :email AND senha = :senha');
			$stmt->bindValue(':email',$email);
			$stmt->bindValue(':senha',$senha);
			$run = $stmt->execute();
			$resul = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $resul;
		}

	}


?>