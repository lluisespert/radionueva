<!DOCTYPE html>
<html>
<head>
    <title>Radio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <script type="text/javascrtipt" src="js/bootstrap.min.js"></script>
    <script id='sonic_js' data-port='8194' src='https://sonic.sistemahost.es/cp/widgets.js?r=460'></script>
    <script id='sonic_js' data-port='8194' src='https://sonic.sistemahost.es/cp/widgets.js?r=423'></script>
</head>
<body>
<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6"><img src="img/fondo2.jpg" width="100%" height="140">  
  </div>
</div>
<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-1">
      <div class="container mt-3">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <button type="button" class="btn btn-outline-success">Programas</button>  
        <button type="button" class="btn btn-outline-success">Eventos</button>
        <button type="button" class="btn btn-outline-success" onclick="location.href='vista/podcasts.php'">Podcasts</button>
      </div>
    </div>
    <div class="col-lg-6"><iframe src="https://chat.hardelectronicstation.es" width="100%" height="650"></iframe>  </div>
    <div class="col-lg-1">
      <img class="redondas" src="./img/hardmakers.png" onclick="location.href='https://www.hardmakersmusic.com'"></img>
      <img class="redondas" src="./img/makinaria.png" onclick="location.href='https://www.makinaria.es'"></img>
      <img class="redondas" src="./img/othertimes.jpg" onclick="location.href='http://www.othertimesrecords.com/'"></img>
      <img class="redondas" src="./img/mirakle.jpg" onclick="location.href='http://www.mirakledigitalshop.es/'"></img>
      <img class="redondas" src="./img/mod.png" onclick="location.href='http://www.mod-records.com/'"></img>
      <img class="redondas" src="./img/ruboy.png" onclick="location.href='http://www.portalmakina.com/'"></img>
      <img class="redondas" src="./img/bcn.png" onclick="location.href='https://www.bcnmusicshop.com'"></img>
    </div>
  </div>
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6 centrarDiv">
        <img class="redondas" src="./img/interplanet.png" onclick="location.href='https://www.interplanet-records.com/es/'"></img>
        <img class="redondas" src="./img/the_bass_records.png" onclick="location.href='https://www.thebassrecords.com/'"></img>
        <img class="redondas" src="./img/pureessence.png" onclick="location.href='https://www.discogs.com/es/artist/7858999-TheName-2'"></img>
        <img class="redondas" src="./img/alien.png" onclick="location.href='https://alienhard.bandcamp.com/'"></img>
        <img class="redondas" src="./img/ecdm.png" onclick="location.href='https://ecdm-records.com/'"></img>
        <img class="redondas" src="./img/pildo.png" onclick="location.href='https://privatedownloadshop.com/tienda'"></img>
      </div>
    </div>
  </div>
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-4">
        <iframe src="https://sonic.sistemahost.es/cp/widgets/player/single/?p=8194" height="110" width="520" scrolling="no" style="border:none;"></iframe>
        <p>Número online de oyentes: <p id='sonic_listeners'></p></p>    
      </div>
      <div class="col-lg-4">
        <iframe src="https://sonic.sistemahost.es/cp/widgets/dj/?p=8194" height="160" width="650" scrolling="no" style="border:none;"></iframe>
      </div>
    </div>
  </div>
</div>
</body>
</html>
