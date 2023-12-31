<?php

session_start();

    if(empty($_SESSION) or ($_SESSION['nivel']==0)){
        header("location: index.php");    
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tarefas.css">
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
            <a href="calendario.php">
                <img src="assets/calendario.png">
            </a>
            <a href="home.php">
                <img src="assets/casa.png">
            </a>
        </div>

    </header>

    <div class="linha"></div>

    <div class="tarefas-box">
        <p>Tarefas</p>
        <div class="container-procurar-tarefas">
            <input type="text" class="input-search" placeholder="Buscar tarefas" />
            <img src="assets/lupa.png" class="lupa-icon" alt="Buscar" />
        </div>
    </div>
    <main>
        <div class="quadrado-camada1">

            <div class="quadrado-camada2-cima">

                <div class="quadrado-camada3-add-task">
                    <a href="#demo-modal">
                        <img class="img-adicao" src="assets/adição.png">
                    </a>

                    <div id="demo-modal" class="modal">
                        
                        <div class="content">
                            <a class="x-btn" href="tarefas.php">X</a>                     
                          <h1>NOVAS TAREFAS</h1>
                          <div class="text-areas">
                            <input class="text-box1" type="text" placeholder=" Destinatário">
                          <input class="text-box1" type="text" placeholder="Título">
                          <input class="text-box2" type="text" placeholder="Descrição da Tarefa">
                          </div>
                          <div class="text-area2">
                            <input class="hora" type="datetime" placeholder="00:00">
                            <input class="dia" type="date">
                            <select class="status">
                                <option>Status</option>
                                <option> Pendente</option>
                                <option>Em Andamento</option>
                                <option> Concluido</option>
                            </select>
                          </div>
                            <a class="send" href="#">ENVIAR</a>
                        </div>
                      </div>

                </div>
                
            </div>

            <div class="quadrado-camada2-baixo">

                <div class="quadrado-camada3-baixo">

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

        </div>
        </div>
        <div class="quadrado-camada1">

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

            <div class="quadrado-camada2-baixo">

                <div class="quadrado-camada3-baixo">
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

        </div>

        <div class="quadrado-camada1">
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
            <div class="quadrado-camada2-baixo">
                <div class="quadrado-camada3-baixo">
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
        </div>
    </main>
    <div class="down-arrow">
        <img src="assets/down-arrow.png">
    </div>
</body>

</html>