<?php
include ("../necessaryPHP/db_con.php");

$servico = $_POST['servico'];
$valor = $_POST['valor'];
$data = $_POST['data'];
$profissional = $_POST['profissional'];

if (isset($_GET['action'])){
    if ($_GET['action'] == "cadastrar") {
        $query = "INSERT INTO tb_pagamentos (servico_pagamento,valor_pagamento,data_pagamento,profissional_pagamento)
                  values('$servico', '$valor','$data','$profissional')";
        if (mysqli_query($db, $query)) {
            header('Location: ../pagamentos.php');
        } else {
            header('Location: ../pagamentos.php');
        }
    }

    if ($_GET['action'] == "editar") {
        $id = $_GET['id'];
        $query = "UPDATE tb_pagamentos SET servico_pagamento='$servico',valor_pagamento='$valor',data_pagamento='$data',profissional_pagamento='$profissional' WHERE id_pagamento='$id'";
        $result = mysqli_query($db, $query);
    }
}

?>


