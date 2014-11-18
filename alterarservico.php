<?php
include ("necessaryPHP/db_con.php");
include ("header-dashboard.php");
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="pagamentos.php">Pagamentos</a></li>
                    <li class="active"><a href="servicos.php">Servicos</a></li>
<<<<<<< HEAD
                    <li><a href="funcionarios.php">Funcionarios</a></li>
=======
>>>>>>> 213a82d31e093762bf41b5f2b6b82f98447f1a3d
                </ul>
            </div>
        </div>

        <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM tb_servicos WHERE id_servico='$id'";
        $results = mysqli_query($db, $query);
        while ($linhas = mysqli_fetch_array($results)) {
            $id = $linhas['id_servico'];
            $servico = $linhas['nome_servico'];
            $valor = $linhas['valor_servico'];
        }
        ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Editar Servico</h1>
            <form class="form-inline" role="form" method="post" action="funcoesPHP/servicos.php?action=editar&id=<?php echo $id?>" style="margin-top: 8px">
                <div class="form-group">
                    <input type="text" class="form-control" id="servico"  value="<?php echo $servico ?>" name="servico">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="valor"  value="<?php echo $valor ?>" name="valor">
                </div>
                <button type="submit" class="btn btn-warning">Editar</button>
                <a href="funcoesPHP/servicos.php?action=excluir&id=<?php echo $id ?>" style="color: #fff"><button class="btn btn-danger">Excluir</button></a>
            </form>
        </div>
    </div>


<?php include ("footer.php"); ?>