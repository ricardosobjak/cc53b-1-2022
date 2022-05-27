<?php 
  //print_r($_POST);
  //print_r($_GET);
  //print_r($_REQUEST);

  $senhasConferem = $_REQUEST['senha'] 
            == $_REQUEST['senhaConfere'];

  if(!$senhasConferem) {
    $mensagem = "As senhas não conferem!";
    include("exemplo3.php");
  } else {
    $mensagem = "Cadastro realizado!";
    include("sucesso.php");
  }

?>