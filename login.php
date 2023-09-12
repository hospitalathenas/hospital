<?php

session_start();

if(empty($_POST) or (empty($_POST["email"] or (empty($_POST["senha"]))))){
    header("location: index.php");  
}

include("config.php");

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
}

$sql = "SELECT * FROM usuarios
        WHERE nome = '{$nome}'
        AND email = '{$email}'
        AND senha = '{$senha}' LIMIT 1";

$res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if($qtd==1){
        $_SESSION["nome"] = $nome;
        $_SESSION["email"] = $email;
        $_SESSION["senha"] = $senha;
        $_SESSION["nivel"] = $row->nivel;
        if ($row->nivel == 1) {
            header("location: home.php");
        }
        else if ($row->nivel == 0){
            header("location: home2.php");
        }
    } else {
        echo "<script>alert('Usuário ou senha incorretos')</script>";
        header("location: index.php");
    }
    exit();
?>