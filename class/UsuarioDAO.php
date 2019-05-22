<?php
class UsuarioDAO
{
    private $con;
    function __construct()
    {
        $this->con = mysqli_connect("localhost", "root", "", "projdev");
        if (!$this->con) {
            die("<h1>Site Indisponível</h1>");
        }
    }

    public function Select($email)
    {
        $comm = "select EMAIL_USUA from USUARIO where EMAIL_USUA = ?";
        if (!($stm = mysqli_prepare($this->con, $comm))) {
            echo "Prepare failed: (" . $this->con->errno . ") " . $this->con->error;
        }
        $stm->bind_param('s', $email);
        $stm->execute();

        $stm->bind_result($getemail);
        while ($stm->fetch()) {
            return 1;
        }
        return 0;
    }

    public function Inserir($novo)
    {
        if ($this->Select($novo->getEmail()) == 0) {
            $comm_insert = "insert into usuario (NOME_USUA,EMAIL_USUA,SENHA_USUA) values(?,?,?)";
            $nome = $novo->getUsuario();
            $email = $novo->getEmail();
            $senha = $novo->getSenha();

            $stm = mysqli_prepare($this->con, $comm_insert);
            $stm->bind_param('sss', $nome, $email, $senha);
            $stm->execute();
        } else {
            return "alerterror";
        }
        return "alertsuccess";
    }
}
