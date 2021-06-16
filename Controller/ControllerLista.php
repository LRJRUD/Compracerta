<?php require "Model/ProdutosDAO";

class ControllerLista {


const ListaProdutosView(){

    $result = $sql->setFetchMode(PDO::FETCH_ASSOC);;

        
        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $linha['id_produto'] . "<br>";
            echo "Nome: " . $linha['nome_produto'] . "<br>";
            echo "Quantidade: " . $linha['quantidade'] . "<br>";
            echo "Marca: " . $linha['marca'] . "<br><hr>";
          }
        
          require "View/MyAccountAdm.php";

}