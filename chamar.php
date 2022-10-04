<?php



/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */




#inserir os valores do formulário nas variáveis

$FormQuem = $_REQUEST["quem"];
$FormOQue = $_REQUEST["oQue"];
$FormOnde = $_REQUEST["onde"];
$FormData = $_REQUEST["data"];
$FormQuanto = $_REQUEST["quanto"];
$FormComo = $_REQUEST["como"];
$FormPorque = $_REQUEST["porque"];






#verifica o sucesso da operação

ini_set('display_errors', 1);

error_reporting(E_ALL);

$from = "contato@queroestudardireito.com.br";

$to = "desenho.art.br@gmail.com";

$subject = $FormQuem;

$message = '
  Cliente solicitando contato através do formulário do site
  
  Quem: 
  '. $_REQUEST["quem"] . '
  
  O que: 
  ' . $_REQUEST["oQue"] . '
  
  Onde: 
  ' . $_REQUEST["onde"]. '
  
  Data: 
  ' . $_REQUEST["data"] . '
  
  Quanto: 
  ' . $_REQUEST["quanto"] . '
  
  Como: 
  ' . $_REQUEST["como"] . '
  
  Porque: 
  ' . $_REQUEST["porque"] . '
  
';;

$headers = "De:". $_REQUEST["oQue"];


    #se a operação foi realizada com sucesso, informa na tela
    mail($to, $subject, $message, $headers);
             
    




?>