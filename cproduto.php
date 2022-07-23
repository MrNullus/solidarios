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
		$valido=$_POST['valido'];
		$doador= $_SESSION['username'];
		if (empty($_POST['tel']) && empty($_POST['cel'])) {
			$_SESSION['certo']="errado2";
			echo "<meta http-equiv=refresh content=0;url=cadastro.php />";
		}else{
			mysqli_query($conexao, "insert into produto(nome, valido,doador) values ('$nome','$valido','$doador')");
			$_SESSION['certo']="certo";
			$nome=$_SESSION['username'];
			$nomea=$_FILES['imagem']['name'];
			$arquivo=$_FILES['imagem']['tmp_name'];
			$ext=substr($nomea,-3);
			echo $novonome="$nome.$ext";
			move_uploaded_file($arquivo,'imgprodutos/'.$novonome);
			mysqli_query($conexao,"update produto set imgperfil='$novonome' where nick='". $_SESSION['username'] ."'");
			}
		
	}
}else{
	header("location: index.php");
}
?>