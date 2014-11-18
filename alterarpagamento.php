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
<<<<<<< HEAD
                <li><a href="funcionarios.php">Funcionarios</a></li>
=======
>>>>>>> 213a82d31e093762bf41b5f2b6b82f98447f1a3d
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
                <input type="text" class="form-control" id="servico"  value="<?php echo $servico ?>" name="servico">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="valor"  value="<?php echo $valor ?>" name="valor">
            </div>
            <div class="form-group">
                <input type="date" class="form-control" value="<?php echo $data ?>" name="data" id="data">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="<?php echo $profissional ?>" name="profissional" id="profissional">
            </div>
            <button type="submit" class="btn btn-warning">Editar</button>
            <a href="funcoesPHP/pagamentos.php?action=excluir&id=<?php echo $id ?>" style="color: #fff"><button TYPE="button" class="btn btn-danger">Excluir</button></a>
        </form>
    </div>

</div>


<?php include ("footer.php"); ?>