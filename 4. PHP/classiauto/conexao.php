<?php
  $user = 'root';
  $pass = '';
  $database = 'db_classificados1';
  $host = 'localhost';

  // Conectar ao Banco de dados
  $_conn = mysqli_connect($host, $user, $pass) 
    or die("Erro estabelecer conexão com o banco de dados");
  
  // Selecionar um banco de dados
  mysqli_select_db($_conn, $database);

  ?>