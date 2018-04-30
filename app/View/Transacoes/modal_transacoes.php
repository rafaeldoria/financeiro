<?php include_once '../Layout/header.php';?>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_transacoes">
Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="modal_transacoes" tabindex="-1" role="dialog" aria-labelledby="modal_transacoesTitle" aria-hidden="true">
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
                                <div class="panel-title"><h2>Transação</h2></div>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="desc_transacao" class="col-sm-2 control-label">Descrição</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="desc_transacao" placeholder="Descrição">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="valor" class="col-sm-2 control-label">Valor</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="valor" placeholder="R$">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dt_previsto" class="col-sm-2 control-label">Data Prevista</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" id="dt_previsto">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dt_realizado" class="col-sm-2 control-label">Data Realizada</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" id="dt_realizado">
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
                                    <label class="col-md-4 control-label" for="select-1"><h4>Status</h4></label>
                                    <div class="form-group">
                                        <div class="col-md-8" style="padding:0px;">
                                            <select class="form-control selectpicker">
                                                <option>Aberta</option>
                                                <option>Fechada</option>
                                                <option>Canceladas</option>
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
