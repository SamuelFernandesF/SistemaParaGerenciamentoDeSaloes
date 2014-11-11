<?php
include ("necessaryPHP/db_con.php");
include ("header-dashboard.php");
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="pagamentos.php">Pagamentos</a></li>
                    <li class="active"><a href="servicos.php">Serviços</a></li>
                    <li><a href="#">Analytics</a></li>
                    <li><a href="#">Export</a></li>
                </ul>
            </div>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Cadastrar Serviços</h1>
            <form class="form-inline" role="form" method="post" style="margin-top: 8px" action="funcoesPHP/servicos.php?action=cadastrar">
                <div class="form-group">
                    <input type="text" class="form-control" id="servico"  placeholder="Nome do servico" name="servico">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="valor"  placeholder="R$" id="valor" name="valor">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>

        <div class="row">
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Visualizar Serviços</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Servico</th>
                        <th>Preço</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $query = "SELECT * FROM tb_servicos";
                    $results = mysqli_query($db, $query);
                    while ($linhas = mysqli_fetch_array($results)) {
                        $id = $linhas['id_servico'];
                        $servico = $linhas['nome_servico'];
                        $valor = $linhas['valor_servico'];
                        ?>

                        <tr class="hoverEvent">
                            <td data-id="<?php echo $id ?>"><?php echo $id ?></td>
                            <td><?php echo $servico ?></td>
                            <td><?php echo $valor ?></td>
                            <td><a href="alterarservico.php?id=<?php echo $id ?>">Editar</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

<?php include ("footer.php"); ?>