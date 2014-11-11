<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body style="background-color: #eee">


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="background-color: black; height: 75px; color:white; text-align: center">
            Barra de navegação.
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8" style="background-color: #ddd; height: 325px; margin-top: 20px; text-align: center;">
                <strong>Carousel, ou texto falando sobre nossos serviços.</strong>
            </div>
            <div class="col-md-4" style="background-color: #ccc; height: 325px;margin-top: 20px; text-align: center">
                <div class="col-md-12" style="padding: 20px ">
                    <form role="form" method="POST" action="funcoesPHP/Login.php">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="email_login" name="email_login" placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password_login" id="password_login" placeholder="Password">
                            </div>
                        </div>
                        <button onclick="" class="btn btn-default btn-block">Logar</button>
                        <a href="criarUsuario.php"> Criar uma conta! </a>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4" style="border: 1px solid #3c3c3c; margin-top: 20px; text-align: center">
                <p> TEXTO GRANDE COM ICONE</p>
                <p> texto pequeno, pequenino, ino ino</p>
            </div>
            <div class="col-md-4" style="border: 1px solid #3c3c3c; margin-top: 20px; text-align: center">
                <p> TEXTO GRANDE COM ICONE</p>
                <p> texto pequeno, pequenino, ino ino</p>
            </div>
            <div class="col-md-4" style="border: 1px solid #3c3c3c; margin-top: 20px; text-align: center;">
                <p> TEXTO GRANDE COM ICONE</p>
                <p> texto pequeno, pequenino, ino ino</p>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>