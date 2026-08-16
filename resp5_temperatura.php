<?php
    $valor1 = $_POST["valor1"]; //direcionador de dados
    $temperatura = ($valor1 * 1.8) + 32;
    echo "Temperatura em Fahrenheit (F°): $temperatura";