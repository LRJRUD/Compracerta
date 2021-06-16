<?php include('master/header.php'); ?>
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Página inicial</a></li>
            <li class="breadcrumb-item active">Administrador</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- My AccountAdm Start -->
<div class="my-account">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="showOrders-nav" data-toggle="pill" href="#showOrders-tab" role="tab"><i class="fa fa-shopping-bag"></i>Pedidos dos Usuarios</a>
                    <a class="nav-link" id="showProducts-nav" data-toggle="pill" href="#showProducts-tab" role="tab"><i class="fa fa-tachometer-alt"></i>Produtos em Estoque</a>
                    <a class="nav-link" id="registerProducts-nav" data-toggle="pill" href="#registerProducts-tab" role="tab"><i class="fas fa-pen"></i>Cadastrar Produtos</a>
                    <a class="nav-link" href="Home.php"><i class="fa fa-sign-out-alt"></i>Sair</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="showOrders-tab" role="tabpanel" aria-labelledby="showOrders-nav">
                        <h4>Lista de Pedidos</h4> <!-- Substituir por < ?php echo $_POST["Classe"] ?> -->
                        <!-- ?php ?

                                        <script>
                                            function confirma() {
                                                return confirm("Confirma a exclusão?");

                                            }
                                        </script>-->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>código</th>
                                    <th>Título</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($listarProdutos); $i++) { ?>
                                    <tr>
                                        <td><?php echo $row_msg_cont['id_produto'] ?></td>
                                        <td><?php echo $listarProdutos[$i]->getNome_produto(); ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="showProducts-tab" role="tabpanel" aria-labelledby="showProducts-nav">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
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
                                    <tr>
                                        <td>1</td>
                                        <td>Nome do Produto</td>
                                        <td>5</td>
                                        <td>Nestle</td>
                                        <td>perceived</td>
                                        <td>02/22</td>
                                        <td>Mercearia</td>
                                        <td> <img src="img/ImgCart/arroz-namorado.png" alt="Image"></td>

                                        <td>
                                            <button class="btn">Excluir</button>
                                            <button class="btn">Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Nome do Produto</td>
                                        <td>5</td>
                                        <td>Nestle</td>
                                        <td>perceived</td>
                                        <td>02/22</td>
                                        <td>Mercearia</td>
                                        <td> <img src="img/ImgCart/arroz-namorado.png" alt="Image"></td>

                                        <td>
                                            <button class="btn">Excluir</button>
                                            <button class="btn">Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Nome do Produto</td>
                                        <td>5</td>
                                        <td>Nestle</td>
                                        <td>perceived</td>
                                        <td>02/22</td>
                                        <td>Mercearia</td>
                                        <td> <img src="img/ImgCart/arroz-namorado.png" alt="Image"></td>
                                        <td>
                                            <button class="btn">Excluir</button>
                                            <button class="btn">Editar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="registerProducts-tab" role="tabpanel" aria-labelledby="registerProducts-nav">
                        <div class="login justify-content-center align-items-center container text-center">
                            <div class="container">
                                <!-- Form MyAccountAdm_product Start -->
                                <form id="registerProduto" action="addProduto" method="post">
                                    <div class="login-form form-group">
                                        <div class="row">
                                            <h1 class="entrar-title justify-content-center container">Cadastrar Produtos</h1>
                                            <div class="col-md-6">
                                                <label>Nome do produto</label>
                                                <input name="nome_produto" id="nome_produto" class="form-control" type="text" placeholder="Nome do produto" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Tipo</label>
                                                <input name="tipo" id="tipo" class="form-control" type="text" placeholder="Tipo" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Marca</label>
                                                <input name="marca" id="marca" class="form-control" type="text" placeholder="Marca" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Descrição</label>
                                                <input name="descricao" id="descricao" class="form-control" type="text" placeholder="Descrição" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Validade</label>
                                                <input name="validade" id="validade" class="form-control" type="date" placeholder="Validade" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Quantidade</label>
                                                <input name="quantidade" id="quantidade" class="form-control" type="number" placeholder="Quantidade" required>
                                            </div>
                                            <div class="col-md-7">
                                                <label>Imagem</label>
                                                <input name="img_produto" id="img_produto" name="img_produto" class="form-control" type="file" placeholder="Imagem do Produto" required>
                                            </div>

                                            <div class="col-md-12">
                                                <a class="btn" href="Home.php"><span>Voltar</span></a>
                                                <button id="btn-Registrar_produto" class="btn" type="submit">Registrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form MyAccountAdm_product End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MyAccountAdm End -->
<?php include('master/footer.php'); ?>