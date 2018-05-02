<?php
include_once '../Layout/logo.php';
include_once '../../Controller/TransacoesController.php';
$obj = new TransacaoController();
$transacoes = $obj->transacaoesUsuario();

?>

<div class="page-content container">
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title milhas"><h3>Transações</h3></div>

                    <div class="panel-options">
                        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_transacoes">Nova Transação</button>
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
                            <?php foreach ($transacoes as $key => $value): ?>
                                <tr>
                                    <td><?php echo $value["id"];?></td>
                                    <td><?php echo $value["desc_transacao"];?></td>
                                    <td><?php echo $value["desc_transacao"];?></td>
                                    <td><?php echo $value["dt_realizado"];?></td>
                                    <td><?php echo $value["dt_previsto"];?></td>
                                    <td><?php echo $value["valor"];?></td>
                                    <td><?php echo $value["status"];?></td>
                                    <td><?php echo $value["usuario_resposavel"];?></td>
                                    <td><?php echo $value["usuario_acao"];?></td>
                                    <td><?php echo $value["desc_conta"];?></td>
                                    <td>
                                        <?php $teste = "e"; ?>
                                        <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#modal_transacoes">Detalhes</button>
                                        <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal_transacoes">Editar</button>
                                        <button class="btn btn-danger btn-xs" data-toggle="modal">Deletar</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include 'modal_transacoes.php';?>
<?php include '../Layout/footer.php';?>
