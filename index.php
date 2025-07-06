<?php   

    $url = strtoupper($_GET['url']);

    if($url == "CADASTROUSUARIO"){
        require_once "view/cadastro.php";
    }

    if($url == "CADASTRA"){
        require_once "controller/usuarioController.php";
        $usuarioController = new UsuarioController();
        $usuarioController->processa("C");
    }

?>