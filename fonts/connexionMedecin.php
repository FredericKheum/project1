<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Medica- Connexion</title>
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
		
    </head>
	<header>
		<?php include ("navBar.php"); ?>
	</header>	
	<body>
		 <div> 
			<form method="post" class="form-horizontal">
				<p>
					<div class="jumbotron">
						<h2>Médecin</h2>
						<div class="form-group">
							<label for="mon_id" class="col-sm-2 control-label">Identifiant</label>
							<div class="col-sm-2">
								<input type = "text" name="" id="mon_id" />
							</div>
						</div>

						<div class="form-group">
							<label for="pass" class="col-sm-2 control-label">Mot de passe </label>
							<div class="col-sm-2">
								<input type="password" name="pass" id="pass"/>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-2">
								<button type="submit">Connexion</button>
							</div>
						</div>
					</div>
				</p>		
			</form>
   		<div>  
	</body>
</html>