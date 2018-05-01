<?php include_once '../Layout/logo.php';?>

<div class="page-content container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title milhas"><h3>Usuários</h3></div>

                    <div class="panel-options">
                        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_usuarios">Adicionar Conta</button>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Login</th>
                                <th>Nome</th>
                                <th>Conta</th>
                                <th>Permissão</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Financeiro</td>
                                <td>5</td>
                                <td>
                                    <button class="btn btn-success btn-xs"  data-toggle="modal" data-target="#modal_usuarios">Detalhes</button>
                                    <button class="btn btn-info btn-xs"  data-toggle="modal" data-target="#modal_usuarios">Editar</button>
                                    <button class="btn btn-danger btn-xs">Deletar</button>
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

<?php include 'modal_usuarios.php'?>
<?php include '../Layout/footer.php';?>
