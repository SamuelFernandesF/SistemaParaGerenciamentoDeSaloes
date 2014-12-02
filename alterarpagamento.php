<?php
include ("necessaryPHP/db_con.php");
include ("header-dashboard.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="pagamentos.php">Pagamentos</a></li>
                <li><a href="servicos.php">Servicos</a></li>
                <li><a href="funcionarios.php">Funcionarios</a></li>
                <li><a href="relatorio_servicos.php">Relatório de vendas</a></li>
                <li class=""><a href="relatorio_data.php">Relatório por datas</a></li>

            </ul>
        </div>
    </div>

    <?php
    $id = $_GET['id'];
    $query = "SELECT * FROM tb_pagamentos WHERE id_pagamento='$id'";
    $results = mysqli_query($db, $query);
    while ($linhas = mysqli_fetch_array($results)) {
        $id = $linhas['id_pagamento'];
        $servico = $linhas['servico_pagamento'];
        $valor = $linhas['valor_pagamento'];
        $data = $linhas['data_pagamento'];
        $profissional = $linhas['profissional_pagamento'];
    }
    ?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Editar Pagamento</h1>
        <form class="form-inline" role="form" method="post" action="funcoesPHP/pagamentos.php?action=editar&id=<?php echo $id?>" style="margin-top: 8px">
            <div class="form-group">
                <select id="profissional" name="profissional" style="width: 182px; height: 34px; border: 1px solid #cccccc; border-radius: 4px">
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
                <input type="number" class="form-control" id="valor"  value="<?php echo $valor ?>" name="valor">
            </div>
            <div class="form-group">
                <input type="date" class="form-control" value="<?php echo $data ?>" name="data" id="data">
            </div>
            <div class="form-group">
                <select id="servico" name="servico" style="width: 182px; height: 34px; border: 1px solid #cccccc; border-radius: 4px">
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
            <button type="submit" class="btn btn-warning">Editar</button>
            <a href="funcoesPHP/pagamentos.php?action=excluir&id=<?php echo $id ?>" style="color: #fff"><button TYPE="button" class="btn btn-danger">Excluir</button></a>
        </form>
    </div>

</div>

<script type="text/javascript">
    function formatar_mascara(src, mascara) {
        var campo = src.value.length;
        var saida = mascara.substring(0,1);
        var texto = mascara.substring(campo);
        if(texto.substring(0,1) != saida) {
            src.value += texto.substring(0,1);
        }
    }
</script>


<?php include ("footer.php"); ?>