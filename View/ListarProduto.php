<h1>Lista de Produtos</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped" style="top:40px;">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th><a href="?controller=ListarProdutos&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($produtos) {
                foreach ($produtos as $produtos) {
                    ?>
                    <tr>
                        <td><?php echo $produtos->nome; ?></td>
                        <td><?php echo $produtos->telefone; ?></td>
                        <td><?php echo $produtos->email; ?></td>
                        <td>
                            <a href="?controller=ListarProdutos&method=editar&id=<?php echo $produtos->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=ListarProdutos&method=excluir&id=<?php echo $produtos->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
