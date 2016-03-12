<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Medica</title>
		<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
    </head>
 
    <body>
 
    <!-- L'en-tête -->
    <header>
		<?php include ("navBar.php"); ?>
	</header>

    <body>
        <form method="POST" class="form-horizontal">
            <p>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Prénom</label>
                    <div class="col-sm-2">
                        <input type = "text"  class="form-control" name="name" id="name"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="surname" class="col-sm-2 control-label">Nom</label>
                    <div class="col-sm-2">
                        <input type = "text"  class="form-control" name="surname" id="surname"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="secu_social" class="col-sm-2 control-label">Numéro de Sécurité Social</label>
                    <div class="col-sm-2">
                        <input type = "text"  class="form-control" name="secu_social" id="secu_social"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="birth" class="col-sm-2 control-label">Date de naissance</label>
                    <div class="col-sm-2">
                        <input type="date"  class="form-control"/>               
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-2">
                        <button type="submit" class="btn btn-default">S'inscrire</button>
                    </div>
                </div>
            </p>

    </body>  
</html>