<?php
class UsuarioDAO
{
    private $con;
    function __construct()
    {
        $this->con = mysqli_connect("localhost", "root", "", "projdev");
        if (!$this->con) {
            die("<h1>Site Indispon?vel</h1>");
        }
    }

    public function Login($login)
    {
        $nome = $login->getUsuario();
        $senha = $login->getSenha();

        $comm_query = "select ID_USUA,NOME_USUA,SENHA_USUA from USUARIO where NOME_USUA = ? AND SENHA_USUA = ?";

        $stm = mysqli_prepare($this->con, $comm_query);
        $stm->bind_param('ss', $nome, $senha);
        $stm->execute();

        $stm->bind_result($result_id,$result_nome, $result_senha);
        $stm->store_result();

        if ($stm->num_rows == 1) {
            $stm->fetch();
            $_SESSION['id_usuario_logado'] = $result_id;
            $_SESSION['usuario_logado'] = $result_nome;
            return 1;
        }
        return 0;
    }

    public function Inserir($novo)
    {
        if ($this->VerificaUsua($novo->getEmail(),$novo->getUsuario()) == 0) {
            $comm_insert = "insert into usuario (NOME_USUA,EMAIL_USUA,SENHA_USUA) values(?,?,?)";
            $nome = $novo->getUsuario();
            $email = $novo->getEmail();
            $senha = $novo->getSenha();

            $stm = mysqli_prepare($this->con, $comm_insert);
            $stm->bind_param('sss', $nome, $email, $senha);
            $stm->execute();
            unset($_SESSION['usuario_logado']);
            //header("location: UserLogin.php");
            return 1;
        } else {
            return 0;
        }
    }

    public function VerificaUsua($email, $nome)
    {
        $comm = "select EMAIL_USUA,NOME_USUA from USUARIO where EMAIL_USUA = ? and NOME_USUA = ?";
        if (!($stm = mysqli_prepare($this->con, $comm))) {
            echo "Prepare failed: (" . $this->con->errno . ") " . $this->con->error;
        }
        $stm->bind_param('ss', $email, $nome);
        $stm->execute();

        $stm->bind_result($getemail, $getnome);

        $stm->store_result();

        if ($stm->num_rows == 1) {
            return 1;
        }
        return 0;
    }
}
