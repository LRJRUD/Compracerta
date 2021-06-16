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
                        <div class="col-md-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                                    <h4>Lista de Pedidos</h4> <!-- Substituir por < ?php echo $_POST["Classe"] ?> -->
                                    <p>
                                        <?php ?>

                                        <script>
                                            function confirma() {
                                                return confirm("Confirma a exclusão?");

                                            }
                                        </script>


                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php



                                            ?>
                                        </tbody>
                                    </table>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
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
                                <div class="tab-pane fade" id="tracker-tab" role="tabpanel" aria-labelledby="orders-nav">
                                    <div class="login justify-content-center align-items-center container text-center">
                                        <div class="container">
                                            <form id="registerProduto" action="addProduto" method="post">
                                                <div class="login-form form-group">
                                                    <div class="row">
                                                        <h1 class="entrar-title justify-content-center container">Cadastrar Produtos</h1>
                                                        <div class="col-md-6">
                                                            <label>Nome do produto</label>
                                                            <input name="nome_produto" id="nome_produto" class="form-control" type="text" placeholder="Nome do produto" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Tipo do produto</label>
                                                            <select name="tipo" id="tipo" class="form-control">
                                                                <option></option>
                                                                <option value="Congelado">Congelados</option>
                                                                <option value="Bebidas">Bebidas</option>
                                                                <option value="Mercearia">Mercearia</option>
                                                                <option value="Limpeza">Limpeza</option>
                                                                <option value="Higiene pessoal / Perfumaria">Higiene pessoal / Perfumaria</option>
                                                                <option value="Frios / Laticínios">Frios / Laticínios</option>
                                                                <option value="Carnes">Carnes</option>
                                                                <option value="Descartaveis">Descartaveis</option>
                                                            </select>
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
                                                        <div class="col-md-17">
                                                            <label>Imagem</label>
                                                            <input name="img_produto" id="img_produto" name="img_produto" class="form-control" type="file" placeholder="Imagem do Produto" required>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <a class="btn" href="Home.php"><span>Voltar</span></a>
                                                            <button id="btn-cadastro" class="btn" type="submit">Cadastrar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">
                                <h4>Formas de pagamento</h4>
                                <p>
                                    Pague com cartões de crédito no site ou se preferir,
                                    levamos a maquininha para pagamento na entrega.
                                    Você também pode pagar em dinheiro, ao receber o pedido.</p>

                                <p>
                                <h4>Pagamento online</h4>
                                </p>

                                <p>
                                <h5>Reserva de crédito</h5>
                                </p>

                                Para compras com pagamento online, será feita uma reserva de crédito, ou seja,
                                o cliente poderá ser avisado de um débito em seu cartão de crédito referente a reserva,
                                no entanto, a efetivação do débito no cartão acontecerá somente após o faturamento do pedido,
                                uma vez que o valor do débito poderá ser igual ou menor ao valor da reserva por
                                conta dos produtos de preço variável (Ex: Carnes, frutas e verduras).
                                No caso de falta de algum produto não entregue, o valor correspondente não será cobrado.</p>

                                <p>
                                <h5>Confirmação de pagamento</h5>
                                </p>

                                Para sua comodidade e segurança, após a compra, CompreCerto confirma os dados cadastrais junto à administradora do cartão de crédito.
                                O pedido só será liberado para entrega após a confirmação do pagamento,
                                podendo sofrer alteração no horário da mesma.</P>

                                <p>
                                <h5>Parcelamento</h5>
                                </p>

                                Os pedidos poderão ser parcelados em até duas vezes com parcela mínima de R$30,00.

                                Caso o cartão tenha sido emitido fora do Brasil, não é aceito o parcelamento</p>

                                <p>
                                <h5>Cancelamento de Pedidos – Estorno de crédito</h5>
                                </P>

                                Em caso de cancelamento do pedido, o limite do cartão de crédito será restabelecido pela
                                administradora do cartão após 05 dias úteis da solicitação do cancelamento.


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