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


    
    try{
        $pdo =  new PDO( 'mysql:host=localhost;dbname=vod', 'adminvod' , 'azerty' ) ;
			 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    }catch(PDOException $exception){
        echo "Erreur:".$exception->getMessage();
    }
         $recherche= $_POST['titre'];
         $req=("SELECT * FROM Film WHERE titre LIKE '%$recherche%'");
         $reponse = $pdo->prepare($req);
         $reponse->execute();
        
        
       
      if ($ligne =$reponse->fetch()){
        
        ?>
     
                         <table>
                                <thead>
                                    <tr>
                                        <th>Numéro</th>
                                        <th>Titre</th>
                                        <th>Année</th>
                                        <th>Réalisateur</th>
                                </tr>
                                </thead>
                                <tr> 
                <?php                    
            
               
                        echo "<td>" . ( $ligne['numFilm'] ) . "</td>" ;
						echo "<td>" . ( $ligne['titre'] ) . "</td>" ;
						echo "<td>" . ( $ligne['annee'] ) . "</td>" ;
                        echo "<td>" . ( $ligne['realisateur'] ) . "</td>" ;
						echo "</tr>" ;
    }
        else{
             echo "<p>Désolé, nous n'avons pas trouvé votre film.</p>" ;
        }
        ?>
                                    
                                    