<?php  
/*
* 
* handle_input_img
*
* Vai manipular o salvamento de imagens por input, aonde se deve passar o nome do input e a pasta a ser guardada
*
* @package solidarios 
*
* @author Ms. Nullus <email: gustavojs417@gmail.com> <github: msNullus>
*
* @param $name_input string | Nome do elemento input que recebe a entrada da imagem
* @param $folder_for_upload | Pasta que vai receber a imagem já upada
*
* return string
*
*/
function handle_input_img($name_input = 'default.png', $folder_for_upload = '../assets/imgs/') {
    $name_file = $_FILES[$name_input]['name'];
    $file = $_FILES[$name_input]['tmp_name'];
    $ext = substr($name_file, -3);
    $new_img = "$name_file.$ext";
    $path = strval($folder_for_upload.$new_img);
    
    move_uploaded_file(
        $file, 
        $path
    );

    return $new_img;
}
?>