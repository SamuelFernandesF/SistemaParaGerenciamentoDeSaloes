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
                <li class=""><a href="relatorio_servicos.php">Relatório de vendas</a></li>
                <li class="active"><a href="relatorio_data.php">Relatório por datas</a></li>
            </ul>
        </div>
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Relatorio por datas</h1>
        <form class="form-inline" role="form" style="margin-top: 8px" action="relatorio_data2.php">
            <div class="form-group">
                <input type="text" class="form-control" id="datainicial" name="datainicial" placeholder="Data inicial">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="datafinal"  name="datafinal" placeholder="Data final">
            </div>
            <button type="submit" class="btn btn-primary" >Consultar</button>
        </form>
    </div>


<?php include ("footer.php"); ?>