<?php
    $valor1 = $_POST["valor1"]; //direcionador de dados
    $hora = $valor1 * 24;
    $minuto = $hora * 60;
    $segundo = $minuto * 60;
    echo "O tempo em horas é: $hora h <br>";
    echo "O tempo em minutos é: $minuto m <br>";
    echo "O tempo em segundos é: $segundo s <br>";
?>