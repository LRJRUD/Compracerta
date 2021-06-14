<?php include('master/headerForm.php'); ?>
<!-- Register Start -->
<div class="login justify-content-center align-items-center container text-center">
    <div class="container">
        <form id="Register" action="addUsuario" method="post">
            <div class="login-form form-group">
                <div class="row">
                    <h1 class="entrar-title justify-content-center container">Cadastro</h1>
                    <div class="col-md-6">
                        <label>Nome</label>
                        <input name="nome" id="nome" class="form-control" type="text" placeholder="Nome Completo" required>
                    </div>
                    <div class="col-md-6">
                        <label>Email</label>
                        <input name="email" id="email" class="form-control" type="email" placeholder="E-mail" required>
                    </div>
                    <div class="col-md-6">
                        <label>Senha</label>
                        <input name="senha" id="senha" class="form-control" type="password" placeholder="Senha" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone">Telefone</label>
                        <input name="fone" id="fone" class="form-control" type="tel" placeholder="N° de Telefone" required>
                    </div>
                    <div class="col-md-6">
                        <label>CEP</label>
                        <input name="cep" id="cep" name="cep" id="cep" class="form-control" type="text" placeholder="CEP" required>
                    </div>
                    <div class="col-md-6">
                        <label>Rua</label>
                        <input name="rua" id="rua" name="rua" id="rua" class="form-control" type="text" placeholder="Rua" required>
                    </div>
                    <div class="col-md-6">
                        <label>Bairro</label>
                        <input name="bairro" id="bairro" name="bairro" id="bairro" class="form-control" type="text" placeholder="Bairro" required>
                    </div>
                    <div class="col-md-6">
                        <label>Numero da casa</label>
                        <input name="n_Casa" id="n_Casa" class="form-control" type="text" placeholder="Numero da casa" required>
                    </div>
                    <div class="col-md-6">
                        <label>Complemento</label>
                        <input name="complemento" id="complemento" class="form-control" type="text" placeholder="Complemento" required>
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