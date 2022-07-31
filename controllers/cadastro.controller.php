<?php
// @ iniciar as dependencias @
require '../minerva.lock.php';
$user = new User($pdo);

// @ se vier um pedido para cadastro @
if (!empty($_POST)) {
    #= receber o pedido de login com segurança =#
    $username = addslashes($_POST['user']);
    $password = md5(addslashes($_POST['password']));
    
    #= verificar o utilizador em questão (se retornar 'true' o user existe, se 'false' ele não existe) | esperamos receber 'false'
    if ($user->verify_user($username, $password)) {
        $_SESSION['feedback_cadastro'] = 'error1';
        header("Location: ".URL_BASE_LINK_VIEWS."cadastro.php");
        exit;
    } else {
        #= array com todas as informações recebidas do form =#
        $arr_info = array(
            ":nome" => addslashes($_POST['nome']),
            ":nick" => addslashes($_POST['user']),
            ":idade" => addslashes($_POST['idade']),
            ":cep" => addslashes($_POST['cep']),
            ":ender" => addslashes($_POST['end']),
            ":mail" => addslashes($_POST['mail']),
            ":tel" => addslashes($_POST['tel']),
            ":cel" => addslashes($_POST['cel']),
            ":senha" => md5(addslashes($_POST['password']))
        );

        #= error2 |> informações imcompletas =#
        if (empty($_POST['tel']) && empty($_POST['cel'])) {
            $_SESSION['feedback_cadastro'] = 'error2';
            header("Location: ".URL_BASE_LINK_VIEWS."cadastro.php");
            exit;
        } else {
            #= success |> foi cadastro com sucesso =#
            $user->setNewUser($arr_info);
            $_SESSION['feedback_cadastro'] = 'success';
            
            header("Location: ".URL_BASE_LINK_VIEWS."login.php");
            exit;
        }
    }

} else {
    header("Location: ".URL_BASE_LINK_VIEWS."login.php");
    exit;
}
