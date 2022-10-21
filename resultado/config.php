<?php
   $dbHost= 'Localhost';
   $username = 'root';
   $dbPassword = '';
   $dbName = 'ativos-22';

   $conexao = new mysqli($dbHost,$username,$dbPassword,$dbName);

   if($conexao->connect_errno)
   {
    echo "erro";
   }
   else 
   {
    echo "Conexão efetudada com sucesso";
   }