<?php

  // Incluir a conexao com o DB
  include('../conexao.php'); 
  include('db.php');

  $userDAO = new UsuarioDAO($_conn);

  //print_r($_POST);
  //print_r($_GET);
  //print_r($_REQUEST);

  $senhasConferem = @$_REQUEST['senha'] 
            == @$_REQUEST['senhaConfere'];

            /*
  if(!$senhasConferem) {
    $mensagem = "As senhas não conferem!";
    include("exemplo3.php");
  } else {
    $mensagem = "Cadastro realizado!";
    include("sucesso.php");
  }
  */

  $action = @$_REQUEST['action'];

  // Inserir ou atualizar o usuário no DB
  if($action == 'salvar') {
    if($result = $userDAO->insert($_REQUEST)) {
      echo "Usuário inserido com sucesso!";
    } else {
      $mensagem = "Falha ao salvar usuário";
      include('form.php');
    }
  }
  else { // Quando outra action não for definida
    $result = $userDAO->getAll(); // Obter a lista de usuarios do DB
    include('list.php'); // Abre a listagem de Usuários
  }

?>