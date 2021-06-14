<?php include('master/header.php'); ?>
<main class="main">
    <section>

        <body>
            <!-- Breadcrumb Start -->
            <div class="breadcrumb-wrap">
                <div class="container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Home.php">Página inicial</a></li>
                        <li class="breadcrumb-item"><a href="Myaccount.php">Minha conta</a></li>
                        <li class="breadcrumb-item active">Lista de desejos</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb End -->

            <!-- Wishlist Start -->
            <div class="wishlist-page">
                <div class="container-fluid">
                    <div class="wishlist-page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Produto</th>
                                                <th>Preço</th>
                                                <th>Quantidade</th>
                                                <th>Adicionar ao Carrinhos</th>
                                                <th>Remover</th>
                                            </tr>
                                        </thead>
                                        <tbody class="align-middle">
                                            <tr>
                                                <td>
                                                    <div class="img">
                                                        <a href="#"><img src="img/ImgCart/nutella-pote.png" alt="Image"></a>
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
                                                <td><button class="btn-cart">Adicionar ao carrinho</button></td>
                                                <td><button class="btn-lixo"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="img">
                                                        <a href="#"><img src="img/ImgCart/suco-uva.png" alt="Image"></a>
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
                                                <td><button class="btn-cart">Adicionar ao carrinho</button></td>
                                                <td><button class="btn-lixo"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="img">
                                                        <a href="#"><img src="img/ImgCart/nescau-20.png" alt="Image"></a>
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
                                                <td><button class="btn-cart">Adicionar ao carrinho</button></td>
                                                <td><button class="btn-lixo"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="img">
                                                        <a href="#"><img src="img/ImgCart/guarana-antar.png" alt="Image"></a>
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
                                                <td><button class="btn-cart">Adicionar ao carrinho</button></td>
                                                <td><button class="btn-lixo"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="img">
                                                        <a href="#"><img src="img/ImgCart/redbull.png" alt="Image"></a>
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
                                                <td><button class="btn-cart">Adicionar ao carrinho</button></td>
                                                <td><button class="btn-lixo"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Wishlist End -->
        </body>
    </section>
</main>
<?php include('master/footer.php'); ?>