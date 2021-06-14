<?php include('master/header.php');
$pageTitle = 'Carrinho'; ?>
<main class="main">
    <section>

        <body>
            <!-- Breadcrumb Start -->
            <div class="breadcrumb-wrap">
                <div class="container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Home.php">Página inicial</a></li>
                        <li class="breadcrumb-item active">Carrinho</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb End -->

            <!-- Cart Start -->
            <div class="cart-page">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="cart-page-inner">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Produto</th>
                                                <th>Preço</th>
                                                <th>Quantidade</th>
                                                <th>Total</th>
                                                <th>Remover</th>
                                            </tr>
                                        </thead>
                                        <tbody class="align-middle">
                                            <tr>
                                                <td>
                                                    <div class="img">
                                                        <a href="#"><img src="img/ImgCart/arroz-namorado.png" alt="Image"></a>
                                                        <p>Nome do Produto</p>
                                                    </div>
                                                </td>
                                                <td>R$99</td>
                                                <td>
                                                    <div class="qty">
                                                        <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                        <input type="text" value="1">
                                                        <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </td>
                                                <td>R$99</td>
                                                <td><button class="btn-lixo"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="img">
                                                        <a href="#"><img src="img/ImgCart/cerveja-h.png" alt="Image"></a>
                                                        <p>Nome do Produto</p>
                                                    </div>
                                                </td>
                                                <td>R$99</td>
                                                <td>
                                                    <div class="qty">
                                                        <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                        <input type="text" value="1">
                                                        <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </td>
                                                <td>R$99</td>
                                                <td><button class="btn-lixo"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="img">
                                                        <a href="#"><img src="img/ImgCart/cerveja-it.png" alt="Image"></a>
                                                        <p>Nome do Produto</p>
                                                    </div>
                                                </td>
                                                <td>R$99</td>
                                                <td>
                                                    <div class="qty">
                                                        <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                        <input type="text" value="1">
                                                        <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </td>
                                                <td>R$99</td>
                                                <td><button class="btn-lixo"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="img">
                                                        <a href="#"><img src="img/ImgCart/bombom-valsa.png" alt="Image"></a>
                                                        <p>Nome do Produto</p>
                                                    </div>
                                                </td>
                                                <td>R$99</td>
                                                <td>
                                                    <div class="qty">
                                                        <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                        <input type="text" value="1">
                                                        <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </td>
                                                <td>R$99</td>
                                                <td><button class="btn-lixo"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="img">
                                                        <a href="#"><img src="img/ImgCart/frango-inteiro.png" alt="Image"></a>
                                                        <p>Nome do Produto</p>
                                                    </div>
                                                </td>
                                                <td>R$99</td>
                                                <td>
                                                    <div class="qty">
                                                        <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                        <input type="text" value="1">
                                                        <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </td>
                                                <td>R$99</td>
                                                <td><button class="btn-lixo"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart-page-inner">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="coupon">
                                            <input type="text" placeholder="Código do cupom">
                                            <button>Aplicar código</button>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="cart-summary">
                                            <div class="cart-content">
                                                <h1>Resumo do carrinho</h1>
                                                <p>Sub total<span>R$99</span></p>
                                                <p>Frete<span>$1</span></p>
                                                <h2>Total Geral<span>R$100</span></h2>
                                            </div>
                                            <div class="cart-btn">
                                                <button>Atualizar carrinho</button>
                                                <button onclick="location.href = 'Checkout.php'">Pagamentos</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cart End -->
        </body>
    </section>
</main>
<?php include('master/footer.php'); ?>