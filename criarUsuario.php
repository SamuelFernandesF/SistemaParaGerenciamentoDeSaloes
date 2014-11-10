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
            <div class="col-md-offset-3 col-md-6" style="background-color: #ccc; height: 325px;margin-top: 20px; text-align: center">
                <div class="col-md-12" style="padding: 100px ">
                    Obrigado por criar uma nova conta !.
                    <form role="form" method="POST" action="funcoesPHP/Login.php?action=cadastrar">
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
                        <button onclick="" class="btn btn-default btn-block">Criar nova conta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>