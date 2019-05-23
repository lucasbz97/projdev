<?php
include('login.php'); // Includes Login Script

if (isset($_SESSION['usuario_logado'])) {
    header("location: UserPage.php");
    //echo $_SESSION['usuario_logado'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Tela de Login</title>

    <meta charset="utf-8">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js?2"></script>
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
                    </div>
                </div>
            </ul>
        </div>
    </nav>



    <!-- ratios de transição entre logar e cadastrar -->
    <div class="principal" style="margin-top:-45px">
        <div class="login-html">
            <input required id="tab-1" type="radio" name="tab" class="logar" checked>
            <label for="tab-1" class="tab">Fazer login</label>

            <input required id="tab-2" type="radio" name="tab" class="cadastrar">
            <label for="tab-2" class="tab">Cadastrar</label>

            <!-- Login de usuário -->
            <div class="login-form">
                <div class="logar-htm">
                    <form action="" method="post">
                        <div class="group">
                            <label for="user" class="label">Nome de usuário</label>
                            <input name="userlogin" required id="user" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Senha</label>
                            <input name="passwordlogin" required id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <input required id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Mantenha-me conectado</label>
                        </div>
                        <div class="group" id="btn">
                            <button name="submitlogin" type="submit" class="button btn btn-primary" value="login">Entrar</button><br>
                            <a href="index.php" class="button btn btn-primary " role="button" aria-pressed="true">Voltar</a>
                        </div>
                        <div class="foot-lnk">
                            <a href="#esqueceu">Esqueceu a senha?</a>
                        </div>
                    </form>
                </div>



                <form action="" method="post">
                    <!-- Cadastramento de usuário -->
                    <div class="cadastrar-htm">
                        <div class="group">
                            <label for="username" class="label">Nome de usuário</label>
                            <input required name="usercad" id="username" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="password" class="label">Senha</label>
                            <input required name="passwordcad" id="password" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <label for="password2" class="label">Repita a senha</label>
                            <input required id="password2" type="password" class="input" data-type="password" oninput="passwordValidate()">
                        </div>
                        <div class="group">
                            <label for="email" class="label">Endereço de email</label>
                            <input required name="emailcad" id="email" type="email" class="input">
                        </div>
                        <div class="group">
                            <button name="submitcad" id="submit" type="submit" class="button" value="cadastro" disabled style="opacity:0.5">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <div id="alertsuccess" class="alert alert-success" style="display:none;position:center;width:100%;margin: 0 auto;opacity: 1" role="alert">
            </div>
            <div id="alerterror" class="alert alert-danger" style="display:none;position:center;width:100%;margin: 0 auto;opacity: 1" role="alert">
            </div>
            <script>
                AlertMessage(<?php echo $alert; ?>)
            </script>
        </div>
    </div>
</body>

</html>