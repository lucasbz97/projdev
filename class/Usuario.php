<?php
class Usuario
{
    private $ID;
    private $Usuario;
    private $Email;
    private $Senha;

    function __construct()
    {
        $this->ID = null;
        $this->Usuario = null;
        $this->Email = null;
        $this->Senha = null;
    }

    function getID()
    {
        return $this->ID;
    }
    function getEmail()
    {
        return $this->Email;
    }
    function getSenha()
    {
        return $this->Senha;
    }

    function getUsuario()
    {
        return $this->Usuario;
    }

    function setUsuario($usuario)
    {
        $this->Usuario = $usuario;
    }

    function setID($id)
    {
        $this->ID = $id;
    }
    function setEmail($email)
    {
        $this->Email = $email;
    }
    function setSenha($senha)
    {
        $this->Senha = $senha;
    }
}
