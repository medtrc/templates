<?php
$header='
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAfNsTY9q-Ug2249w8werO4HsTXUMZAbNc&sensor=true"></script>
    <script type="text/javascript" src="jquery.gmap.min.js"></script>
    <script src="https://www.google.com/jsapi?key=AIzaSyAfNsTY9q-Ug2249w8werO4HsTXUMZAbNc" type="text/javascript"><!--mce:0--></script>
<script type="text/javascript" src="dnews.js"></script>    
<link rel="stylesheet" type="text/css" href="dnews.css"/>
<script type="text/javascript">google.load("feeds", "1");</script>';
$script='$(\'#dnews\').dnews({ feedurl:\'http://api.twitter.com/1/statuses/user_timeline.rss?screen_name=22eNuitEtoiles\', showdetail: true, controls: false });
    $("#map").gMap({latitude: 36.874883,
     longitude: 10.335002,
     zoom: 16,
     markers:[
		{
			address: "Parc Sidi Bou Saïd, Tunisia",
			html: "Lieu de l\'évènement",
			popup: true
        }]
                });
                
';
include 'topper.php';
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1455717957983430&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<link href='http://fonts.googleapis.com/css?family=Limelight' rel='stylesheet' type='text/css'>

</span></center>
<div class="container nuitlogo" style ="text-align:center">
<!-- <div id="map"></div><div>L'évènement aura lieu le samedi, 20 juillet 2013 à partir de 21h , au parc Sidi Bou Saïd. Vous pouvez consulter la carte integrée sur notre site ou ce <a href="https://maps.google.com/maps?q=Parc+Sidi+Bou+Sa%C3%AFd&ie=UTF8&hq=Parc&hnear=Sidi+Bou+Said,+Carthago,+Carthage,+Tunis,+Tunisia&t=h&z=15&vpsrc=0&cid=9353933797285903104&iwloc=A">lien</a> Google Maps. Ne le manquez surtout pas.</div> --> 
<h2 style="font-family: 'Limelight', cursive;"> Coming soon.. Stay tuned! </h2> 

        <div class="videoWrapper">
          <iframe  id="video" src='http://www.youtube.com/v/ecWCTAuYZpk?enablejsapi=0&iv_load_policy=3&modestbranding=0&suggestedQuality=hight&vq=hight&theme=dark&showinfo=0&controls=0&wmode=opaque&autoplay=0&rel=0&start=0&end=0&autohide=1' frameborder='0' allowfullscreen></iframe>
        </div>


<br/> </div> 

<?php
include 'footer.php';
?>
