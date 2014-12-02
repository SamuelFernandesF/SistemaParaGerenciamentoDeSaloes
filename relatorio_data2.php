<?php
include ("necessaryPHP/db_con.php");
include ("header-dashboard.php");

$data_inicial = $_GET['datainicial'];
$data_final = $_GET['datafinal'];

$data_inicial = implode("-",array_reverse(explode("/",$data_inicial)));
$data_final = implode("-",array_reverse(explode("/",$data_final)));

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="pagamentos.php">Pagamentos</a></li>
                <li><a href="servicos.php">Serviços</a></li>
                <li><a href="funcionarios.php">Funcionarios</a></li>
                <li class=""><a href="relatorio_servicos.php">Relatório de vendas</a></li>
                <li class="active"><a href="relatorio_data.php">Relatório por datas</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
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
                $sql = "SELECT * FROM tb_pagamentos WHERE data_pagamento >= ('$data_inicial') AND data_pagamento <= ('$data_final')";
                $query = mysqli_query($db, $sql);
                    while ($linhas = mysqli_fetch_array($query)) {
                    $id = $linhas['id_pagamento'];
                    $servico = $linhas['servico_pagamento'];
                    $valor = $linhas['valor_pagamento'];
                    $data = $linhas['data_pagamento'];
                    $profissional = $linhas['profissional_pagamento'];
                    $data = implode("/",array_reverse(explode("-",$data)));
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