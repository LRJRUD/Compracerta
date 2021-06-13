<?php include('master/header.php'); ?>
<main class="main">
    <section>

        <body>
            <!-- Breadcrumb Start -->
            <div class="breadcrumb-wrap">
                <div class="container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Página inicial</a></li>
                        <li class="breadcrumb-item active">Minha Conta</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb End -->

            <!-- My Account Start -->
            <div class="my-account">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="#dashboard-tab" role="tab"><i class="fa fa-tachometer-alt"></i>Painel</a>
                                <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-shopping-bag"></i>Pedidos</a>
                                <a class="nav-link" id="tracker-nav" data-toggle="pill" href="#tracker-tab" role="tab"><i class="fas fa-shipping-fast"></i>Rastreio</a>
                                <a class="nav-link" id="payment-nav" data-toggle="pill" href="#payment-tab" role="tab"><i class="fa fa-credit-card"></i>Forma de pagamento</a>
                                <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-map-marker-alt"></i>Endereço</a>
                                <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Detalhes da conta</a>
                                <a class="nav-link" href="Home"><i class="fa fa-sign-out-alt"></i>Sair</a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                                    <h4>Sua CompraCerta</h4> <!-- Substituir por < ?php echo $_POST["Classe"] ?> -->
                                    <p>

                                        Somos o melhor supermercado em geração de valor para clientes,
                                        acionistas e colaboradores, onde atuarmos.

                                    </p>
                                </div>
                                <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Produto</th>
                                                    <th>Data</th>
                                                    <th>Preço</th>
                                                    <th>Status</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Nome do Produto</td>
                                                    <td>01 Jan 2020</td>
                                                    <td>R$ 99</td>
                                                    <td>Aprovado</td>
                                                    <td><button class="btn">Visualizar</button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Nome do Produto</td>
                                                    <td>01 Jan 2020</td>
                                                    <td>R$ 99</td>
                                                    <td>Aprovado</td>
                                                    <td><button class="btn">Visualizar</button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Nome do Produto</td>
                                                    <td>01 Jan 2020</td>
                                                    <td>R$ 99</td>
                                                    <td>Aprovado</td>
                                                    <td><button class="btn">Visualizar</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tracker-tab" role="tabpanel" aria-labelledby="orders-nav">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <div class="container px-1 px-md-4 py-5 mx-auto">
                                                <div class="card">
                                                    <div class="row d-flex justify-content-between px-3 top">
                                                        <div class="d-flex">
                                                            <h5>PEDIDO <span class="text-primary font-weight-bold">#6152</span></h5>
                                                        </div>
                                                        <div class="d-flex flex-column text-sm-right">
                                                            <p class="mb-0">Expectativa de entrega: <span>14/06/21</span></p>
                                                            <p>Código de rastreio: <span class="font-weight-bold"><a href="http://www2.correios.com.br/SISTEMAS/RASTREAMENTO/">V534HB</a></span></p>
                                                        </div>
                                                    </div> <!-- Add class 'active' to progress -->
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-12">
                                                            <ul class="progressbar" class="text-center">
                                                                <li class="active step0 progressbar"></li>
                                                                <li class="active step0 progressbar"></li>
                                                                <li class="active step0 progressbar"></li>
                                                                <li class="step0 progressbar"></li>
                                                                <li class="step0 progressbar"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-between top">
                                                        <div class="row d-flex icon-content"> <img class="iconTrack" src="https://i.imgur.com/9nnc9Et.png">
                                                            <div class="d-flex flex-column">
                                                                <p class="font-weight-bold text">Pedido<br>Processado</p>
                                                            </div>
                                                        </div>
                                                        <div class="row d-flex icon-content"> <img class="iconTrack" src="https://i.imgur.com/GiWFtVu.png">
                                                            <div class="d-flex flex-column">
                                                                <p class="font-weight-bold text">Pedido<br>Separado</p>
                                                            </div>
                                                        </div>
                                                        <div class="row d-flex icon-content"> <img class="iconTrack" src="https://i.imgur.com/u1AzR7w.png">
                                                            <div class="d-flex flex-column">
                                                                <p class="font-weight-bold text">Pedido<br>Enviado</p>
                                                            </div>
                                                        </div>
                                                        <div class="row d-flex icon-content"> <img class="iconTrack" src="https://i.imgur.com/TkPm63y.png">
                                                            <div class="d-flex flex-column">
                                                                <p class="font-weight-bold text">Pedido<br>Em rota</p>
                                                            </div>
                                                        </div>
                                                        <div class="row d-flex icon-content"> <img class="iconTrack" src=" https://i.imgur.com/HdsziHP.png">
                                                            <div class="d-flex flex-column">
                                                                <p class="font-weight-bold text">Pedido<br>Entregue</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="row d-flex justify-content-between px-3 top">
                                                        <div class="d-flex">
                                                            <h6><span class="text-primary font-weight-bold">13/06/2021 11:26:08 AM: </span>Pedido recebido.</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row d-flex justify-content-between px-3 top">
                                                        <div class="d-flex">
                                                            <h6><span class="text-primary font-weight-bold">13/06/2021 13:59:48 PM: </span>Pedido confeccionado.</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row d-flex justify-content-between px-3 top">
                                                        <div class="d-flex">
                                                            <H6><span class="text-primary font-weight-bold">13/06/2021 14:20:14 PM: </span>Pedido enviado.</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row d-flex justify-content-between px-3 top">
                                                        <div class="d-flex">
                                                            <h6><span class="text-primary font-weight-bold">13/06/2021 16:32:18 PM: </span>Em rota de entrega.</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row d-flex justify-content-between px-3 top">
                                                        <div class="d-flex">
                                                            <h6><span class="text-primary font-weight-bold">13/06-/021 17:00:36 PM: </span>1° Tentativa não efetuada, destinatário ausente. (SERÁ EFETUADA UMA NOVA TENTATIVA).</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </table>
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


                                    </p>
                                </div>
                                <div class="tab-pane fade" id="address-tab" role="tabpanel" aria-labelledby="address-nav">
                                    <h4>Endereço</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Endereço de Pagamento</h5>
                                            <p>R. da Mangueira, 33 - Nazaré, Salvador - BA</p>
                                            <p>Telefone: 012-345-6789</p>
                                            <button class="btn">Editar Endereço</button>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Endereço de entrega</h5>
                                            <p>R. da Mangueira, 33 - Nazaré, Salvador - BA</p>
                                            <p>Telefone: 012-345-6789</p>
                                            <button class="btn">Editar Endereço</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                    <h4>Detalhes da conta</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" placeholder="Primeiro Nome">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" placeholder="Último Nome">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" placeholder="Mobile">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" placeholder="Email">
                                        </div>
                                        <div class="col-md-12">
                                            <input class="form-control" type="text" placeholder="Endereço">
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn">Atualizar conta</button>
                                            <br><br>
                                        </div>
                                    </div>
                                    <h4>Mudança de senha</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control" type="password" placeholder="Senha atual">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" placeholder="Nova Senha">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" placeholder="Confirme sua senha">
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn">Salvar alterações</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- My Account End -->
        </body>
    </section>
</main>
<?php include('master/footer.php'); ?>