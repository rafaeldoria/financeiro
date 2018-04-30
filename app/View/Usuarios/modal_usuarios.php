<?php include_once '../Layout/header.php';?>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_usuarios">
Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="modal_usuarios" tabindex="-1" role="dialog" aria-labelledby="modal_usuariosTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title"><h2>Usuário</h2></div>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="login" class="col-sm-2 control-label">Login</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="login" placeholder="Login">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sigla_conta" class="col-sm-2 control-label">Nome</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="sigla_conta" placeholder="Nome">
                                        </div>
                                    </div>
                                    <label class="col-md-4 control-label" for="select-1"><h4>Conta</h4></label>
                                    <div class="form-group">
                                        <div class="col-md-8" style="padding:0px;">
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
