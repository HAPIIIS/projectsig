<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8" />
      <title>Pusat Perbelanjaan di Bekasi</title>
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
      <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
      <link rel="icon" href="image/map.png"/>
      <style>
        #map {
          top: 0%;
          width: 100%;
          height: 550px;
        }
        img {
          width: 200px;
          height: 150px;
        }
      </style>
    </head>
  
    <body>
      <h1 align="center">Pusat Perbelanjaan di Bekasi</h1>
      <div id="map"></div>
      <script type="text/javascript">
        var map = L.map('map').setView([-6.242202927833853, 106.98228948271188], 13);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
          maxZoom: 18,
          id: 'mapbox/streets-v11',
          tileSize: 512,
          zoomOffset: -1,
          accessToken: 'pk.eyJ1IjoibGludGFuZ2FkaSIsImEiOiJja3g4ZTVteWYyeDM3MndwOW4xYXkyYjZyIn0.ps-GNGrNY363-_9cm-6bmA',
        }).addTo(map);
  
        var icon = L.icon({
          iconUrl: 'image/placeholder.png',
          iconSize: [40, 50], // size of the icon
        });
  
        var GrandGalaxy = L.marker([-6.269657297491104, 106.97163185687175], { icon: icon }).addTo(map).bindPopup('<center><img src="image/ggp.jpg"> <br/> <b>Grand Galaxy Park</b>');
        var SMB = L.marker([-6.225914284381187, 107.00110858322947], { icon: icon }).addTo(map).bindPopup('<center><img src="image/smb.jpg"> <br/> <b>Summarecon Mall Bekasi</b>');
        var MM = L.marker([-6.24836200957163, 106.99107328137492], { icon: icon }).addTo(map).bindPopup('<center><img src="image/mm.jpg"> <br/> <b>Metropolitan Mall</b>');
        var GrandMetro = L.marker([-6.248945554084082, 106.98453529615627], { icon: icon }).addTo(map).bindPopup('<center><img src="image/gm.jpg"> <br/> <b>Grand Metropolitan Mall</b>');
        var BJ = L.marker([-6.239970464477992, 107.00255210148265], { icon: icon }).addTo(map).bindPopup('<center><img src="image/bj.jpg"> <br/> <b>Bekasi Junction</b>');
        var Trans = L.marker([-6.242607531183467, 107.01705106982438], { icon: icon }).addTo(map).bindPopup('<center><img src="image/transpark.jpeg"> <br/> <b>Transpark Juanda</b>');
        var LP = L.marker([-6.250526834317798, 106.99110623655122], { icon: icon }).addTo(map).bindPopup('<center><img src="image/lp.jpg"> <br/> <b>Living Plaza</b>');
        var Revo = L.marker([-6.252249764706212, 106.98856735602612], { icon: icon }).addTo(map).bindPopup('<center><img src="image/revo.jpg"> <br/> <b>Revo Town Mall</b>');
      </script>

        <div class="container-logout">
            <form action="" method="POST" class="login-email">
                <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
                <div class="input-group">
                    <a href="logout.php" class="btn">Logout</a>
                </div>
            </form>
        </div>
    </body>
</html>