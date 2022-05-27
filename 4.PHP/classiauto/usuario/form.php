<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <h1>Cadastro</h1>


  <div class="container">
    <?php if (isset($mensagem)): ?>
      <div class="alert alert-danger"><?= $mensagem ?></div>
    <?php endif;?>


    <form action="cadastro.php" method="POST">
      <label class="form-label">Nome</label>
      <input type="text" name="nome" class="form-control"
        value="<?= @$_REQUEST['nome'] ?>">

      <label class="form-label">E-mail</label>
      <input type="mail" name="email" class="form-control"
        value="<?= @$_REQUEST['email'] ?>">

      <label class="form-label">Senha</label>
      <input type="password" name="senha" class="form-control">

      <label class="form-label">Senha (Conferência)</label>
      <input type="password" name="senhaConfere" class="form-control">

      <hr>
      <button class="btn btn-primary" type="submit">Cadastrar</button>
    </form>
  </div>
</body>

</html>