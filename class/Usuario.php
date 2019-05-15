<?php
class Usuario
{
    private $ID;
    private $Email;
    private $Senha;

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
