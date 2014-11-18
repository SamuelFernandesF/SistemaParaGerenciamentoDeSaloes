<?php include ("header.php"); ?>
<br><br><br>

    <div class="container" style="height: 450px;">

      <form class="form-signin" role="form" method="post" action="funcoesPHP/Login.php">
        <h2 class="form-signin-heading" style="text-align: center">Acesse</h2>
        <input type="email" name="email_login" class="form-control" placeholder="Usuário" required autofocus>
        <input type="password" name="password_login" class="form-control" placeholder="Senha" required>
      
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar >></button>
      </form>

    </div> 
<br><br>

<?php include ("footer.php"); ?>
