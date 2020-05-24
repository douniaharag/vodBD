<html>
	<head>
		<meta charset="utf-8">
		<link href="style/vod.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="onglets">
			<nav>
				<ul>
                    <li><a href="vod.html">Accueil</a></li>
					<li><a href= "consulterFilms.php" >Consulter</a></li>
					<li><a href=  "saisieTitreRecherche.html">Rechercher</a></li>
					<li><a href=  "saisieFilm.html">Ajouter</a></li>
					<li><a href= "saisieTitreSuppression.html">Supprimer</a></li>	
            
				</ul>
			</nav>
        </div>
		
		<table>
		
			<thead>
				
				<tr>
					<th>Numéro</th>
					<th>Titre</th>
					<th>Année</th>
					<th>Réalisateur</th>
				
				</tr>
				
			</thead>
			
			<tbody>
                <?php

try {
	$bd = new PDO( 'mysql:host=localhost;dbname=vod', 'adminvod' , 'azerty' ) ;
    $sql = 'select * from Film' ;
    $resultat = $bd->query( $sql ) ;
    
     $lignes = $resultat->fetchAll( PDO::FETCH_ASSOC ) ;
    
        foreach ($lignes as $ligne) {
                echo "<tr>
                <td>".$ligne['numFilm']."</td>
                <td>".$ligne['titre']."</td>
                <td>".$ligne['annee']."</td>
                <td>".$ligne['realisateur']."</td>
                </tr>";
	}
        echo "</table></center>";
} catch(PDOexeption $e) {
        echo "Erreur : ".$e->getMessage()."<br/>";
        die();
}
                
?>
       
       
            </tbody>
        </table>
        
</body>
</html>
				
				