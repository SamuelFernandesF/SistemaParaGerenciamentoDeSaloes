<?php
include ("necessaryPHP/db_con.php");
include ("header-dashboard.php");
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

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Relatorio de Serviços</h1>
            <form class="form-inline" role="form" style="margin-top: 8px" action="relatorio_servicos2.php">
                <div class="form-group" style="display: inline">
                    <select class="input-lg" id="servico_prestado" name="servico_prestado">
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
                    <button type="submit" class="btn btn-lg btn-primary" style="margin-bottom: 9px">Consultar</button>
                </div>
            </form>
        </div>


<?php include ("footer.php"); ?>