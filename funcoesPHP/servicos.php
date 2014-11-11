<?php
include ("../necessaryPHP/db_con.php");

if (isset($_POST['servico'])) {
    $servico = $_POST['servico'];
    $valor = $_POST['valor'];
}

if (isset($_GET['action'])){
    if ($_GET['action'] == "cadastrar") {
        $query = "INSERT INTO tb_servicos (nome_servico,valor_servico)
                  values('$servico', '$valor')";
        if (mysqli_query($db, $query)) {
            header('Location: ../servicos.php');
        } else {
            header('Location: ../servicos.php');
        }
    }

    if ($_GET['action'] == "editar") {
        $id = $_GET['id'];

        $query = "UPDATE tb_servicos SET nome_servico='$servico', valor_servico='$valor' WHERE id_servico='$id'";
        $result = mysqli_query($db, $query);
        mysqli_error($result);
        header('Location: ../servicos.php');
    }
    if ($_GET['action'] == "excluir") {
        $id = $_GET['id'];
        $query = "DELETE FROM tb_servicos WHERE id_servico='$id'";
        $result = mysqli_query($db, $query);
        header('Location: ../servicos.php');
    }
}

?>


