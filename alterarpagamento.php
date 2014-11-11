<?php include ("necessaryPHP/db_con.php"); ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>
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
</body>
</body>