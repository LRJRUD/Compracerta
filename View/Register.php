<?php include('master/headerForm.php'); ?>
<!-- Register Start -->
<div class="login justify-content-center align-items-center container text-center">
    <div class="container">
        <form id="form_cadastro" action="addUsuario" encrypte="multipart/form-data" method="post">
            <div class=" login-form form-group">
                <div class="row">
                    <h1 class="entrar-title justify-content-center container">Cadastro</h1>
                    <div class="col-md-6">
                        <label>Nome</label>
                        <input name="nome" id="usario[nome]" class="form-control" type="text" placeholder="First Name" required>
                    </div>
                    <div class="col-md-6">
                        <label>Email</label>
                        <input name="email" id="usuario[email]" class="form-control" type="email" placeholder="E-mail" required>

                    </div>
                    <div class="col-md-6">
                        <label>Senha</label>
                        <input name="senha" id="usario[senha]" class="form-control" type="password" placeholder="Senha" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone">Telefone</label>
                        <input name="fone" id="usario[fone]" class="form-control" type="tel" placeholder="N° de Telefone" required>
                    </div>
                    <div class="col-md-6">
                        <label>CEP</label>
                        <input name="cep" id="usario[cep]" name="cep" id="cep" class="form-control" type="text" placeholder="CEP" required>
                    </div>
                    <div class="col-md-6">
                        <label>Rua</label>
                        <input name="rua" id="usario[rua]" name="rua" id="rua" class="form-control" type="text" placeholder="Rua" required>
                    </div>
                    <div class="col-md-6">
                        <label>Bairro</label>
                        <input name="bairro" id="usario[bairro]" name="bairro" id="bairro" class="form-control" type="text" placeholder="Bairro" required>
                    </div>
                    <div class="col-md-6">
                        <label>Numero da casa</label>
                        <input name="un_casa" id="usario[n_casa]" class="form-control" type="text" placeholder="Numero da casa" required>
                    </div>
                    <div class="col-md-6">
                        <label>Complemento</label>
                        <input name="complemento" id="usario[complemento]" class="form-control" type="text" placeholder="CEP" required>
                    </div>
                    <div class="col-md-12">
                        <a class="btn" href="Home.php"><span>Voltar</span></a>
                        <button id=" btn-cadastro" class="btn" type="submit" name="Logar" value="Logar">Cadastrar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Register End -->
<?php include('master/footerForm.php'); ?>