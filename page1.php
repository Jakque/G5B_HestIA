<?php session_start() ?>
<!--  démarre le système de sessions
session_destroy()  : ferme la session du visiteur -->
<!DOCTYPE html>
<html>

	<!--  definition du site -->
    <head>

        <meta charset="utf-8" />
        <!-- <link rel="stylesheet" href="page1.css"  > -->
        <link href="page1.css" rel="stylesheet" type="text/css" />
      
        <title>HESTIA WEBSITE</title>

    </head>
    
    <body>
    <div id="main">

    
    <?php include("entete.php");?>
    <?php include("menu.php");?>
    
    <!-- le corps -->
	
	
	    <div id="corps">
        <div id="content">
						<div id="box1">
							<h2>
								HestIA
							</h2>
							
							<p>
								listes des pieces
							</p>
						</div>
						<div id="box2">
							<h3>
								liste des capteurs pour la pieces selectionnee
							</h3>
							
						</div>
						<div id="box3">
							<h3>
								options
							</h3>
							
							<ul class="linkedList">
								<li class="first">
									<a href="#">modifier</a>
								</li>
								<li>
									<a href="#">supprimer</a>
								</li>
								<li>
									<a href="#">ajouter</a>
								</li>
								
								<li class="last">
									<a href="#">etat</a>
								</li>
							</ul>
						</div>
						<br class="clear" />
					</div>
    </div>
    
          
      
    </div>
 <!--  bas de page -->
    <?php include("bas_de_page.php");?>
     
     
    
    
    
      </body>
</html>