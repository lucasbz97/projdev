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
    <div class="principal">
        <h3 style="position:center;text-align:center"><?php echo $salas_erro; ?></h3>
        <form class="form-sala">
            <h4 style="text-align: center">Criar sala</h4>
            <div class="form-group">

                <label id="nome-sala">Nome da Sala</label><input type="text" class="form-control nome-sala"><br>
                <label id="id-sala">ID da Sala</label><input type="text" class="form-control id-sala">
            </div>
            <div class="form-group">
                <div class="group" id="btn" style="text-align: center">
                    <a href="cadastro.html" class="button btn btn-primary">Salvar</a>
                    <t></t>
                    <a href="index.html" class="button btn btn-primary " role="button" aria-pressed="true">Voltar</a>
                </div>
            </div>
        </form>
    </div>
    <!--<footer>
        <div class="icones-redes-sociais">
            © 2019 Copyright: SubDev's<br><br>
            <a href="https://github.com"><img src="https://img.icons8.com/material-outlined/52/000000/github.png"></a>

            <a href="https://twitter.com"><img src="https://img.icons8.com/color/48/000000/twitter.png"></a>

            <a href="https://linkedin.com"><img src="https://img.icons8.com/color/52/000000/linkedin.png"></a>
        </div>
    </footer> -->
</body>

</html>