<?php
// @ iniciar as dependencias @
require '../minerva.lock.php';
$user = new User($pdo);

// @ se vier um pedido para login @
if (isset($_POST) && !empty($_POST)) { 
	#= receber o pedido de login com segurança =#
	$username = addslashes($_POST['login']);
	$password = md5(addslashes($_POST['password']));
	
	#= vai verificar se o usuario existe =#
	if ($user->verify_user($username, $password)) {
		// o utilizador está correctamente validado
		$user_logged = new stdClass();
		$user_logged->id = $user->getId($username, $password);
		$user_logged->username = $username;
		$user_logged = json_encode($user_logged);

		$_SESSION['user_logged'] = $user_logged;
		$_SESSION['failed_login'] = 'n';
	
		header("Location: ".URL_BASE."index.php");
		exit;
	} else {
		#= falhou o login =#
		$_SESSION['failed_login'] = 'y';
		header("Location: ".URL_BASE_LINK_VIEWS."login.php");
		exit;
	}
} else {
	header("Location: ".URL_BASE."index.php");
	exit;
}
?>