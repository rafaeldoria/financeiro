<?php include_once '../Layout/logo.php';?>

<div class="page-content container">
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Transações</div>

                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i>Adicionar Transação</a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Descrição</th>
                                <th>Valor R$</th>
                                <th>Data Prevista</th>
                                <th>Status</th>
                                <th>Data Efetuada</th>
                                <th>Conta</th>
                                <th>Usuário Responsável</th>
                                <th>Usuário Ação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>1500</td>
                                <td>15/10/2015</td>
                                <td>F</td>
                                <td>15/10/2015</td>
                                <td>RH</td>
                                <td>1</td>
                                <td>5</td>
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
