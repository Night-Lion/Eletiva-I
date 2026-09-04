<?php
    $valor1 = $_POST["valor1"]; //direcionador de dados
    $valor2 = $_POST["valor2"];
    $media = ($valor1 + $valor2) / 2;
    echo "O valor da média é: $media";