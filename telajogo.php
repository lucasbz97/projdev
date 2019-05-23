<?php
session_start();
require 'class/JogoControle.php';
if (isset($_POST['submitresp'])) {
    $idjogo = intval($_SESSION['ID_JOGO_ALTERNATIVA']) + 1;
} else {
    $idjogo = $_SESSION['ID_JOGO_ALTERNATIVA'] + 1;
    $idsalajogo = $_SESSION['id_sala_jogo'];
    $respdao = new JogoControle();
    $lista = $respdao->BuscarJogo($idjogo, $idsalajogo);
}
//
//$id_sala_jogo = $_SESSION['id_sala_jogo'];


?>
<!DOCTYPE html>
<html>

<head>
    <title>SubDev's - Game</title>

    <meta charset="utf-8">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="icon" href="img/oculos_barba.jpg">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/libs/google-fonts.css">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">

    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/placar.js"></script>


</head>

<body class="fadeIn" style="overflow:auto">
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
                <div id="dropId" class="botoes" style="margin-top:5px;text-align: center">
                    <a id="botao-placar" class="button btn btn-primary" style="margin-left: 3%;color:white">Placar</a>
                </div>
                <!-- <div class="dropdown" id="dropId">
                    <button onclick="dropDown()" class="dropbtn">Menu</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="index.html">Home</a>
                        <a href="cadastro-perguntas.html">Cadastro Questões</a>
                    </div>
                </div> -->
            </ul>
        </div>
    </nav>
    <div class="container" id="jogo"><br>

        <h2 style="text-align: center">Questão</h2>
        <br>
        <form action="" method="POST">
            <!-- marcando o radio, será identificado como a alternativa correta inserida pelo aluno -->
            <div>
                <?php
                foreach ($lista as &$item) {
                    echo "<h4 class='questoes'>" . $item['questao'] . "</h4>";
                    break;
                }
                unset($item);
                ?>
            </div>
            <div>
                <br>
                <div>
                    <ul style="list-style-type: none">

                        <?php
                        foreach ($lista as &$item) {
                            echo "<li><label><input type='number' min='0' max='5' id='frase-id0' value='0' oninput='numericUpDown()' onkeydown='return false'>A - <span>" . $item['alternativa'] . "</span></li>";
                        }
                        unset($item);
                        ?>

                    </ul>





                    <div class="group" id="btn" style="text-align: center">

                        <button name='submitresp' type="submit" class="button btn btn-primary">Enviar</button>
                        <a href="index.html" class="button btn btn-primary " role="button" aria-pressed="true">Voltar</a>
                    </div><br>

                    </select>
                </div>
        </form>

        <div>
            <section class="placar card-body" style="text-align: center">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th scope="col">Posição</th> -->
                            <th scope="col">Jogador</th>
                            <th scope="col">No. de pontos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td>1º</td> -->
                            <td>joaozin</td>
                            <td>99999</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>

        <script>
            function numericUpDown() {
                var i = 0;
                var o = 0;
                for (i; i < 5; i++) {
                    o += parseInt($("#frase-id" + i).val());
                    if (o > 5) {
                        event.target.value -= 1;
                        o = 0;
                    }
                }
            }
        </script>

    </div>

</body>

</html>