<?php
include ("../necessaryPHP/db_con.php");

echo "BOOTY GO UP, DOOWNN";

if (isset($_POST['email_login']) && isset($_POST['password_login'])) {
    $email = $_POST['email_login'];
    $password = $_POST['password_login'];

    echo $_POST['email_login'];

    $query = "SELECT * FROM tb_user WHERE name_user = '$email' AND pass_user='$password' LIMIT 1";
    $return = mysqli_query($db, $query);
    while ($linhas = mysqli_fetch_array($return)) {
        echo $linhas['name_user'];
        if ($linhas['name_user'] == $email && $linhas['pass_user'] == $password) {
            echo "ERRO?";
            header('Location: ../dashboard.php');
        }
    }

    if (isset($_GET['action'])){
        if ($_GET['action'] == "cadastrar") {
            $query = "INSERT INTO tb_user (name_user,pass_user)
                      values('$email', '$password')";
            if (mysqli_query($db, $query)) {
                echo "Cadastrado com sucesso";
                header('Location: ../dashboard.php');
            }
        }
    }

}


