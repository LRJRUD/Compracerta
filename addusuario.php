<?php
        $servername = "localhost"; 
        $username = "LRJRUD";
        $password = "1234";
        $dbname = "mercado";

      try {
        $minhaConexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $minhaConexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $minhaConexao->prepare("insert into usuario( cpf, nome, email, senha, fone, cep, bairro, rua, n_Casa, complemento, is_online )
        values ( '555123456', 'Jose', 'jose@gmail.com', '1234', '900000001', '41180001','cajazeiras','florinda','50', 'nada','1')");
        $sql->execute();
        echo "incluido com sucesso";
      }
      catch(PDOException $e) {
        echo "entrou no catch".$e->getmessage();
      }
    $minhaConexao = null;
?>