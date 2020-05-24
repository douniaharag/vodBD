<html>
	<head>
		<meta charset="utf-8">
		<link href="style/vod.css" rel="stylesheet" type="text/css">
        <link href="style/rechercher.css" rel="stylesheet" type="text/css">
        
	</head>
	<body>
		<div class="onglets">
			<nav>
				<ul>
                    <li><a href="vod.html">Accueil</a></li>
					<li><a href= "consulterFilms.php" "">Consulter</a></li>
					<li><a href=  "saisieTitreRecherche.html">Rechercher</a></li>
					<li><a href=  "saisieFilm.html">Ajouter</a></li>
					<li><a href= "saisieTitreSuppression.html">Supprimer</a></li>	
            
				</ul>
			</nav>
        </div>
		
        	<?php
        
        if (isset($_POST['titre'])) {
            echo "<p>Suppression du film " . $_POST['titre'] . " avec succès.</p>";
            
                    try{
                           $bd = new PDO( 'mysql:host=localhost;dbname=vod', 'adminvod' , 'azerty' ) ;
                           $supprimer = $_POST['titre'];
                           $req = "DELETE from Film where titre = '$supprimer' ";
                           $reponse = $bd->query($req);
                    }
            
                catch(PDOException $e){
                    echo "Error :".$e->getMessage();
                    die();
                    }
        }
        else {
                        echo "<p> Désolé, nous n'avons pas trouvé votre film.</p>" ;	
                    }
	
		?>
			
		
                       
    </body>
</html>
