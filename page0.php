<!DOCTYPE html>
<html>

	<!--  definition du site -->
    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="page1.css" />
        <title>HESTIA WEBSITE protection</title>

    </head>
    
    <body>

<p>
   	vous vous trouvez sur le site d HestIA.<br />
    Veuillez taper le mot de passe pour pouvoir y acceder   :
</p>


<?php 
    if (!isset($_POST['mot_de_passe']) )
    {
    
    
     include("formulaire.php");
	
    }
    
    
    // erreur dans le mot de passe
    elseif ($_POST['mot_de_passe'] !="HestIA")
    {
        include("formulaire.php");
        echo '<p>Le mot de passe est incorrect !</p>';
        
        
    }
	else {
		header('Location: page1.php');
		}
	?>

</body>
</html>