<?php include 'Layout/logo.php';
    include '../Model/Contas.php';
    $conta = new Contas();
    $contas = $conta->allContas();
?>


<div class="page-content container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-wrapper">
                <div class="box">
                    <div class="content-wrap">
                        <h6>Contas</h6>
                        <input id="usuario" class="form-control" type="text" placeholder="Login">
                        <input id="senha" class="form-control" type="password" placeholder="Password">
                        <input id="confirmar_senha" class="form-control" type="password" placeholder="Confirm Password">
                        <input id="nome" class="form-control" type="text" placeholder="Nome">
                        <label class="col-md-4 control-label" for="select-1"><h4>Conta</h4></label>
                        <div class="form-group">
                            <div class="col-md-8" style="padding:0px;">
                                <select id="conta" class="form-control selectpicker">
                                    <?php foreach ($contas as $key => $conta) : ?>
                                        <option value="<?php echo $conta["conta_id"]?>"><?php echo $conta["desc_conta"]?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="action">
                            <a class="btn btn-primary signup" id="registrar">Confirmar</a>
                        </div>
                    </div>
                </div>

                <div class="already">
                    <p>Já tem uma conta?</p>
                    <a href="login.php">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'Layout/footer.php';?>
