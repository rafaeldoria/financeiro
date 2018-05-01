<?php include_once '../Layout/header.php';?>
<div class="modal fade" id="modal_transacoes" tabindex="-1" role="dialog" aria-labelledby="modal_transacoesTitle" aria-hidden="true">
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
                                <div class="panel-title milhas"><h2>Transação</h2></div>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="desc_transacao" class="col-sm-2 control-label">Descrição</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="desc_transacao" placeholder="Descrição">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="valor" class="col-sm-2 control-label">Valor</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="valor" placeholder="R$">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dt_previsto" class="col-sm-2 control-label">Data Prevista</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" id="dt_previsto">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dt_realizado" class="col-sm-2 control-label">Data Realizada</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" id="dt_realizado">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dt_realizado" class="col-sm-2 control-label">Conta Transação</label>
                                        <div class="col-sm-8">
                                            <select class="form-control selectpicker">
                                                <option>Financeiro</option>
                                                <option>Recursos Humanos</option>
                                                <option>Administrativo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dt_realizado" class="col-sm-2 control-label">Status Transação</label>
                                        <div class="col-sm-8">
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
