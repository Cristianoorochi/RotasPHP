<?php 

	if (!isset($_SESSION['view'])) {
		exit();
	}
	

?>

<h1>Bem vindo ao inicio</h1>
<p>Aqui vc começa a programação MVC</p><br>

<form action="?view=user" method="post">

	<label>Email</label>
	<input type="text" name="email">
	<label>Senha</label>
	<input type="password" name="senha"> 
	<button type="submit">Enviar</button>

<br><br>