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
	<!--<?php
	$host="localhost"; 
	$user="root"; 
	$password=""; 

	mysql_connect($host,$user,$password); 
	$sql="project1";
	$result=mysql_query($project1); 
	?> -->

	<?php
	try
	{
	       $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
	}
	catch (Exception $e)
	{
	       die('Erreur : ' . $e->getMessage());
	}

	$reponse = $bdd->query('SELECT * FROM `patient` WHERE 1');

	/*while ($donnees = $reponse->fetch())
	{
	     echo $donnees['secu_social'];
	}

$reponse->closeCursor();*/
	?>
	<body>
		 <div> 
			<form method="post" action='' class="form-horizontal">
				<p>
					<div class="jumbotron">
						<h2>Patient</h2>

						<div class="form-group">
							<label for="carte_vitale"  class="col-sm-2 control-label">Numéro Carte Vitale</label>
							<div class="col-sm-2">
								<input type = "text" name="carte_vitale" id="vitale"/>
							</div>
						</div>

						<div class="form-group">
							<label for="pass"  class="col-sm-2 control-label">Mot de passe</label>
							<div class="col-sm-2">
								<input type = "password" name="pass" id="pass"/>
							</div>
						</div>

				

						<div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <div class="checkbox">
						        <label>
						          <input type="checkbox"> Remember me
						        </label>
						      </div>
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