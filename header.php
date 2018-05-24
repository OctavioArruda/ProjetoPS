<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Phantasy Star Mania</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="_css/open-iconic.min.css">
    <link rel="stylesheet" href="_css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="_css/char.css">
    <link rel="stylesheet" type="text/css" href="_css/styles.css">
    <!-- O CSS trabalha em cascata, o que vem em baixo tende a substituir o que está em cima -->
    <!-- Cuidado na hora que tu for referenciar os links do CSS porque tu pode ter um resultado inesperado -->
    <!-- Coloca as bibliotecas antes do teu código customizado -->
</head>
<body>
    <div id="up-header">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <!--
                        <p class="headertext">It's a battle <br>against the dark.</p>
                    -->
                    <p class="headertext">We battle for freedom!</p>
                </div>

                <ul class="social-list">
                    <li>
                        <a href="https://www.instagram.com/oaarruda/?hl=pt-br" class="fab fa-instagram"></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/_Schifer1" class="fab fa-twitter-square"></a>
                    </li>
                    <li>
                        <a href="#" class="fas fa-envelope-square"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <header id="header" class="bg-dark">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="logo">Phantasy Star Mania</h1>

                <nav class="navbar navbar-expand-lg nav-light">
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <!-- <li class="nav-item">
                            <a href="characters.php" class="nav-link">
                                <button type="submit" class="btn btn-primary">Personagens</button>
                            </a>
                            </li> -->
                            <!-- O <button type="submit"></button> serve pra enviar um formulário, não é pra usar como link -->
                            <li class="nav-item">
                                <a href="characters.php" class="btn btn-primary nav-link">Personagens</a>
                            </li>
                            <li class="nav-item">
                                <a href="characters.php" class="btn btn-primary nav-link">História</a>
                            </li>
                            <li class="nav-item">
                                <a href="characters.php" class="btn btn-primary nav-link">Curiosidades</a>
                            </li>
                            <li class="nav-item">
                                <a href="villains.php" class="btn btn-primary nav-link">Vilões</a>
                            </li>
                            <li class="nav-item">
                                <a href="characters.php" class="btn btn-primary nav-link">Contato</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- nav item dropdown code
                <li class="nav-item dropdown"> -->
                <!-- Menu dropdown -->
                <!-- <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
                <div class="dropdown-menu">
                <a href="index.php" class="dropdown-item">Página inicial</a>
                <a href="characters.php" class="dropdown-item">Personagens</a>
                <a href="villains.php" class="dropdown-item">Vilões</a>
                <a href="#" class="dropdown-item">História</a>
                <a href="#" class="dropdown-item">Curiosidades</a> -->
            </div>
        </div>
    </header>
