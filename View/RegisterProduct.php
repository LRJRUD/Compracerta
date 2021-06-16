<?php include('master/headerForm.php'); ?>
<!-- Register Start -->
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
                        <label >Validade</label>
                        <input name="validade" id="validade" class="form-control" type="date" placeholder="Validade" required>
                    </div>
                    <div class="col-md-6">
                        <label>Quantidade</label>
                        <input name="quantidade" id="quantidade"  class="form-control" type="number" placeholder="Quantidade" required>
                    </div>
                    <div class="col-md-7">
                        <label>Imagem</label>
                        <input name="img_produto" id="img_produto" name="img_produto"  class="form-control" type="file" placeholder="Imagem do Produto" required>
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
<!-- Register End -->
<?php include('master/footerForm.php'); ?>