<?php
// @ iniciar as dependencias @
require '../minerva.lock.php';

$user = new User($pdo);
$product = new Product($pdo);
$user_logged = json_decode($_SESSION['user_logged']);
$id_usuario = addslashes($user_logged->id->id_usuario);
$nickname = addslashes($user_logged->username);

// @ se vier um pedido para login @
if (!empty($_POST)) {
    #= receber o pedido de login com segurança =#
    $name_product = addslashes($_POST['nome']);
    $user_password = md5(addslashes($_POST['senha']));

    #= verificar o utilizador em questão (se retornar 'true' o user existe, se 'false' ele não existe) | esperamos receber 'false'
    if ($product->verify_product($name_product, $id_usuario)) {
        $_SESSION['feedback_cadastro_product'] = 'error1';

        header("Location: ".URL_BASE_LINK_VIEWS."doar.php");
        exit;
    } else {	
        #= error2 |> informações imcompletas =#
        if (empty($_POST['nome']) && empty($_POST['doador'])) {
            $_SESSION['feedback_cadastro_product'] = 'error2';

            header("Location: ".URL_BASE_LINK_VIEWS."doar.php");
            exit;
        } else {
            #= success |> foi cadastro com sucesso =#
            #= array com todas as informações recebidas do form =#
            $path = '../assets/imgs/profile_product/';
            $nome_produto = addslashes($_POST['nome']);
            $descricao = addslashes($_POST['descricao']);
            $data_validade = addslashes(date('Y-m-d', strtotime($_POST['valido'])));
            $imgperfil = addslashes(handle_input_img('imagem', $path));

            $arr_info = array(
                "id_usuario" => $id_usuario,
                ":nome" => $nome_produto,
                ":data_validade" => $data_validade,
                ":doador" => $nickname,
                ":descricao" => $descricao,
                ":imgperfil" => $imgperfil
            );

            $product->setNewProduct($arr_info);
            $_SESSION['feedback_cadastro_product'] = 'success';

            $id_product = $product->getId($id_usuario, $data_validade, $imgperfil);
            $location = "Location: ".URL_BASE_LINK_VIEWS."produto.php?id={$id_product}&name={$nome_produto}";
            header($location);
            exit;
        }
    }

} else {
    header("Location: index.php");
    exit;
}
