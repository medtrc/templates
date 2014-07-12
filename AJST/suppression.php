
<?php include 'connexion.php'; ?>


<?php 
/*
//ouverture de la session
 session_start();

 //tester sur le type d'admin s'il nest pas conecté en le redirige vers la page index
  if($_SESSION['type']!='adminC')
  { 
 header("Location: index.php"); 
    exit; 
 }
	//le cas contraire
  else {*/
  	//recuperation de l id du membre
$idM = $_GET['idM'];
	//execution de la requete de suppression
$requete=mysql_query("DELETE FROM membres WHERE idM='$idM' ") or die ("*** Erreur dans la requ&ecirc;te ***<br>");

//si la requete est bien lancer on lance un script
if($requete)
{
?>
<script type="text/javascript" language="javascript">
window.alert("Suppression effectuée");
document.location.href='./liste_membres.php';
</script>;	
<?php
}
//}
?>