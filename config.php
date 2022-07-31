<?php
// URLs Base
define('URL_BASE', 'http://localhost/solidarios/');
define('URL_BASE_LINK_VIEWS', 'http://localhost/solidarios/views/');
define('URL_BASE_IMGS_CARROUSEL', 'http://localhost/solidarios/public/assets/imgs/carrousel/');
define('URL_BASE_IMGS', 'http://localhost/solidarios/public/assets/imgs/');
define('URL_BASE_CSS', 'http://localhost/solidarios/public/assets/css/');
define('URL_BASE_JS', 'http://localhost/solidarios/public/assets/js/');
define('URL_BASE_LIBS', 'http://localhost/solidarios/public/assets/libs/');
define('URL_BASE_VIEWS', 'views/');
define('URL_BASE_CONTROLLERS', 'controllers/');


// Para o autoload
define("EXTENSION_MODEL", '.model.php');

try {
    $pdo = new PDO(
        "mysql:dbname=solidarios;dbhost=localhost",
        'root', 
        ''
    );

    global $pdo;
} catch (PDOException $e) {
    echo "Error: ". $e->getMessage();
}
?>
