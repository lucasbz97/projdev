<?php
class SalaDAO
{
    private $con;
    function __construct()
    {
        $this->con = mysqli_connect("localhost", "root", "", "projdev");
        if (!$this->con) {
            die("<h1>Site Indisponível</h1>");
        }
    }

    public function BuscarSalas($id_usua)
    {
        $comm_query = "select ID_SALA,NOME_SALA,NR_SALA from SALA where SALA_USUA_ID = ?";

        $stm = mysqli_prepare($this->con, $comm_query);
        $stm->bind_param('i', $id_usua);
        $stm->execute();

        $stm->bind_result($result_id, $result_nome,$result_nr);
        $stm->store_result();
        $cont = 0;
        $lista_salas = [];
        while ($stm->fetch()) {
            $lista_salas[$cont] = array("id" => $result_id, "nome" => $result_nome,"nr"=>$result_nr);
            $cont++;
        }

        if ($cont = 1) {
            return $lista_salas;
        }
        return nulla;
    }

    public function BuscarSalasJogo($nr)
    {
        $comm_query = "select ID_SALA,NOME_SALA from SALA where NR_SALA = ?";

        $stm = mysqli_prepare($this->con, $comm_query);
        $stm->bind_param('s', $nr);
        $stm->execute();

        $stm->bind_result($result_id, $result_nome);
        $stm->store_result();
        if ($stm->num_rows == 1) {
            $stm->fetch();
            $_SESSION['id_sala_jogo'] = $result_id;
            return array("id" => $result_id, "nome" => $result_nome);
        }
        return null;
    }

    public function BuscarSalasEditar($nr)
    {
        $comm_query = "select NOME_SALA,NR_SALA from SALA where NR_SALA = ?";

        $stm = mysqli_prepare($this->con, $comm_query);
        $stm->bind_param('s', $nr);
        $stm->execute();

        $stm->bind_result($result_id, $result_nome);
        $stm->store_result();
        if ($stm->num_rows == 1) {
            $stm->fetch();
            $_SESSION['id_sala_jogo'] = $result_id;
            return array("id" => $result_id, "nome" => $result_nome);
        }
        return null;
    }

    public function InserirSala($novo)
    {
        //if ($this->VerificaUsua($novo->getEmail(), $novo->getUsuario()) == 0) {
        

        $comm_insert = "insert into sala (NOME_SALA,SALA_USUA_ID,NR_SALA) values(?,?,?)";
        $nome = $novo->getNome_SALA();
        $id_usua = $novo->getID_Usuario();
        $nrsala = $novo->getID_Usuario() . mt_rand();

        $stm = mysqli_prepare($this->con, $comm_insert);
        $stm->bind_param('sis', $nome, $id_usua, $nrsala);
        $stm->execute();
        //unset($_SESSION['usuario_logado']);
        //header("location: UserPage.php");
        //return 1;
        //} else {
        //  return 0;
        //}
    }

    // public function VerificaUsua($email, $nome)
    // {
    //     $comm = "select EMAIL_USUA,NOME_USUA from USUARIO where EMAIL_USUA = ? and NOME_USUA = ?";
    //     if (!($stm = mysqli_prepare($this->con, $comm))) {
    //         echo "Prepare failed: (" . $this->con->errno . ") " . $this->con->error;
    //     }
    //     $stm->bind_param('ss', $email, $nome);
    //     $stm->execute();

    //     $stm->bind_result($getemail, $getnome);

    //     $stm->store_result();

    //     if ($stm->num_rows == 1) {
    //         return 1;
    //     }
    //     return 0;
    // }
}
