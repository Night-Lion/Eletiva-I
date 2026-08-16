<?php
    $valor1 = $_POST["valor1"]; //direcionador de dados
    $valor2 = $_POST["valor2"];
    $potencia = $valor1 ** $valor2;
    echo "A potencia é: $potencia";