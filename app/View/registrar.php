<?php include 'Layout/header.php';?>

<div class="page-content container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-wrapper">
                <div class="box">
                    <div class="content-wrap">
                        <!-- <form class="form-inline" role="form" action="" method="post"> -->
                            <h6>Cadastrar</h6>
                            <input class="form-control" type="text" placeholder="Login">
                            <input class="form-control" type="password" placeholder="Password">
                            <input class="form-control" type="password" placeholder="Confirm Password">
                            <input class="form-control" type="text" placeholder="Nome">
                            <select class="form-control selectpicker">
                                <option>Financeiro</option>
                                <option>Recursos Humanos</option>
                                <option>Administrativo</option>
                            </select>
                            <div class="action">
                                <a class="btn btn-primary signup" type="submit">Confirmar</a>
                            </div>
                        <!-- </form> -->
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
