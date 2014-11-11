<?php include ("header.php"); ?>

<br><br><br>
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" style="height: 499px;">
		<form role="form" method="POST" action="funcoesPHP/Login.php?action=cadastrar">
			<h2 style="text-align: center">Insira um e-mail e uma senha válidos<br/><br/></h2>

			<div class="form-group">
				<input type="email" name="email" id="email_login" name="email_login" placeholder="Email" class="form-control input-lg" tabindex="4">
			</div>

            <div class="form-group">
				<input type="password" name="password_login" id="password_login" placeholder="Password"class="form-control input-lg" tabindex="5">
			</div>

			
			
			<div class="row">
				<div><input onclick="" type="submit" value="Cadastre" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
			</div>
		</form>
	</div>
</div>

</div>



<?php include ("footer.php"); ?>

