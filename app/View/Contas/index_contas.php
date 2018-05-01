<?php include_once '../Layout/logo.php';
    // require_once '../../../config/connectDB.php';
    include_once '../../Model/Contas.php';

    $conta = new Contas();
    $contas = $conta->allContas();
?>

<div class="page-content container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title milhas"><h3>Contas</h3></div>

                    <div class="panel-options">
                        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_contas">Adicionar Conta</button>
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
                            <?php foreach ($contas as $key => $conta): ?>
                                <tr>
                                    <td><?php echo $conta["conta_id"]?></td>
                                    <td><?php echo $conta["desc_conta"]?></td>
                                    <td><?php echo $conta["sigla_conta"]?></td>
                                    <td>
                                        <button class="btn btn-success btn-xs"  data-toggle="modal" data-target="#modal_usuarios">Detalhes</button>
                                        <button class="btn btn-info btn-xs"  data-toggle="modal" data-target="#modal_usuarios">Editar</button>
                                        <button class="btn btn-danger btn-xs">Deletar</button>
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
<?php include 'modal_contas.php';?>
<?php include '../Layout/footer.php';?>
