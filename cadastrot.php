<?php
include("conexao.php");
// começar ou retomar uma sessão
session_start();
// se vier um pedido para login
if (!empty($_POST)) { 
	// receber o pedido de login com segurança
	$username = $_POST['user'];
	$password = $_POST['senha'];
	// verificar o utilizador em questão (pretendemos obter uma única linha de registos)
	$login = mysqli_query($conexao,"SELECT id_usuario FROM usuario WHERE nick = '$username' AND senha = '$password'");
	if ($login && mysqli_num_rows($login) == 1) {
		$_SESSION['certo']="errado";
		echo "<meta http-equiv=refresh content=0;url=cadastro.php />";
	} else {
		$nome=$_POST['nome'];
		$idade=$_POST['idade'];
		$cep=$_POST['cep'];
		$end=$_POST['end'];
		$mail=$_POST['mail'];
		$tel=$_POST['tel'];
		$cel=$_POST['cel'];
		$senha=$_POST['senha'];
		$nick=$_POST['user'];
		if (empty($_POST['tel']) && empty($_POST['cel'])) {
			$_SESSION['certo']="errado2";
			echo "<meta http-equiv=refresh content=0;url=cadastro.php />";
		}else{
			mysqli_query($conexao, "insert into usuario(nome, nasc, cep, num, email, fixo, cel, senha,nick) values ('$nome','$idade','$cep','$end','$mail','$tel','$cel', '$senha','$nick')");
			$_SESSION['certo']="certo";
			header("location: cadastrot2.php");
		}
	}
}else{
	header("location: index.php");
}
?>