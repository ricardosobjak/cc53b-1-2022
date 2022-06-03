<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<table class="table table-striped">
  <thead>
    <tr>
      <th>Nome</th>
      <th>E-mail</th>
      <th>Nascimento</th>
    </tr>
  </thead>

  <tbody>
    
    <?php while($user = mysqli_fetch_array($result)): ?>
    <tr>
      <td><?= $user['nome'] ?></td>
      <td><?= $user['email'] ?></td>
      <td><?= $user['nascimento'] ?></td>
    </tr>
    <?php endwhile; ?>

  </tbody>
</table>