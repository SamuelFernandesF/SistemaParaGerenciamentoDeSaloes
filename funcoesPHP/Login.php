<?php
include ("../necessaryPHP/db_con.php");

if (isset($_POST['email_login']) && isset($_POST['password_login'])) {
    $email = $_POST['email_login'];
    $password = $_POST['password_login'];

    $query = "SELECT * FROM tb_user WHERE name_user = '$email' AND pass_user='$password' LIMIT 1";

    if (mysqli_query($db, $query)) {
        echo "Logado com sucesso";
    }

}


