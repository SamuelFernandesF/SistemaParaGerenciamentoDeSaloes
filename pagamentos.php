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
                    <li><a href="relatorio_servicos.php">Relatório de vendas</a></li>
                    <li class=""><a href="relatorio_data.php">Relatório por datas</a></li>
                </ul>
            </div>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Cadastrar Pagamentos</h1>
            <form class="form-inline" role="form" method="post" style="margin-top: 8px" action="funcoesPHP/pagamentos.php?action=cadastrar">
                <div class="form-group">
                    <select id="servico" name="servico" style="width: 182px; height: 34px; border: 1px solid #cccccc; border-radius: 4px">
                        <option value="" disabled selected>Selecione a opção</option>
                        <?php
                        $query = "SELECT * FROM tb_servicos";
                        $results = mysqli_query($db, $query);
                        while ($linhas = mysqli_fetch_array($results)) {
                            $servico = $linhas['nome_servico'];
                            ?>
                            <option><?php echo $servico;?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="valor"  placeholder="R$" id="valor" name="valor" style="border: 1px solid #ccc; height: 34px; border-radius: 4px">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" placeholder="Data" name="data" id="data" style="height: 34px; border-radius: 4px">
                </div>
                <div class="form-group">
                    <select id="profissional" name="profissional" style="width: 182px; height: 34px; border: 1px solid #cccccc; border-radius: 4px">
                        <option value="" disabled selected>Selecione a opção</option>
                        <?php
                        $query = "SELECT * FROM tb_funcionarios";
                        $results = mysqli_query($db, $query);
                        while ($linhas = mysqli_fetch_array($results)) {
                            $servico = $linhas['nome'];
                            ?>
                            <option><?php echo $servico;?></option>
                        <?php } ?>
                    </select>
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