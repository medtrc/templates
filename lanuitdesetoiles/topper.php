<!DOCTYPE html>
<html>
    <head>
        <meta property="og:image" content="http://la-nuit-des-etoiles.org/images/thumbail.png"/>
        <meta property="og:image:type" content="image/jpeg"/>
        <meta property="og:description" content="Bienvenue au site web officiel de La Nuit des étoiles !"/>
        <meta property="og:title" content="La Nuit Des Etoiles Tunisie" />        
        <meta property="og:url" content="http://la-nuit-des-etoiles.org/"/>
        <link rel="icon" type="image/png" href="https://cdn3.iconfinder.com/data/icons/mixed-3d-icons/512/Galaxy_3D-48.png"> 

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <?php echo $header;?>
        
        <script type="text/javascript">
            $(function(){
                $('#dropdown ul').hide();
                $('#dropdown').hover(function(){
                    $('#dropdown ul').slideDown('medium');
                }, function(){
                    $('#dropdown ul').slideUp('medium');
                });
                <?php echo $script;?>
                
            });
        </script>
        <title>La 24ème édition de la nuit des étoiles</title>
    </head>
    <body>
        <header>
            La 24<sup>ème</sup> édition<br>
            de la nuit des étoiles
            <div>L'astronomie à l'opensource</div>
        </header>
        <nav id="menu">

            <?php include('menu.php') ?>
            <ul id="menutop">  
                    <li><a style="width:100px;" href="index.php">Accueil</a></li>
                    <li><a style="width:200px;" href="whoarewe.php">qui sommes-nous?</a></li>
                    <li id="dropdown" style="width:150px;">  
                        <a href="#">Historique</a> 
                        <ul> 
				            <li><a href="23nuit/" target="_blank">La 23<sup>ème</sup> nuit des étoiles</a></li>
                            <li><a href="#"  target="_blank">La 22<sup>ème</sup> nuit des étoiles</a></li>   
                            <li><a href="21nuit/"  target="_blank">La 21<sup>ème</sup> nuit des étoiles</a></li>
                        </ul>                  
                    </li>  
                    <li><a style="width:150px;" href="event.php">L'évènement exposé</a></li>
                    <li><a style="width:120px;" href="contact.php">Contact</a></li>
        </nav>
        <div id="body">
<center><span id="findUs"><iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fnuit.des.etoiles.ajst&amp;width&amp;height=62&amp;colorscheme=dark&amp;show_faces=false&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=1455717957983430" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:62px;" allowTransparency="true"></iframe>
</span></center>