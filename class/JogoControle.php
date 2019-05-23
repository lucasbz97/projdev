<?php
class JogoControle
{
    private $con;
    function __construct()
    {
        $this->con = mysqli_connect("localhost", "root", "", "projdev");
        if (!$this->con) {
            die("<h1>Site Indisponível</h1>");
        }
    }

    public function BuscarJogo($idperg, $idsala)
    {
        $comm_query = "select QUESTAO_PERG,ALTERNATIVA_RESP,CHECKED_RESP from RESPOSTAS as resp";
        $comm_query .= " inner join PERGUNTAS as perg on resp.RESP_PERG_ID = perg.ID_PERG";
        $comm_query .= " where perg.PERG_SALA_ID = ? and perg.ID_PERG = ?";

        $stm = mysqli_prepare($this->con, $comm_query);
        $stm->bind_param('ii', intval($idsala), intval($idperg));
        $stm->execute();

        $stm->bind_result($result_questao, $result_alternativa, $result_check);
        $stm->store_result();
        $cont = 0;
        $lista_alternativas = [];
        while ($stm->fetch()) {
            $lista_alternativas[$cont] = array("questao" => $result_questao, "alternativa" => $result_alternativa, "check" => $result_check);
            $cont++;
        }

        if ($cont = 1) {
            return $lista_alternativas;
        }
        return null;
    }
}
