<?php 
session_start();
if (empty($_SESSION['logged']) || $_SESSION['logged'] == 0) {
	echo"
		<a href='login.php'>Login</a>
		<a href='cadastro.php'>Cadastre-se</a>
		<a href='compromisso.php'>Compromissos</a>
		<a href='perfil.php'>Perfil</a>
	";
}elseif ($_SESSION['logged'] == 1) {
	echo"			
		<a href='compromisso.php'>Compromissos</a>
		<a href='perfil.php'>Perfil</a>
		<a href='sair.php'>sair</a>
	";
}
?>