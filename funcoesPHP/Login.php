<?php
include ("../necessaryPHP/db_con.php");

<<<<<<< HEAD
=======
echo "BOOTY GO UP, DOOWNN";

>>>>>>> 213a82d31e093762bf41b5f2b6b82f98447f1a3d
if (isset($_POST['email_login']) && isset($_POST['password_login'])) {
    $email = $_POST['email_login'];
    $password = $_POST['password_login'];

<<<<<<< HEAD
=======
    echo $_POST['email_login'];

>>>>>>> 213a82d31e093762bf41b5f2b6b82f98447f1a3d
    $query = "SELECT * FROM tb_user WHERE name_user = '$email' AND pass_user='$password' LIMIT 1";
    $return = mysqli_query($db, $query);
    while ($linhas = mysqli_fetch_array($return)) {
        echo $linhas['name_user'];
        if ($linhas['name_user'] == $email && $linhas['pass_user'] == $password) {
<<<<<<< HEAD
=======
            echo "ERRO?";
>>>>>>> 213a82d31e093762bf41b5f2b6b82f98447f1a3d
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


