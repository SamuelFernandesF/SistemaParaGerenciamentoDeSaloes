<?php
include ("../necessaryPHP/db_con.php");

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
}

if (isset($_GET['action'])){
    if ($_GET['action'] == "cadastrar") {
        $query = "INSERT INTO tb_funcionarios (nome,rg,cpf,endereco, telefone, email)
                  values('$nome', '$rg','$cpf','$endereco', '$telefone','$email')";
        if (mysqli_query($db, $query)) {
            header('Location: ../funcionarios.php');
        } else {
            header('Location: ../funcionarios.php');
        }
    }

    if ($_GET['action'] == "editar") {
        $id = $_GET['id'];

        $query = "UPDATE tb_funcionarios SET nome='$nome',rg='$rg',cpf='$cpf',endereco='$endereco', telefone='$telefone', email='$email' WHERE id_funcionario='$id'";
        $result = mysqli_query($db, $query);
        header('Location: ../funcionarios.php');
    }
    if ($_GET['action'] == "excluir") {
        $id = $_GET['id'];
        $query = "DELETE FROM tb_funcionarios WHERE id_funcionario='$id'";
        $result = mysqli_query($db, $query);
        header('Location: ../funcionarios.php');
    }
}

?>


