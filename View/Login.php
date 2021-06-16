<?php include('master/headerForm.php'); ?>
<!-- Login Start -->
<div class="login justify-content-center text-center">
    <div class="container" style="width: 40%;">
        <?php if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        if (isset($_SESSION['msgcad'])) {
            echo $_SESSION['msgcard'];
            unset($_SESSION['msgcard']);
        }
        ?>
        <form id="login" method="post" action="authenticate">
            <div class="login-form form-group">
                <div class="row">
                    <h1 class="entrar-title justify-content-center container">Login</h1>
                    <div class="col-md-6" style="margin-left: 25%;">
                        <label>E-mail:</label>
                        <input class="form-control" name="email" id="usuario_email" type="email" placeholder="Ex: fulano@hotmail.com" require>
                    </div>
                    <div class="col-md-6" style="margin-left: 25%;">
                        <label>Senha:</label>
                        <input class="form-control" name="senha" id="usuario_senha" type="password" placeholder="" required>
                    </div>
                    <div class="col-md-12">
                        <a class="btn" href="home.php"><span>Voltar</span></a>
                        <button class="btn" type="submit" name="btnLogar" id="btnLogar" value="Logar">Continuar</button>
                    </div>
                    <div class="col-md-12">
                        <p style="margin-top: 10px;">Novo por aqui? <a href="Register.php">crie uma conta gratis!</a></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Login End -->
<?php include('master/footerForm.php'); ?>