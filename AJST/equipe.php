<?php 
session_start();
include'connexion.php' ;?>
<html>
<head>
	<title>Titre</title>
</head>

<body>

	<?php include("header.php") ; ?>
	<?php include("menu.php"); ?>


	<nav id="contenu"  >
		
		<nav class="gallery">
			<div id="news"><h1>A Propos</h1>
			<p>Ce Projet a été réalisé par la section Informatique de l'association Jeunes Science De Tunisie au sein du stage de Formation , Mars 2014 , effectué au centre sectoriel de formation en cuire et chaussure - Tazarka </p>
			</div><h1>L'equipe</h1>
			<center><table cellspacing="20" border="0">
				<tr>
					<td  align="center"><div  id="membres"><a tabindex="1"><img src="./team/trc.JPG" ></a> <ul><li>Mohamed T'RC</li><li>Trc@me.ma</li><li>Club Centrale - Tunis</li></ul></div></td>
					<td><div  id="membres"><a tabindex="1"><img src="./team/sidki.JPG"></a> <ul><li>Sidki KBOUBI</li><li>sidki@fedoraproject.com</li><li>Club El alia - Bizerte</li></ul></div></td>
					<td><div  id="membres"><a tabindex="1"><img src="./team/saif.JPG"></a> <ul><li>Saif Eddine BEN SASSI</li><li>victoresaif8@gmail.com</li><li>Club Sfax - Sfax</li></ul></div></td>
				</tr>
				<tr>
					<td><div  id="membres"><a tabindex="1"><img src="./team/ayoub.JPG"></a> <ul><li>Ayoub HITANA</li><li>ayoubhitana@hotmail.com</li><li>Club El Alia - Bizerte</li></ul></div></td>
					<td><div  id="membres"><a tabindex="1"><img src="./team/ahmed.JPG"></a> <ul><li>Ahmed ZAYED</li><li>ahmedzayed913@gmail.com</li><li>Club El Alia - Bizerte</li></ul></div></td>
					<td><div  id="membres"><a tabindex="1"><img src="./team/nadim.JPG"></a> <ul><li>Nadim GOUIA</li><li>nadim.gouia@gmail.com</li><li>Club El Alia - Bizerte</li></ul></div></td>
				</tr>
				<tr>
					<td><div  id="membres"><a tabindex="1"><img src="./team/chemak.JPG"></a> <ul><li>Ramy CHEMAK</li><li>ramymessi10@gmail.com</li><li>Club Centrale - Tunis</li></ul></div></td>					
					<td><div  id="membres"><a tabindex="1"><img src="./team/ragheb.JPG"></a> <ul><li>Ragheb GHILOUFI</li><li>rghiloufi@gmail.com</li><li>Club Mjez El Beb - Beja</li></ul></div></td>
					<td><div  id="membres"><a tabindex="1"><img src="./team/migalou.JPG"></a> <ul><li>Mohamed habib AYARI</li><li>ayari.med@hotmail.fr</li><li>Club Centrale - Tunis</li></ul></div></td>
				</tr><tr>
				<td><div  id="membres"><a tabindex="1"><img src="./team/las.JPG"></a> <ul><li>Ahmed LASMAR</li><li>hamoudalasmar@gmail.com</li><li>Club Centrale - Tunis</li></ul></div></td>

				</tr>
			</table></center>
						
		</nav>
		
	</nav>



<?php include("footer.php") ?>
</body>

</html>