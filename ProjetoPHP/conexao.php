<?php
    $str = "mysql:host=localhost;dbname=ProjetoPHP";
    $user = "root";
    $pwd = "";

    try{
        $con = new PDO($str, $user, $pwd);
    } catch(PDOException $e){
        die("Não foi possível conectar ao Banco !");
    }