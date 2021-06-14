<?php
class controllerProduct
{

  public $pesquisar;

  public function pesquisar()
  {

    $pesquisar = $_POST['pesquisar'];
    $result_produtos = "SELECT * FROM produtos WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_produtos = mysqli_query($conn, $result_produtos);

    while ($rows_produtos = mysqli_fetch_array($resultado_produtos)) {
      echo "Nome do produto: " . $rows_produtos['nome'] . "<br>";
    }
  }
}
