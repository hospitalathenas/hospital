<?php

session_start();

    if(empty($_SESSION)){
        header("location: index.php");    
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <script src="tarefasjs.js"></script>
    <title>Hospital Athenas</title>
</head>

<body>
    <header>

        <div class="enquadramento">
        <a href="logout.php"><img src="assets/sair.png"></a>

        <div class="container-usuario">
            <img class="icon" src="assets/user.png">
            <p>
            <?php
                echo $_SESSION["nome"];
            ?>  
            </p>
        </div>

        </div>

        

        <div class="container-icons">
        <a href="calendario2.php">
                <img src="assets/calendario.png">
            </a>
            <a href="tarefas2.php">
                <img class="tarefaicon" src="assets/tarefas.png">
            </a>
        </div>

    </header>

    <div class="linha"></div>

    <main>
        <img class="homeimg" src="assets/homeimg.png">
        <div class="side-container">
        <div class="data">
            <div class="dia">
                <p class="data-num">08</p>
                <p class="data-text">Dia</p>
            </div>
            <div class="mes">
                <p class="data-num">11</p>
                <p class="data-text">Mês</p>
            </div>
        </div>
        <div class="quadrado-camada2-cima">
                <div class="quadrado-camada3-cima">
                    <div class="centralizacao-status">
                        <div class="color-status">
                            <div class="bolinha"></div>
                            <p>Em andamento</p>
                        </div>

                    </div>
                    <div class="conteudo-status">
                        <img class="status-icon" src="assets/estetoscopio.png">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias eius recusandae dicta eveniet
                            rem, optio expedita facilis repudiandae doloremque. Fugiat cum modi soluta illo corrupti
                            nisi odit veniam neque harum.</p>
                    </div>     
                </div>
        </div>
        <div class="quadrado-camada2-cima">
                <div class="quadrado-camada3-cima">
                    <div class="centralizacao-status">
                        <div class="color-status">
                            <div class="bolinha"></div>
                            <p>Em andamento</p>
                        </div>

                    </div>
                    <div class="conteudo-status">
                        <img class="status-icon" src="assets/estetoscopio.png">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias eius recusandae dicta eveniet
                            rem, optio expedita facilis repudiandae doloremque. Fugiat cum modi soluta illo corrupti
                            nisi odit veniam neque harum.</p>
        
        

    </main>

    <footer></footer>

</body>
</html>