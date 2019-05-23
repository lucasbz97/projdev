<?php
class Sala
{
    private $ID;
    private $ID_Usuario;
    private $Nome;

    function __construct()
    {
        $this->ID = null;
        $this->ID_Usuario = null;
        $this->Nome = null;
    }

    function getID()
    {
        return $this->ID;
    }
    function getNome()
    {
        return $this->Nome;
    }
    function getSenha()
    {
        return $this->Senha;
    }

    function getID_Usuario()
    {
        return $this->ID_Usuario;
    }

    function setID_Usuario($id_usuario)
    {
        $this->ID_Usuario = $id_usuario;
    }

    function setID($id)
    {
        $this->ID = $id;
    }
    function setNome($nome)
    {
        $this->Nome = $nome;
    }
    function setSenha($senha)
    {
        $this->Senha = $senha;
    }
}
