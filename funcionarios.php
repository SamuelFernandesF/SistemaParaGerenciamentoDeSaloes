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
                    <li class="active"><a href="funcionarios.php">Funcionarios</a></li>
                </ul>
            </div>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Cadastrar Funcionários</h1>
            <form class="form-inline" role="form" method="post" style="margin-top: 8px" action="funcoesPHP/funcionarios.php?action=cadastrar">
                <div class="form-group">
                    <input type="text" class="form-control" id="nome"  placeholder="Nome do funcionário" name="nome">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="rg"  placeholder="RG [42.414.222-2]" name="rg">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="CPF [428.765.422-2]" name="cpf" id="cpf">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Endereco" name="endereco" id="endereco">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="telefone"  placeholder="Telefone (12) 3111-2234" name="telefone">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email"  placeholder="Email"  name="email">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>

        <div class="row">
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Visualizar Funcionários</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>RG</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>

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

                        <tr class="hoverEvent">
                            <td data-id="<?php echo $id ?>"><?php echo $id ?></td>
                            <td><?php echo $nome ?></td>
                            <td><?php echo $rg ?></td>
                            <td><?php echo $cpf ?></td>
                            <td><?php echo $telefone ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $email ?></td>
                            <td><a href="alterarfuncionario.php?id=<?php echo $id ?>">Editar</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

<?php include ("footer.php"); ?>