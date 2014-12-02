<?php
include ("necessaryPHP/db_con.php");
include ("header-dashboard.php");
?>

<?php
    $servico = $_GET['servico_prestado'];
    $valor_total=0;
    $registro = 0;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="pagamentos.php">Pagamentos</a></li>
                <li><a href="servicos.php">Serviços</a></li>
                <li><a href="funcionarios.php">Funcionarios</a></li>
                <li class="active"><a href="relatorio_servicos.php">Relatório de vendas</a></li>
                <li class=""><a href="relatorio_data.php">Relatório por datas</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Relatório de vendas</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <?php
                $query = "SELECT * FROM tb_pagamentos where servico_pagamento='$servico'";
                $results = mysqli_query($db, $query);
                while ($linhas = mysqli_fetch_array($results)) {
                    $valor = $linhas['valor_pagamento'];

                    $valor_total = $valor + $valor_total;
                }
                ?>

                <h4>Total recebido -> R$<?php echo $valor_total; ?>,00</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <span style="text-align: left">
                <?php
                $query = "SELECT * FROM tb_pagamentos where servico_pagamento='$servico'";
                $results = mysqli_query($db, $query);
                while ($linhas = mysqli_fetch_array($results)) {
                    $valor = $linhas['valor_pagamento'];
                    $registro = $registro + 1;
                }
                ?>

                <h4>Número de Registros -> <?php echo $registro; ?></h4>
            </span>
        </div>
    </div>

        <div class="row">
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Dados encontrado</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Servico</th>
                        <th>Data</th>
                        <th>Profissional</th>
                        <th>Valor</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $query = "SELECT * FROM tb_pagamentos where servico_pagamento='$servico'";
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
                        </tr>
                    <?php } ?>
                </table>
            </div>

        </div>
    </div>

<?php include ("footer.php"); ?>