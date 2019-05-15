<?php
class Usuario
{
    var $ID;
    var $Email;
    var $Senha;

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
