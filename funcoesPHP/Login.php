<?php
include ("../necessaryPHP/db_con.php");

if (isset($_POST['email_login']) && isset($_POST['password_login'])) {
    $email = $_POST['email_login'];
    $password = $_POST['password_login'];

    $query = "SELECT * FROM tb_user WHERE name_user = '$email' AND pass_user='$password' LIMIT 1";
    if (mysqli_query($db, $query)) {
        echo "Logado com sucesso";
        return;
    }

    if (isset($_GET['action'])){
        if ($_GET['action'] == "cadastrar") {
            $query = "INSERT INTO tb_user (name_user,pass_user)
                      values('$email', '$password')";
            if (mysqli_query($db, $query)) {
                echo "Cadastrado com sucesso";
                return;
            }
        }
    }

}


