<?php
session_start();
require 'class/Sala.php';
require 'class/SalaDAO.php';
//echo $_SESSION['usuario_logado'];
$id_usua = $_SESSION['id_usuario_logado'];
$nome_usua = $_SESSION['usuario_logado'];

$salas_erro = "";
$salas_div = "";

$bdsala = new SalaDAO();
$lista = $bdsala->BuscarSalas($id_usua);
if ($lista == null) {
    $salas_div = "Nenhuma sala criada";
} else {
    foreach ($lista as &$item) {
        $salas_div .= "<div class='col-xs-12 col-sm-12 col-md-6 col-lg-4' style='float:left'>";
        $salas_div .= "<div class='card'>";
        $salas_div .= "<div class='card-body'>";
        $salas_div .= "<h5 style='text-align:center;margin-top:30px' class='card-title'>" . $item['nome'] . "</h5>";
        $salas_div .= "<a href='#' style='text-align:center;margin-top:30px;width:100%;' class='btn btn-primary'>Editar Sala</a>";
        $salas_div .= "</div>";
        $salas_div .= "</div>";
        $salas_div .= "</div>";
    }
    unset($item);
    $salas_div .= "<div class='col-xs-12 col-sm-12 offset-md-2 offset-lg-4 col-md-7 col-lg-4' style='float:left;margin-top: 60px'>";
    $salas_div .= "<div class='card' style='background-color:#efefef'>";
    $salas_div .= "<div class='card-body'>";
    $salas_div .= "<h5 style='text-align:center;margin-top:30px' class='card-title'>Nova Sala</h5>";
    $salas_div .= "<a href='#' style='text-align:center;margin-top:30px;width:100%;' class='btn btn-primary'>Criar Sala</a>";
    $salas_div .= "</div>";
    $salas_div .= "</div>";
    $salas_div .= "</div>";
}
//$sala = new Sala();
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
                    <button onclick="dropDown()" class="dropbtn">Menu</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="index.html">Home</a>
                        <a href="regras.html">Regras</a>
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