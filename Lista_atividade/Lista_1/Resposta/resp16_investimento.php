<?php
    $valor1 = $_POST["valor1"]; //direcionador de dados
    $valor2 = $_POST["valor2"];
    $valor3 = $_POST["valor3"];
    $montante = $valor1 * (1 + ($valor2 / 100)) * $valor3;
    echo "O montante depois de $valor3 anos é: R$ $montante";
?>