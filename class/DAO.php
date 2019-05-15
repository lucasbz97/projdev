<?php
class DAO
{
    private $con;
    function _construct()
    {
        $this->con = mysqli_connect("127.0.0.1", "root", "", "projdev");
        if (!$this->con) {
            die("<h1>ERRO NA CONEXÃO</h1>");
        }
    }

    public function Inserir($novo)
    {
        $comm_insert = "insert into USUARIO (ID,EMAIL,SENHA) values(?,?,?)";

        $stm = mysqli_prepare($this->con, $comm_insert);
        $stm->bind_param("iss", $novo->getID(),$novo->getEmail(), $novo->getSenha());
        $stm->execute();

        if (!mysqli_query($this->con, $comm_insert)) {
            echo "erro";
        } else {
            echo "dados gravados";
        }
    }
}

//$DAO = new DAO;
