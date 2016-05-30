<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>XML Projet</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Projet XML</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Accueil</a>
                    </li>
                    <li>
                        <a href="#">Application</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Projet XML</h1>
                <p class="lead">Participants : </p>
                <ul class="list-unstyled">
                    <li>Bootstrap v3.3.6</li>
                    <li>jQuery v1.11.1</li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

	<form method="GET" action="resultat.php" >
	<fieldset style="margin-left:500px;margin-right:500px;">
		<legend>Apprenti</legend>
			<div>
				<label for="nom" >Nom :</label>
				<input name="nom" type="text"/>
			</div>
			<div>
				<label for="prenom" >Prenom :</label>
				<input name="prenom" type="text"  />
			</div>
			<div>
				<label for="formation" >Formation :</label>
				<input name="formation" type="text"/>
			</div>
			
			<div>
				<label for="annee" >Annee :</label>
				<input name="annee" type="text"/>
			</div>
			
			<div>
				<label for="contrat" >Contrat :</label>
				<input name="contrat" type="text"/>
			</div>
			
			<div>
				<label for="mail" >Mail :</label>
				<input name="mail" type="text"/>
			</div>
			
			<div>
				<label for="ine" >INE :</label>
				<input name="ine" type="text"/>
			</div>
			
			<div>
				<label for="etablissement" >Etablissement :</label>
				<input name="etablissement" type="text"/>
			</div>
			
					<div>
						<label for="etabNom" >Nom :</label>
						<input name="etabNom" type="text"/>
					</div>
					
					<div>
						<label for="tuteur" >Tuteur :</label>
						<input name="tuteur" type="text"/>
					</div>
					
					<div>
						<label for="tutNom" >Nom :</label>
						<input name="tutNom" type="text"/>
					</div>
					
					<div>
						<label for="tutPre" >Prenom :</label>
						<input name="tutPre" type="text"/>
					</div>
					
					<div>
						<label for="tutProf" >Profession :</label>
						<input name="tutProf" type="text"/>
					</div>
					
					<div>
						<label for="tutMail" >Mail :</label>
						<input name="tutMail" type="text"/>
					</div>
			
			
			
			<div class="button">
				<button type="submit">Envoyer !</button>
			</div>
	</fieldset>
	
	<fieldset style="margin-left:500px;margin-right:500px;">
		<legend>Entreprise</legend>
		
			<div>
				<label for="nom" >Nom :</label>
				<input name="nom" type="text"/>
			</div>
			
			<div>
				<label for="siret" >Siret :</label>
				<input name="siret" type="text"/>
			</div>
			
			<div>
				<label for="adresse" >Adresse :</label>
				<input name="adresse" type="text"/>
			</div>
			
			<div>
				<label for="secteur" >Secteur :</label>
				<input name="secteur" type="text"/>
			</div>
			
			<div>
				<label for="taille" >Taille :</label>
				<input name="taille" type="text"/>
			</div>
			
			<div>
				<label for="tuteur" >Tuteur :</label>
				<input name="tuteur" type="text"/>
			</div>
			
						<label for="tutNom" >Nom :</label>
						<input name="tutNom" type="text"/>
					</div>
					
					<div>
						<label for="tutPre" >Prenom :</label>
						<input name="tutPre" type="text"/>
					</div>
					
					<div>
						<label for="tutProf" >Profession :</label>
						<input name="tutProf" type="text"/>
					</div>
					
					<div>
						<label for="tutMail" >Mail :</label>
						<input name="tutMail" type="text"/>
					</div>
	</fieldset>	
	
	
	<fieldset style="margin-left:500px;margin-right:500px;">
		<legend>Contenu</legend>
		
		    <div>
				<label for="problematique" >Problematique :</label>
				<input name="problematique" type="text"/>
			</div>
			
			<div>
				<label for="missions" >Missions :</label>
				<input name="missions" type="text"/>
			</div>
			
					<div>
						<label for="nomMiss" >Noms :</label>
						<input name="nomMiss" type="text"/>
					</div>
			
			<div>
				<label for="technologies" >Technologies :</label>
				<input name="technologies" type="text"/>
			</div>
			
			<div>
				<label for="outils" >Outils :</label>
				<input name="outils" type="text"/>
			</div>
			
			<div>
				<label for="motscles" >Mots cles :</label>
				<input name="motscles" type="text"/>
			</div>
			
			<div>
				<label for="noteappreciation" >Note appreciation :</label>
				<input name="noteappreciation" type="text"/>
			</div>
			
			
	</fieldset>		
</form>

			
	
	
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
