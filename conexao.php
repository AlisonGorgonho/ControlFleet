<?php

    $hostname = "us-cdbr-iron-east-05.cleardb.net";
    $user = "b589e70158ec63";
    $password = "000a0452";
    $database = "heroku_056bc1caf0a6027";
    $conexao = mysqli_connect($hostname, $user, $password, $database);

    if(!$conexao){
        print "Falha na conexão com o banco de dados: " + $database;
    }

?>