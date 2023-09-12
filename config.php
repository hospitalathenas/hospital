<?php

$conn = new mysqli("localhost", "root", "", "hospital");

if ($conn->connect_error) {
    die("Erro de conexão" . $conn->connect_error);
}

?>