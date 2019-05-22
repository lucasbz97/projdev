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

<body>
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
                        <a href="regras.html">Regras</a>

                    </div>
                </div>
            </ul>
        </div>
    </nav>



    <!-- ratios de transição entre logar e cadastrar -->
    <div id="alertsuccess" class="alert alert-success" style="display:none" role="alert">
        Cadastrado com sucesso!
    </div>
    <div id="alerterror" class="alert alert-danger" style="display:none" role="alert">
        Usuário já cadastrado!
    </div>
    <div class="principal">
        <div class="login-html">
            <input required id="tab-1" type="radio" name="tab" class="logar" checked>
            <label for="tab-1" class="tab">Fazer login</label>

            <input required id="tab-2" type="radio" name="tab" class="cadastrar">
            <label for="tab-2" class="tab">Cadastrar</label>

            <!-- Login de usuário -->
            <div class="login-form">
                <div class="logar-htm">
                    <div class="group">
                        <label for="user" class="label">Nome de usuário</label>
                        <input required id="user" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Senha</label>
                        <input required id="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <input required id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Mantenha-me conectado</label>
                    </div>
                    <div class="group" id="btn">
                        <button type="button" class="button btn btn-primary">Entrar</button><br>
                        <a href="index.html" class="button btn btn-primary " role="button" aria-pressed="true">Voltar</a>
                    </div>
                    <div class="foot-lnk">
                        <a href="#esqueceu">Esqueceu a senha?</a>
                    </div>
                </div>

                <form action="login.php" method="post">
                    <!-- Cadastramento de usuário -->
                    <div class="cadastrar-htm">
                        <div class="group">
                            <label for="username" class="label">Nome de usuário</label>
                            <input required name="username" id="username" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="password" class="label">Senha</label>
                            <input required name="password" id="password" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <label for="password2" class="label">Repita a senha</label>
                            <input required id="password2" type="password" class="input" data-type="password" oninput="passwordValidate()">
                        </div>
                        <div class="group">
                            <label for="email" class="label">Endereço de email</label>
                            <input required name="email" id="email" type="email" class="input">
                        </div>
                        <div class="group">
                            <input required id="submit" type="submit" class="button" value="Cadastrar" disabled style="opacity:0.5">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    require './class/Usuario.php';
    require './class/UsuarioDAO.php';

    if ($_POST) {
        //echo  "<script>alert('');</script>";
        //$novouser =  Usuario();
        $novouser = new Usuario();
        $novouser->setUsuario($_POST['username']);
        $novouser->setEmail($_POST['email']);
        $novouser->setSenha($_POST['password']);

        $bdDAO = new UsuarioDAO();
        $status = $bdDAO->Inserir($novouser);

        echo  "<script>";
        echo "document.getElementById('".$status."').style.display = 'block';";
        echo "</script>";
        //echo  "<script>alert('".$novouser->getUsuario()."');</script>";
    }
    ?>

    <footer>
        <!-- Rodapé da pagina -->
        <div class="footer-copyright text-center py-3" id="rodape">
            © 2019 Copyright: SubDev's
        </div>

    </footer>

    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>