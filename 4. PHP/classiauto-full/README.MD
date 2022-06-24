1) Criar o banco de dados no MySQL: "db_classiauto"



2) Configurar dados de conexão ao banco de dados no arquivo "conexao.php" (usuário, senha, host e 
nome do banco de dados)



3) Configurar o caminho absoluto da aplicação no arquivo "config.php".

  $CONFIG['webroot'] = '/classiauto-full/';

Por exemplo, vamos considerar que você não renomeou a pasta da aplicação (classiauto-full), então colocou-a dentro do servidor web (pasta htdocs do XAMPP). A pasta raíz da aplicação dentro do servidor web será "/classiauto-full/".
Caso tenha renomeado a pasta, ou colocado em subpastas, especifique corretamente no arquivo config.php.



4) Criar as tabelas do banco de dados. 

Na pasta !db da aplicação, há a arquivo criar_tabelas.php que permite criar todas as tabelas necessárias para executar a aplicação.

Por meio do nevagador, acesse http://localhost/classiauto-full/!db/criar_tabelas.php

Obs.: na URL está especificado que o servidor web executa no computador local (localhost) e a aplicação está na pasta "classiauto-full" dentro do servidor web (htdocs). Caso tenha alterado o nome da aplicação, especifique a URL de acordo com a sua estrutura.



5) Inserir dados iniciais para a aplicação (categorias e marcas).

Na pasta !db da aplicação, há a arquivo inserir_dados.php que permite inserir algumas categorias e marcas para a aplicação.

Por meio do nevagador, acesse http://localhost/classiauto-full/!db/inserir_dados.php


Obs.: na URL está especificado que o servidor web executa no computador local (localhost) e a aplicação está na pasta "classiauto-full" dentro do servidor web (htdocs). Caso tenha alterado o nome da aplicação, especifique a URL de acordo com a sua estrutura.