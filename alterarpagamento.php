<?php include ("header-dashboard.php"); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Pagamentos</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
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
        <form class="form-inline" role="form" method="post" style="margin-top: 8px" action="funcoesPHP/pagamentos.php?action=editar&id=<?php echo $id ?>">
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
            <button type="submit" class="btn btn-danger">Editar</button>
        </form>
    </div>
</div>


<?php include ("footer.php"); ?>