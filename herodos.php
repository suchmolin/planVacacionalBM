<?php 


$dt = new DateTime("now", new DateTimeZone('America/Caracas'));

$hoy_es = $dt->format('d-m-Y h:i:sa');

/* 
$hoy_es = date("d-m-Y h:i:sa");   

$la_hora = date("h:i:sa");  */

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/hero.css" />
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <title>Boostermath Plan Vacacional</title>
  </head>
  <body class="t_regular">
    <div id="app">
      <div class="hero ">
        <div class="heroNav">

            <img src="img_plan/logo-BM.svg" alt="">
            <div class="subMenu">
              
              <ul>
                <li><a href="">Etapas</a></li>
                <li><a href="">Galería</a></li>
              </ul>
              
              <a href="#contacto">Contáctanos</a>
            </div>
        </div>
        <div class="heroLeft t_regular">
          <img class="ninoHeroMob" src="img_plan/ninoHero.png" alt="">
          <div class="tituloHero">
            <h1>Plan Vacacional</h1>
            <img width="330px" class="GSHero" src="img_plan/GSHero.png" alt="">
            <img  class="itemsHero" src="img_plan/icons-steam.png" alt="">
            <h2>¡Diversión, creatividad e innovación</h2>
            <p>en un solo lugar!</p>
            <a href="#">¡Inscribe a tu futuro genio ahora!</a>
          </div>


          <img class="ninoHero" src="img_plan/ninoHero.png" alt="">
        </div>
        <div class="heroRight">
          <h3>¡Inscribe a tu futuro genio aquí!</h3>
          <form id="myForm" method="POST" class="form" action="" name="contact-form">

          <input type="hidden" id="Origen" name="Origen" value="Landing Booster" />  

            <input type="text" placeholder="Nombre y Apellido" name="Nombre">
            <input type="text" placeholder="Ciudad" name="Ciudad">
            <input type="email" placeholder="Correo Electrónico" name="Correo">
            <input type="number" placeholder="Número de contacto" name="Telf">


            <input type="hidden" id="Fecha_de_Solicitud" name="Fecha_de_Solicitud" value="<?php echo $hoy_es; ?>" />  


            <button class="" style="" type="submit" id='btn_send_me' name="submit" onclick="this.innerHTML='¡Enviando!';">Enviar</button>




            
          </form>
        </div>
      </div> 
    </div>
    <script type="module" src="js/google_sheet.js"></script>
  </body>
</html>
