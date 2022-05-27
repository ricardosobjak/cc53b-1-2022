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
      
      <label class="form-label">Telefone</label>
      <input type="tel" name="telefone" class="form-control"
        value="<?= @$_REQUEST['telefone'] ?>">
      
      <label class="form-label">Nascimento</label>
      <input type="date" name="nascimento" class="form-control"
        value="<?= @$_REQUEST['nascimento'] ?>">
      
      <label class="form-label">Cidade</label>
      <input type="text" name="cidade" class="form-control"
        value="<?= @$_REQUEST['cidade'] ?>">
      
      <label class="form-label">UF</label>
      <select name="uf" class="form-select">
        <option value="PR" <?= @$_REQUEST['uf'] == 'PR' ? 'selected' : '' ?>>PR</option>
        <option value="SC" <?= @$_REQUEST['uf'] == 'SC' ? 'selected' : '' ?>>SC</option>
        <option value="RS" <?= @$_REQUEST['uf'] == 'RS' ? 'selected' : '' ?>>RS</option>
      </select>

      <label class="form-label">Pais</label>
      <input type="mail" name="pais" class="form-control"
        value="<?= @$_REQUEST['pais'] ?>">

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