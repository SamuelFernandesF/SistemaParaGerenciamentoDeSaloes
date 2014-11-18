<?php
include ("necessaryPHP/db_con.php");
include ("header-dashboard.php");
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="pagamentos.php">Pagamentos</a></li>
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="funcionarios.php">Funcionarios</a></li>
                </ul>
            </div>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Cadastrar Pagamentos</h1>
            <form class="form-inline" role="form" method="post" style="margin-top: 8px" action="funcoesPHP/pagamentos.php?action=cadastrar">
                <div class="form-group">
                    <input type="text" class="form-control" id="servico"  placeholder="Serviço Realizado" name="servico">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="valor"  placeholder="R$" id="valor" name="valor">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" placeholder="Data" name="data" id="data">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Profissional" name="profissional" id="profissional">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>

        <div class="row">
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Visualizar Pagamentos</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Servico</th>
                        <th>Data</th>
                        <th>Profissional</th>
                        <th>Valor</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $query = "SELECT * FROM tb_pagamentos";
                    $results = mysqli_query($db, $query);
                    while ($linhas = mysqli_fetch_array($results)) {
                        $id = $linhas['id_pagamento'];
                        $servico = $linhas['servico_pagamento'];
                        $valor = $linhas['valor_pagamento'];
                        $data = $linhas['data_pagamento'];
                        $profissional = $linhas['profissional_pagamento'];
                    ?>

                    <tr class="hoverEvent">
                        <td data-id="<?php echo $id ?>"><?php echo $id ?></td>
                        <td><?php echo $servico ?></td>
                        <td><?php echo $data ?></td>
                        <td><?php echo $profissional ?></td>
                        <td><?php echo $valor ?></td>
                        <td><a href="alterarpagamento.php?id=<?php echo $id ?>">Editar</a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

<?php include ("footer.php"); ?>