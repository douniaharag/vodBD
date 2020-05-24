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
                    <li><a href= "vod.html"> Accueil</a></li>
					<li><a href= "consulterFilms.php" >Consulter</a></li>
					<li><a href=  "saisieTitreRecherche.html">Rechercher</a></li>
					<li><a href=  "saisieFilm.html">Ajouter</a></li>
					<li><a href= "saisieTitreSuppression.html">Supprimer</a></li>	
            
				</ul>
			</nav>
        </div>
        
        <?php


try{
			 $pdo = new PDO( 'mysql:host=localhost;dbname=vod', 'adminvod' , 'azerty' ) ;
			 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            
			 $req = "insert into Film (titre,annee,realisateur) values(?,?,?)";
			
			 $reponse = $pdo->prepare($req);
			 $reponse->execute([$_POST['titre'],$_POST['année'],$_POST['réalisateur'] ]);
			 
    
    
            
		}
			
		catch(PDOException $e){
			echo "Error :".$e->getMessage();
			die();
				
		}
	
 ?>

                    <p>Votre film à bien été ajouté </p>

                <table>
                    <tr>
                        <th>Titre</th>
                        <th>Année</th>
                        <th>Réalisateur</th>
                    </tr>
        <?php
                  echo "<tr>" ;    
                  
                  echo "<td>" . $_POST['titre'] . "</td>" ;
                  echo "<td>" . $_POST['année'] . "</td>" ;
                  echo "<td>" . $_POST['réalisateur']. "</td>" ;  
                 
                  echo "</tr>" ;
        ?>
                </table>