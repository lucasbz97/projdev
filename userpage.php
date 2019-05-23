<?php
session_start();
require 'class/Sala.php';
require 'class/SalaDAO.php';
//echo $_SESSION['usuario_logado'];
$id_usua = $_SESSION['id_usuario_logado'];
$nome_usua = $_SESSION['usuario_logado'];

if (isset($_POST['criarsala'])) {
    $novasala = new Sala();
    $novasala->setNome_SALA($_POST['nome_sala']);
    $novasala->setID_Usuario($id_usua);

    $bdosala = new SalaDAO();
    $bdosala->InserirSala($novasala);
}

$salas_erro = "";
$salas_div = "";

$daosala = new SalaDAO();
$lista = $daosala->BuscarSalas(intval($id_usua));
if ($lista == null) {
    $salas_erro = "Nenhuma sala criada";
} else {
    foreach ($lista as $item) {

        $salas_div .= "<div class='col-xs-12 col-sm-12 col-md-6 col-lg-4' style='float:left'>";
        $salas_div .= "<div class='card'>";
        $salas_div .= "<div class='card-body'>";
        $salas_div .= "<h6 style='text-align:center;margin-top:30px' class='card-title'>" . $item['nr'] . "</h6>";
        $salas_div .= "<h4 style='text-align:center;margin-top:30px' class='card-title'>" . $item['nome'] . "</h4>";
        $salas_div .= "<form action='cadastrosala.php' method='post'>";
        $salas_div .= "<button class='btn btn-primary' style='text-align:center;margin-top:30px;width:100%;' name='editesala' type='submit' role='button' value='" . $item['id'] . "'>Editar Sala</button>";
        $salas_div .= "</form>";
        $salas_div .= "</div>";
        $salas_div .= "</div>";
        $salas_div .= "</div>";
    }
    unset($item);
}
$salas_div .= "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12' style='height:2rem;width:1rem'></div>";
$salas_div .= "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12' style='float:left;'>";
$salas_div .= "<div class='card col-xs-12 col-sm-12 col-md-6 col-lg-4' style='background-color:#efefef'>";
$salas_div .= "<div class='card-body'>";
$salas_div .= "<form action='' method='post'>";
$salas_div .= "<input type='text' name='nome_sala' placeholder='Nova Sala' style='width:100%;text-align:center;margin-top:30px' class='card-title'>";
$salas_div .= "<button style='text-align:center;margin-top:30px;width:100%;' name='criarsala' type='submit' role='button' value='nova_sala' class='btn btn-primary'>Criar Sala</button>";
$salas_div .= "</form>";
$salas_div .= "</div>";
$salas_div .= "</div>";
$salas_div .= "</div>";
//$sala = new Sala();
unset($_POST);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Criar Sala</title>

    <meta charset="utf-8">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">

    <script src="js/main.js"></script>
    <link rel="icon" href="img/oculos_barba.jpg">
</head>

<body style="overflow:auto">
    <!-- Menu com bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="#">SubDev's</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="index.html">
                        <img src="img/oculos_barba.jpg" alt="logo" style="width: 30px;">
                    </a>
                </li>
                <!-- Menu -->
                <div class="dropdown" id="dropId">
                    <span>Bem vindo, <?php echo $nome_usua; ?></span>
                    <button onclick="dropDown()" class="dropbtn">Menu</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="UserPage.php">Home</a>
                        <a href="logout.php">Sair</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
    <div style="margin: 0 auto;width:80%;margin-top:60px">
        <h3 style="position:center;text-align:center"><?php echo $salas_erro; ?></h3>
        <div class="container">
            <div class="row">
                <?php echo $salas_div; ?>
            </div>
        </div>
    </div>
</body>

</html>