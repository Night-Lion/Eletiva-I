<?php
    $valor1 = $_POST["valor1"]; //direcionador de dados
    $valor2 = $_POST["valor2"];
    $perimetro = 2 * ($valor1 + $valor2);
    echo "O perímetro do retangulo é: $perimetro";