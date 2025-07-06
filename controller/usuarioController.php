<?php   
    require_once "model/usuario.php";

    class UsuarioController {
        public function processa($acao){
            if($acao == "C"){
                $novoUser = new Usuario();

                $novoUser->setCpf($_POST['cpf']);
                $novoUser->setNomeUsuario($_POST['nomeUsuario']);
                $novoUser->setEmail($_POST['email']);
                $novoUser->setDtaNasc($_POST['dataNasc']);
                $novoUser->setPaisNasc($_POST['paisUsuario']);
                $novoUser->setNumTel($_POST['numeroCelular']);
                $novoUser->setSenha($_POST['senha']);
                $novoUser->setSexo($_POST['sexo']);

                $novoUser->cadastrarUsuario();
            }
        }
    }
?>