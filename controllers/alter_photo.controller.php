<?php 
$user = new User($pdo);
$user_logged = json_decode($_SESSION['user_logged']);
$id_usuario = addslashes($user_logged->id_usuario);

$path = '../assets/imgs/profile_user/';
handle_input_img('imagem', $path);

if ($user->setImgProfile($nickname, $new_img)) {
	header("location: ".URL_BASE_LINK_VIEWS."perfil.php");
	exit;	
} else {
	header("location: ".URL_BASE_LINK_VIEWS."alter_photo.php");
	exit;	
}
?>
