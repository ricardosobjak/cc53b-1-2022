<?php 
  class UsuarioDAO {
    private $conn; // Conexao com o DB

    public function __construct($conn) {
      $this->conn = $conn;
    }

    // Método para inserir usuário no DB
    public function insert($user) {
      $sql = 'INSERT INTO tb_usuario( 
        nome, telefone, email, cidade, uf,
        pais, nascimento, senha) 
        VALUES ('
          . '"'. $user['nome'] . '", '
          . '"'. $user['telefone'] . '", '
          . '"'. $user['email'] . '", '
          . '"'. $user['cidade'] . '", '
          . '"'. $user['uf'] . '", '
          . '"'. $user['pais'] . '", '
          . '"'. $user['nascimento']. '", '
          . '"'. $user['senha'] . '"'
        . ')';
      
      return $this->conn->query($sql);
    }

    public function getAll() {
      $sql = "SELECT * FROM tb_usuario";

      return $this->conn->query($sql);
    }

  }

?>