<?php  
require '../minerva.lock.php';

unset($_SESSION['user_logged']);
header("Location: ".URL_BASE_LINK_VIEWS."index.php");
exit;
?>