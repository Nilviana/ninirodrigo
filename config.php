<?php

    $dbhost = 'localhost' ;
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-aula';

    $conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

    //if($conexao->connect_errno)
    //{
      //  echo "Erro";
    //}
    //else
    //{
      //  echo "conexão efetuada com Sucesso";
    //}
?>