<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



# DAdos para a conexâo com o banco de dados

$servidor = 'localhost:3306'; #nome DNS ou IP do seu servidor HTTP
$usuario = 'dashboar_aquino'; #nome do usuário para acesso no MySQL
$senha = 'HzDzWjFouc57'; #senha de acesso
$banco = 'dashboar_dlivre'; #nome do banco de dados


#executa a conexão com o MySQL


$con = mysqli_connect($servidor,$usuario,$senha,$banco);

mysqli_set_charset($con,"utf8");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
/*OBSOLETO mysql_connect($servidor, $usuario, $senha)
        or die("Não conseguimos a abdução requisitada:".  mysql_error());

#seleciona o banco de dados que deseja utilizar
mysql_select_db($banco);*/
?>
