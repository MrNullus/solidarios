<?php  
# @ Configs Initial @
session_start();
require 'config.php';

# @ Autoload Model @
spl_autoload_register(function($model) {
    if (file_exists("./".$model.EXTENSION_MODEL)) {
        require_once("./".$model.EXTENSION_MODEL);
    } elseif (file_exists("../models/".$model.EXTENSION_MODEL)) {
        require_once("../models/".$model.EXTENSION_MODEL);
    }
});

# @ Utils @
require 'utils/display_links.utils.php';
require 'utils/replace_values.utils.php';
require 'utils/handle_input_img.utils.php';
require 'utils/del_redundance.utils.php';

?>