<!DOCTYPE html>
<html>

<head>
    <title>Home - SubDev's</title>

    <meta charset="utf-8">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="icon" href="img/oculos_barba.jpg">


    <?php
    // require 'Usuario.php';
    // require 'DAO.php';
    // $bd = new DAO();
    // $novo = new Usuario();
    // $novo->setID("1");
    // $novo->setEmail("teste@teste.com");
    // $novo->setSenha("teste");
    // if($bd->inserir($novo->getEmail())) {
    //     echo "Dado gravado";
    // } else {
    //     echo "Falha na gravacao";
    // }

    ?>
    <!-- <form action="bdo.php" method="POST">
        <input type="submit" value="aaaa vai"/>
    </form> -->
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
                    <a href="#">
                        <img src="img/oculos_barba.jpg" alt="logo" style="width: 30px;">
                    </a>
                </li>
                <!-- Menu -->
                <div class="dropdown" id="dropId">
                    <button onclick="dropDown()" class="dropbtn">Menu</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="tela-jogo.html">Tela Jogo</a>
                        <a href="ranking.html">ranking</a>
                        <a href="cadastro-perguntas.html">Cadastrar questões</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
    <div class="principal" id="vai" style="min-height:200px">
        <img class="col-md-12" src="img/oculos_barba.jpg" alt="Logo" />
        <h2 class="nome-logo col-md-12">SubDev's</h2>
        <div class="button-h" id="btn">
            <a href="login.php" class="btn btn-primary" role="button" aria-pressed="true">Login</a>
            <!-- <t></t> -->
            <a href="sala.html" class="btn btn-primary" role="button" aria-pressed="true">Entrar em uma sala </a>
        </div>
    </div>

    <footer>
        <div class="icones-redes-sociais">
            © 2019 Copyright: SubDev's<br><br>
            <a href="https://github.com"><img src="https://img.icons8.com/material-outlined/52/000000/github.png"></a>

            <a href="https://twitter.com"><img src="https://img.icons8.com/color/48/000000/twitter.png"></a>

            <a href="https://linkedin.com"><img src="https://img.icons8.com/color/52/000000/linkedin.png"></a>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>

</html>