<!DOCTYPE html>
<html>

<head>
    <title>Cadastrar Questões</title>

    <meta charset="utf-8">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">

    <link rel="icon" href="img/oculos_barba.jpg">
    
    <?php

    require 'questoes.php';
    require 'DAO.php';
    $bd = new DAO();
    $novo = new questoes();
    $novo->setQuestao("testesteste");
    $novo->setAlternativa("aaaa");
    $novo->setCheckbox(1);
    if($bd->inserir($novo->getQuestao())) {
        echo "Dado gravado";
    } else {
        echo "Falha na gravacao";
    }
    
    ?>
    
</head>

<body class="fadeIn">
    <!-- Menu com bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="#">SubDev's</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a href="index.html">Home</a    >
                        <a href="regras.html">Regras</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
    <div class="principal">
        <h4 style="text-align: center">Cadastro questões</h4>
        <form>
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">

                <!-- marcando o radio, será identificado como a alternativa correta inserida pelo professor -->

                
                <input id="id-radio" type="radio" name="alternativa" value="sim" /> A
                <input id="text" type="text" class="form-control" name="texto">
                <br />
                <input id="id-radio" type="radio" name="alternativa" value="sim" /> B
                <input id="text" type="text" class="form-control" name="texto">
                <br />
                <input id="id-radio" type="radio" name="alternativa" value="sim" /> C
                <input id="text" type="text" class="form-control" name="texto">
                <br />
                <input id="id-radio" type="radio" name="alternativa" value="sim" /> D
                <input id="text" type="text" class="form-control" name="texto">
                <br />
                <input id="id-radio" type="radio" name="alternativa" value="sim" /> E
                <input id="text" type="text" class="form-control" name="texto">
                <br />
                <div class="group" id="btn" style="text-align: center">
                    <a href="cadastro.html" class="button btn btn-primary">Salvar</a><t></t>
                    <a href="index.html" class="button btn btn-primary " role="button" aria-pressed="true">Voltar</a>
                </div>
                
            </div>
        </form>
    </div>

    <script src="js/main.js"></script>

</body>

</html>
