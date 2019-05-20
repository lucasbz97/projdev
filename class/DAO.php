<?php
class DAO
{
    private $con;
    function __construct()
    {
        $this->con = mysqli_connect("localhost", "root", "", "projdev");
        if (!$this->con) {
            die("<h1>ERRO NA CONEXÃO</h1>");
        }
    }

    public function Inserir($novo)
    {
        $comm_insert = "insert into usuario (ID,EMAIL,SENHA) values(1,?,teste)";
        $comm_insert = "insert into questoes (questao, alternativa, checkbox) values (test,?,1)";
        
        $stm = mysqli_prepare($this->con, $comm_insert);
        $stm->bind_param('s',$email);
        $email = $novo;
        $stm->execute();

    }
}
