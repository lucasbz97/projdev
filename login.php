<?php
session_start();
require 'class/Usuario.php';
require 'class/UsuarioDAO.php';
$error = "";
$alert = "";
//para alertas
//$alert = json_encode(array("alert"=>'0',"mensagem"=>"Usuario ou senha inválidos!"));
if (isset($_POST['submitlogin'])) {
    if (empty($_POST['userlogin']) || empty($_POST['passwordlogin'])) {
        $alert = json_encode(array("alert" => '0', "mensagem" => "Usuario ou senha inválidos!"));
    } else {
        $user = new Usuario();
        $user->setUsuario($_POST['userlogin']);
        $user->setSenha($_POST['passwordlogin']);

        $bdDAO = new UsuarioDAO();
        if ($bdDAO->Login($user) == 0) {
            $alert = json_encode(array("alert" => '0', "mensagem" => "Usuario ou senha inválidos!"));
        }else{
            header("location: UserPage.php");
            die();
        }
    }
} else if (isset($_POST['submitcad'])) {
    $novouser = new Usuario();
    $novouser->setUsuario($_POST['usercad']);
    $novouser->setSenha($_POST['passwordcad']);
    $novouser->setEmail($_POST['emailcad']);

    $bdDAO = new UsuarioDAO();
    if ($bdDAO->Inserir($novouser) == 0) {
        $alert = json_encode(array("alert" => '0', "mensagem" => "Usuario já cadastrado!"));
    } else {
        $alert = json_encode(array("alert" => '1', "mensagem" => "Usuario cadastrado!"));
    }
}
