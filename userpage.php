<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Tela de Login</title>

    <meta charset="utf-8">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                    <button onclick="dropDown()" class="dropbtn">
                        Menu
                    </button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="index.html">Home</a>
                        <a href="cadastro-perguntas.html">Cadastrar Questões</a>

                    </div>
                </div>
            </ul>
        </div>
    </nav>



    <!-- ratios de transição entre logar e cadastrar -->
    <div class="principal">
    </div>
    <div>
        <div id="alertsuccess" class="alert alert-success" style="display:none;position:center;width:100%;margin: 0 auto;opacity: 1" role="alert">
            Cadastro: Cadastrado com sucesso!
        </div>
        <div id="alerterror" class="alert alert-danger" style="display:none;position:center;width:100%;margin: 0 auto;opacity: 1" role="alert">
            Cadastro: Usuário já cadastrado!
        </div>
    </div>
    </div>

    <?php
    require './class/Usuario.php';
    require './class/UsuarioDAO.php';

    $loginuser = new Usuario();
    $loginuser->setUsuario($_POST['username']);
    $loginuser->setSenha($_POST['password']);

    $bdDAO = new UsuarioDAO();
    $status = $bdDAO->Login($loginuser);
    echo $status;
    echo "aaaaaaa";
    if ($status == 0) {
        ob_start();
        header('Location: login.php');
        ob_end_flush();
        die();
    }

    // echo  "<script>";
    // echo "document.getElementById('" . $status . "').style.display = 'block';";
    // echo "$('#" . $status . "').animate({opacity: '1'},2500,function(){";
    // echo "$('#" . $status . "').animate({opacity: '0'},1000)});";
    // echo "</script>";
    ?>

    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>