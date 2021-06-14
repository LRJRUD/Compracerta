<?php include('master/header.php'); ?>
<main class="main">
    <section>
        <body>
            <!-- Breadcrumb Start -->
            <div class="breadcrumb-wrap">
                <div class="container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Home">Página inicial</a></li>
                        <li class="breadcrumb-item active">Verificação</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb End -->

            <!-- Checkout Start -->
            <div class="checkout">
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="checkout-inner">
                                <div class="billing-address">
                                    <h2>Endereço de Cobrança</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Primeiro nome</label>
                                            <input class="form-control" type="text" placeholder="Primeiro nome">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Sobrenome</label>
                                            <input class="form-control" type="text" placeholder="Sobrenome">
                                        </div>
                                        <div class="col-md-6">
                                            <label>E-mail</label>
                                            <input class="form-control" type="text" placeholder="E-mail">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Número de telefone</label>
                                            <input class="form-control" type="text" placeholder="Número de telefone">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Endereço</label>
                                            <input class="form-control" type="text" placeholder="Endereço">
                                        </div>                                   
                                        <div class="col-md-6">
                                            <label>CEP</label>
                                            <input class="form-control" type="text" placeholder="CEP">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                                <label class="custom-control-label" for="newaccount">Criar Conta</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="shipto">
                                                <label class="custom-control-label" for="shipto">Enviar para outro endereço</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="shipping-address">
                                    <h2>Endereço para envio</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Primeiro nome</label>
                                            <input class="form-control" type="text" placeholder="Primeiro nome">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Sobrenome</label>
                                            <input class="form-control" type="text" placeholder="Sobrenome">
                                        </div>
                                        <div class="col-md-6">
                                            <label>E-mail</label>
                                            <input class="form-control" type="text" placeholder="E-mail">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Número de telefone</label>
                                            <input class="form-control" type="text" placeholder="Número de telefone">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Endereço</label>
                                            <input class="form-control" type="text" placeholder="Endereço">
                                        </div>
                                        <div class="col-md-6">
                                            <label>CEP</label>
                                            <input class="form-control" type="text" placeholder="CEP">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="checkout-inner">
                                <div class="checkout-summary">
                                    <h1>Total do carrinho</h1>
                                    <p>Nome do Produto<span>R$99</span></p>
                                    <p class="sub-total">Subtotal<span>R$99</span></p>
                                    <p class="ship-cost">Frete<span>R$1</span></p>
                                    <h2>Total geral<span>R$100</span></h2>
                                </div>

                                <div class="checkout-payment">
                                    <div class="payment-methods">
                                        <h1>Métodos de Pagamento</h1>
                                        <div class="payment-method">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="payment-1" name="payment">
                                                <label class="custom-control-label" for="payment-1">Cartão de crédito</label>
                                            </div>
                                            <div class="payment-content" id="payment-1-show">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="payment-method">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="payment-3" name="payment">
                                                <label class="custom-control-label" for="payment-3">Cheque de pagamento</label>
                                            </div>
                                            <div class="payment-content" id="payment-3-show">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="payment-method">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="payment-4" name="payment">
                                                <label class="custom-control-label" for="payment-4">Transferência bancária direta</label>
                                            </div>
                                            <div class="payment-content" id="payment-4-show">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="payment-method">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="payment-5" name="payment">
                                                <label class="custom-control-label" for="payment-5">Dinheiro na entrega</label>
                                            </div>
                                            <div class="payment-content" id="payment-5-show">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkout-btn">
                                        <button>Faça a encomenda</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Checkout End -->
        </body>
    </section>
</main>
<?php include('master/footer.php'); ?>