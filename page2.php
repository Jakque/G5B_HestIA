<?php 
session_start() 
 /*démarre le système de sessions
session_destroy()  : ferme la session du visiteur */


?>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
 		<link rel="stylesheet" href="page1.css" />
        <title>Application web</title>

    </head>


    <body>
    
    <?php include("entete.php");?>
    <?php include("menu.php");?>
    
    	<h1>
    		bonjour
    	</h1>
    	<p>
    		page 2 : <a href="page1.php">page 1</a>
    	</p>
    	<p>

	    Notre logo :<br />

	    <img src="logo.png" alt="Logo Hest-IA" height=20% width=20% />

		</p>
		
		 <!--  bas de page -->
    <?php include("bas_de_page.php");?>
    	    

    </body>

</html>