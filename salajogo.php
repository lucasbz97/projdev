<?php
session_start();
require 'class/SalaDAO.php';

if (isset($_POST['submitsala'])) {
    if (empty($_POST['nrsala'])) {
        $alert = json_encode(array("alert" => '0', "mensagem" => "Número de sala inválido!"));
    } else {
        $salajogo = $_POST['nrsala'];
        $bdDAO = new SalaDAO();
        $result_sala = $bdDAO->BuscarSalasJogo($salajogo);
        if ($result_sala == null) {
            $alert = json_encode(array("alert" => '0', "mensagem" => "Número da sala inválido!"));
        } else {
            header("location: telajogo.php");
            die();
        }
    }
}
$_SESSION['ID_JOGO_ALTERNATIVA'] = 0;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sala - SubDev´s</title>

    <meta charset="utf-8">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">

    <script src="js/main.js"></script>
    <link rel="icon" href="img/oculos_barba.jpg">
</head>

<body class="fadeIn">
    <!-- Menu com bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="#">SubDev's</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="index.html" alt="logo-home">
                        <img src="img/oculos_barba.jpg" alt="logo" style="width: 30px;">
                    </a>
                </li>
                <!-- Menu -->
                <div class="dropdown" id="dropId">
                    <button onclick="dropDown()" class="dropbtn">Menu</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="index.html">Home</a>
                        <a href="cadastro-perguntas.html">Cadastro questões</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>

    <div class="principal" id="vai">
        <div id="alerterror" class="alert alert-danger" style="display:none;margin-top:20px;position:center;width:100%;margin: 0 auto;opacity: 1" role="alert"></div>
        <script>
            AlertMessage(<?php echo $alert; ?>)
        </script>
        <img class="logo-home" src="img/oculos_barba.jpg" alt="Logo">
        <h2 class="nome-logo col-md-12">SubDev's</h2>
        <form action="" method='post' class="navbar-form navbar-left">
            <div class="form-group">
                <input name='nrsala' type="text" class="form-control" placeholder="Digite o número da sala" required>
            </div>
            <button name='submitsala' type="submit" class="button btn btn-primary">Entrar</button>
            <a href="index.php" class="button btn btn-primary" role="button" aria-pressed="true">Voltar</a>
        </form>
    </div>


</body>

</html>