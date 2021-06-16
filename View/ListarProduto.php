<?php include('master/header.php');


?>

<script>
function confirma(){
  return confirm("Confirma a exclusão?");
  
}
</script>

  
  <table class="table table-striped">
    <thead>
      <tr> 
        <th>Codigo</th>
        <th>Nome</th>
        <th>Quantidade</th>
        <th>Marca</th>
        <th>Descrição</th>
        <th>Validade</th>
        <th>Tipo</th>
        <th>Imagem</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0;$i<count($listaLivros);$i++){ ?>
           <tr>
           <form method="post" action="ExcluirLivro" onSubmit="return confirma();">
           <td><?php echo $[$id_produto]->getId_prooduto(); ?></td>
           <td><?php echo $listaLivros[$i]->getTitulo(); ?></td>
           <td>
           
             <input type="hidden" name="id" value="<?php echo $listaLivros[$i]->getCodigo();?>">
             <input type="submit" class="btn btn-danger btn-sm" value= "Excluir">
           </form>
           </td>
           </tr>   
      <?php } ?>
    </tbody>
  </table>
  <?php include('master/footer.php'); ?>