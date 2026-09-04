<?php
    $valor1 = $_POST["valor1"]; //direcionador de dados
    $temperatura = ($valor1 - 32) * 5 / 9;
    echo "Temperatura em Celsius (C°): $temperatura";
?>