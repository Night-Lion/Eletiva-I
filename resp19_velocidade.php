<?php
    $valor1 = $_POST["valor1"]; //direcionador de dados
    $valor2 = $_POST["valor2"];
    $velocidade = $valor1 / $valor2;
    echo "A velocidade média é: $velocidade Km/h";