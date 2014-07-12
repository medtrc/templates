<?php 
session_start();
include'connexion.php' ;?>
<html>
<head>
	<title>Ajout article</title>
	<?php include("header.php") ;?>
	<?php include("menu.php")   ;?>

<nav id="contenu">
        <div id="news">
 <?php

$id=$_GET['idArt'];
$req=mysql_query("SELECT * FROM articles where idArt='$id'");
while($lignes=mysql_fetch_array($req))
{
	?>
	<h3><?php echo $lignes[1]; ?> </h3>
 
          <h2><?php echo $lignes[4]; ?></h2>
             <center><IMG SRC="images/Ajst.jpg" id="imgarticle"></center>
             <p id="article">
             <?php
            $contenu=$lignes[3] ;
            $contenu=preg_replace('/\n(\r)?/','<br />', $contenu) ;
              echo $contenu; 

             ?> </p> 
             <small class="float-right"><?php echo " ".$lignes[5]." - ".$lignes[8] ;?> </small>
            <small class="float-left"><?php echo $lignes[7]; ?> </small>
        </div>
    </nav>  
 <?php
 }
 ?>             
    <?php include("footer.php");?>
</body>
</html>