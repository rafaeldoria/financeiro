<?php include_once '../Layout/header.php';?>

<div class="modal fade" id="modal_usuarios" tabindex="-1" role="dialog" aria-labelledby="modal_usuariosTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title hot" id="modal_title">CRUD</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top:-25px">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title milhas"><h2>Usuário</h2></div>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="login" class="col-sm-2 control-label">Login</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="login" placeholder="Login">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sigla_conta" class="col-sm-2 control-label">Nome</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="sigla_conta" placeholder="Nome">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dt_realizado" class="col-sm-2 control-label">Conta Usuário</label>
                                        <div class="col-sm-8">
                                            <select class="form-control selectpicker">
                                                <option>Financeiro</option>
                                                <option>Recursos Humanos</option>
                                                <option>Administrativo</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>

<?php include '../Layout/footer.php';?>
