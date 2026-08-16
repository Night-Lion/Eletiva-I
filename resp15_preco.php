<?php
    $valor1 = $_POST["valor1"]; //direcionador de dados
    $valor2 = $_POST["valor2"];
    $preco = $valor1 * (1 - ($valor2 / 100));
    echo "O preço com desconto é: R$ $preco";