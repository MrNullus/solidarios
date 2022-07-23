<?php 
// @ iniciar as dependencias @
$user = new User($pdo);
$user_logged = json_decode($_SESSION['user_logged']);
$nickname = addslashes($user_logged->username);

$path = '../assets/imgs/profile_product/';
$new_img = handle_input_img('imagem', $path);

if ($user->setImgProfile($nickname, $new_img)) {
	header("location: ".URL_BASE_LINK_VIEWS."perfil.php");
	exit;	
} else {
	header("location: ".URL_BASE_LINK_VIEWS."alter_product.php");
	exit;	
}


?>