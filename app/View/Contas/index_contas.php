<?php include_once '../Layout/logo.php';?>

<div class="page-content container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Contas</div>

                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i>Adicionar Conta</a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Conta</th>
                                <th>Sigla</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Financeiro</td>
                                <td>Fin</td>
                                <td>
                                    <button class="btn btn-info btn-xs">Info</button>
                                    <button class="btn btn-warning btn-xs">Warning</button>
                                    <button class="btn btn-danger btn-xs">Danger</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include '../Layout/footer.php';?>
