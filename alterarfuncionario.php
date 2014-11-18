<?php
include ("necessaryPHP/db_con.php");
include ("header-dashboard.php");
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="pagamentos.php">Pagamentos</a></li>
                    <li><a href="servicos.php">Servicos</a></li>
                    <li class="active"><a href="funcionarios.php">Funcionarios</a></li>
                </ul>
            </div>
        </div>
        <?php
            $query = "SELECT * FROM tb_funcionarios";
            $results = mysqli_query($db, $query);
            while ($linhas = mysqli_fetch_array($results)) {
                $id = $linhas['id_funcionario'];
                $nome = $linhas['nome'];
                $rg = $linhas['rg'];
                $cpf = $linhas['cpf'];
                $endereco = $linhas['endereco'];
                $telefone = $linhas['telefone'];
                $email = $linhas['email'];
        ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Editar Funcionário</h1>
            <form class="form-inline" role="form" method="post" action="funcoesPHP/funcionarios.php?action=editar&id=<?php echo $id?>" style="margin-top: 8px">
                <div class="form-group">
                    <input type="text" class="form-control" id="servico"  value="<?php echo $nome ?>" name="nome">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="valor"  value="<?php echo $rg ?>" name="rg">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $cpf ?>" name="cpf" id="cpf">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $endereco ?>" name="endereco" id="endereco">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $telefone ?>" name="telefone" id="telefone">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $email ?>" name="email" id="email">
                </div>
                <button type="submit" class="btn btn-warning">Editar</button>
                <a href="funcoesPHP/funcionarios.php?action=excluir&id=<?php echo $id ?>" style="color: #fff"><button TYPE="button" class="btn btn-danger">Excluir</button></a>
            </form>
        </div>

    </div>


<?php } include ("footer.php"); ?>