<?php include_once '../Layout/header.php';?>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_contas">
Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="modal_contas" tabindex="-1" role="dialog" aria-labelledby="modal_contasTitle" aria-hidden="true">
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
                                <div class="panel-title"><h2>Contas</h2></div>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="desc_conta" class="col-sm-2 control-label">Conta</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="desc_conta" placeholder="Conta">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sigla_conta" class="col-sm-2 control-label">Sigla</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="sigla_conta" placeholder="Sigla">
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
