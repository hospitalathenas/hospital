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
    <link rel="stylesheet" href="calendario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
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
        <a href="home.php">
                <img src="assets/casa.png">
            </a>
          <a href="tarefas.php">
                <img class="tarefaicon" src="assets/tarefas.png">
            </a>
        </div>

    </header>

    <div class="linha"></div>
    
    <div class="tarefas-box">
        <p>Calendário</p>     
        <div class="container-procurar-tarefas">
            <input type="text" class="input-search" placeholder="Buscar tarefas"/>
            <img src="assets/lupa.png" class="lupa-icon" alt="Buscar"/>
        </div>
    </div>

    <main> 
        <div class="color-calendar">

            <div class="month-indicator">
                <img class="arrow-icon" src="assets/seta2.png">
                <time datetime="2020-02" class="title-mes"> JUNHO</time>
                <img class="arrow-icon" src="assets/seta1.png">
              </div>
           <div class="calendar">
                
                <div class="day-of-week">
                  <div>Seg</div>
                  <div>Ter</div>
                  <div>Qua</div>
                  <div>Qui</div>
                  <div>Sex</div>
                  <div>Sab</div>
                  <div>Dom</div>
                </div>
                <div class="date-grid">
                  <button class="in-btn-class">  
                    <time datetime="2020-02-28">30</time>
                  </button>
                  <button class="in-btn-class">  
                    <time datetime="2020-02-28">31</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2010-02-01">01</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-02">02</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-03">03</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-04">04</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-05">05</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-06">06</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-07">07</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-08">08</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-09">09</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-10">10</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-11">11</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-12">12</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-13">13</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-14">14</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-15">15</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-16">16</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-17">17</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-18">18</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-19">19</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-20">20</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-21">21</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-22">22</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-23">23</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-24">24</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-25">25</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-26">26</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-27">27</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-28">28</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-28">29</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-28">30</time>
                  </button>
                  <button class="btn-class">  
                    <time datetime="2020-02-28">31</time>
                  </button>
                  <button class="in-btn-class">  
                    <time datetime="2020-02-28">01</time>
                  </button>
                  <button class="in-btn-class">  
                    <time datetime="2020-02-28">02</time>
                  </button>
                </div>               
        </div>
    </div>  

        <div class="tarefas">
          <div class="bolinha"></div>
            <div class="tarefas-camada2">
              
            </div>
            <div class="tarefas-camada2">
            
            </div>
            <div class="tarefas-camada2">
              
            </div>
            <div class="tarefas-camada2">
              
            </div>
            <div class="tarefas-camada2">
              
            </div>
            <div class="tarefas-camada2">
              
            </div>
            <div class="tarefas-camada2">
              
            </div>
        </div>
    </main>