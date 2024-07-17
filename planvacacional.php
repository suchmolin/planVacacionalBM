<?php 

$dt = new DateTime("now", new DateTimeZone('America/Caracas'));

$hoy_es = $dt->format('d-m-Y h:i:sa');


?>



<?php include ("a_header_b.php"); ?>

<title>Plan Vacacional | Generación STEAM 2024</title>
<link rel="canonical" href="https://www.boostermath.com/planvacacional">

<meta content="" name="keywords">


<meta content="Únete a nuestro Plan Vacacional Generación STEAM. Explora el mundo de la Ciencia, Tecnología, Ingeniería, Arte y Matemáticas de una manera divertida." name="description">



</head>



<body class="t_regular">

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>
    <!-- Spinner End -->





    <div id="app">
      <div class="hergo ">
        <div class="heroNav">

            <img src="img_plan/logo-BM.svg" alt="Logo BoosterMath">
            <div class="subMenu">
              
              <ul>
                <li><a href="#ages">Etapas</a></li>
                <li><a href="#galeria">Galería</a></li>
              </ul>
              
              <a href="#foot_l">Contáctanos</a>
            </div>
        </div>

        <div class="heroLeft t_regular">

          <div class="tituloHero">
            <h1>Plan Vacacional</h1>
            <img width="330px" class="GSHero" src="img_plan/GSHero.webp" alt="Generación Steam Plan Vacacional">
            <img  class="itemsHero" src="img_plan/icons-steam.webp" alt="Iconos Steam de colores">
            <h2>¡Diversión, creatividad e innovación</h2>
            <p>en un solo lugar!</p>
            <a href="#">¡Inscribe a tu futuro genio ahora!</a>
          </div>


          <img class="ninoHero" src="img_plan/ninoHero.webp" alt="Estudiante de Ciencias">
        </div>

        <div id="llenar" class="heroRight">
          <h3>¡Inscribe a tu futuro genio aquí!</h3>
          <form id="myForm" method="POST" class="form" action="" name="contact-form">

          <input type="hidden" id="Origen" name="Origen" value="Landing Booster" />  

            <input type="text" placeholder="Nombre y Apellido" name="Nombre" required>
            <input type="text" placeholder="Ciudad" name="Ciudad" required>
            <input type="email" placeholder="Correo Electrónico" name="Correo" required>
            <input type="number" placeholder="Número de contacto" name="Telf" required>


            <input type="hidden" id="Fecha_de_Solicitud" name="Fecha_de_Solicitud" value="<?php echo $hoy_es; ?>" />  


            <button class=""  type="submit" id='btn_send_me' name="submit" onclick="this.innerHTML='¡Enviando!';">Enviar</button>




            
          </form>
        </div>


      </div> 
    </div>
    <script type="module" src="js/google_sheet.js"></script>



















    <section class="img-fluid back_turque_h_light  rev_rev_sube">

<div class="text-center wow fadeInUp" data-wow-delay="0.1s">             

<!-- <span class="text_color_aa cont_small" >Programa la fecha de unas <b>vacaciones inolvidables</b> para tus hijos:</span> -->

<h2 class="text_color_aa mt-5 "><b class="t_ebold">Potencia las capacidades de tu hijo en estas vacaciones</b></h2>


     </div>   



    <!-- Service Start -->
    <div class="container-xxl  py-5"  >
        <div class="container" style=" align-items: center;
    justify-content: center; display:flex;" >



            <div class="col-12 row g-4">



                <div class="col-lg-3 col-6 wow   fadeInUp" data-wow-delay="0.1s" >
                    <div id="calendarioz_a"  class="service-item text-center pt-3" style="border-radius: 30px; ">
                        <div class="p-4">

<img loading="lazy" id="calendarImage_a" class="mt-1" src="img_plan/calendar.webp" width="74" height="75" alt="Icono Calendario" ><br><br>

                            <span class="text_color_aa cont_cajetillas" ><b class="t_ebold">2 SEMANAS</b></span><br>
                            <span class="text_color_aa cont_cajetillas t_medium" >de diversión</span>

                        </div>
                    </div>
                </div>


                <script>
    document.getElementById('calendarioz_a').addEventListener('mouseenter', function() {
        document.getElementById('calendarImage_a').src = 'img_plan/calendar_w.png'; // Cambia 'nuevo_calendar.webp' por el nombre de tu nueva imagen
    });

    document.getElementById('calendarioz_a').addEventListener('mouseleave', function() {
        document.getElementById('calendarImage_a').src = 'img_plan/calendar.webp'; // Restablece a la imagen original
    });
</script>




                <div class="col-lg-3 col-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div id="calendarioz_b" class="service-item text-center pt-3" style="border-radius: 30px; " >
                        <div class="p-4">

                        <img loading="lazy" id="calendarImage_b" class="mt-1" src="img_plan/teacher.webp" width="76" height="76"  alt="Icono Profesor dando clases en Plan Vacacional" ><br><br>

<span class="text_color_aa cont_cajetillas" ><b class="t_ebold">PROFESORES</b></span><br>
<span class="text_color_aa cont_cajetillas t_medium" >calificados</span>

                        </div>
                    </div>
                </div>



                <script>
    document.getElementById('calendarioz_b').addEventListener('mouseenter', function() {
        document.getElementById('calendarImage_b').src = 'img_plan/teacher_w.png'; // Cambia 'nuevo_calendar.webp' por el nombre de tu nueva imagen
    });

    document.getElementById('calendarioz_b').addEventListener('mouseleave', function() {
        document.getElementById('calendarImage_b').src = 'img_plan/teacher.webp'; // Restablece a la imagen original
    });
</script>



                <div class="col-lg-3 col-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div id="calendarioz_c" class="service-item text-center pt-3" style="border-radius: 30px; ">
                        <div class="p-4">

                        <img loading="lazy" id="calendarImage_c" class="mt-1" src="img_plan/clock.webp" width="74" height="75"  alt="Icono Reloj" ><br><br>

<span class="text_color_aa cont_cajetillas" ><b class="t_ebold">40 HORAS</b></span><br>
<span class="text_color_aa cont_cajetillas t_medium" >académicas</span>

                        </div>
                    </div>
                </div>




                <script>
    document.getElementById('calendarioz_c').addEventListener('mouseenter', function() {
        document.getElementById('calendarImage_c').src = 'img_plan/clock_w.png'; // Cambia 'nuevo_calendar.webp' por el nombre de tu nueva imagen
    });

    document.getElementById('calendarioz_c').addEventListener('mouseleave', function() {
        document.getElementById('calendarImage_c').src = 'img_plan/clock.webp'; // Restablece a la imagen original
    });
</script>



                <div class="col-lg-3 col-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div id="calendarioz_d" class="service-item text-center pt-3" style="border-radius: 30px; ">
                        <div class="p-4" >

                        <img loading="lazy" id="calendarImage_d" class="mt-1" src="img_plan/age.webp" width="72" height="71" alt="Icono diferentes edades" ><br><br>

<span class="text_color_aa cont_cajetillas t_medium" >Edades entre</span><br>
<span class="text_color_aa cont_cajetillas" ><b class="t_ebold">6-14 AÑOS</b></span>

                        </div>
                    </div>
                </div>




                <script>
    document.getElementById('calendarioz_d').addEventListener('mouseenter', function() {
        document.getElementById('calendarImage_d').src = 'img_plan/age_w.png'; // Cambia 'nuevo_calendar.webp' por el nombre de tu nueva imagen
    });

    document.getElementById('calendarioz_d').addEventListener('mouseleave', function() {
        document.getElementById('calendarImage_d').src = 'img_plan/age.webp'; // Restablece a la imagen original
    });
</script>


            </div>     <!-- cierre row 12-->



        </div>
    </div>
    <!-- Service End -->






    <div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">  

<a href="#llenar" class="btn btn-primary_alt_short_wwhite_a_mora t_ebold" >RESERVA EL CUPO</a>

     </div>   






</section>








<section class="back_turque_h" >

<!-- Courses Start -->
<div class="container-xxl mt-4 py-4">
        <div class="container">
        
         <div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">             

    <!-- <span class="text_color_aa cont_small" >Programa la fecha de unas <b>vacaciones inolvidables</b> para tus hijos:</span> -->

    <h2 class="text-white cont_semi t_regular "> 2 semanas para despertar su creatividad</h2>
    <h2 class="text-white cont_semi t_ebold"><b> Escoge la fecha y horario de tu preferencia</b></h2>

         </div>   


         


        <div class="col-12 row g-4 mb-2">


<div class="col-lg-6 col-12 wow  muevete_centro  fadeInUp" data-wow-delay="0.1s" >
    <div class="service-itemaa text-center pt-3" style="border-radius: 30px; ">
        <div class="p-4">

<img loading="lazy" class="mt-1" src="img_plan/calendar_month.webp"  alt="Calendario Plan Vacacional" width="60;" height="60"><br>

<span class="text_color_aa cont_semi_peq " ><span class="t_medium">Programa sus</span> <b class="t_ebold">vacaciones inolvidables:</b></span><br>
<img loading="lazy" class="mt-1 infoimg" src="img_plan/Group_289641.webp"  alt="Fechas Plan Vacacional" width="360" height="188">

        </div>
    </div>
</div>


<div class="col-lg-6 col-12 wow muevete_centro fadeInUp" data-wow-delay="0.3s">
    <div class="service-itemaa text-center pt-3" style="border-radius: 30px; " >
        <div class="p-4">

        <img loading="lazy" class="mt-1" src="img_plan/schedule-2.webp"  alt="Horas Plan Vacacional" width="60;" height="60" ><br>

        <span class="text_color_aa cont_semi_peq " ><span class="t_medium">En el</span> <b class="t_ebold">horario</b> <span class="t_medium">que prefieras:</span></span><br>
        <img loading="lazy" class="mt-1 infoimg" src="img_plan/Frame_289642.webp"  alt="Horarios Plan Vacacional" width="360" height="188">

        </div>
    </div>
</div>

        </div>






        </div>
    </div>
    <!-- Courses End -->




    <div class="text-center wow fadeInUp mb-4" data-wow-delay="0.1s">  

<a href="#llenar" class="btn btn-primary_alt_short_wwhite_a_mora_bb t_ebold" >REGÍSTRATE AQUÍ</a>

     </div>  



</section>







<section class="img-fluid back_azul_mora_ll" style="background-image:url('img_plan/math-bg-20.webp'); margin-bottom: 40px;"  >     



<!-- About Start -->
<div class="container-xxl py-2 margen_positivo ">
        <div class="container">
            <div id="generacion" class="row g-4">



            <div class="text-center wow  fadeInUp " data-wow-delay="0.1s">             



<span class="text_color_aa cont_semi extrabbb t_ebold"><b>Plan Vacacional</b></span><br>

<span><img loading="lazy" class=" textoimg" src="img_plan/titulo-GS.webp"  alt="Generación Steam Plan Vacacional" ></span>



     </div>   
           




     <div class="col-lg-7 pe-4 cent_micro wow fadeInUp" data-wow-delay="0.1s"  >
                <div class="position-relative " >

<img loading="lazy" class="img-fluid " loading="lazy" src="img_plan/chico_exitoso.webp"
                     alt="Chico exitoso" style="width:100%; "  width="534" height="258" >

                </div>
    </div>





<div  class="col-lg-5  wow ps-4"   data-wow-delay="0.3s" >


<h4 class=" mb-4 text_color_aa cont_semi_p_new t_regular vaca_text" >Vacaciones divertidas y llenas de mucha ciencia, tecnología, ingeniería, arte y matemáticas.</h4>

<h4 class="mb-4 text_color_aa cont_semi_p_new"><b class="t_ebold">Desarrolla todo el potencial de tu pequeño genio en las áreas STEAM con nuestro Plan Vacacional.<b></h4>





<div class="mt-2  btn_centrate  "  >
<a href="#llenar" class="btn btn-primary_alt_short_wwhite_a_mora t_ebold" >¡APROVECHA YA!</a>
</div>


</div>



                

            </div>
        </div>
    </div>
    <!-- About End -->



    </section>













 <!-- About start -->
 <div class="container-xxl py-1 "  > <!-- style="background-color: cyan;" -->
        <div class="container">
            <div class="row g-5"  > <!-- style="background-color: yellow;" -->
 

            <div class="col-lg-1 col-4  wow fadeInUp " data-wow-delay="0.3s" style="display: flex; justify-content:right; align-items:right">  

<img loading="lazy" class="" src="img_plan/bombillo.webp" style="margin-top: -20px;"  alt="Bombillo de ideas" width="85" height="137.5" >   
 <!--170 * 275 -->                             
                   
            </div>


            <div class="col-lg-7 col-8 wow fadeInUp" data-wow-delay="0.3s">

            <h3 class="text_color_aa cont_huge t_regular"><b class="t_ebold">Un futuro brillante para tu hijo</b></h3>
            
            <h4 class="text_color_aa  text_imp t_regular">Impulsa la creatividad de tu hijo con clases divertidas y prácticas.</h4> 
                   
            </div>
                
  

            <div class="col-lg-4 col-12 wow fadeInUp ajuste_re" data-wow-delay="0.3s" >
                
<div class="mt-2    "  style="display: flex; justify-content:center; align-items:center" >
<a href="#llenar" class="btn btn-p_a_s t_ebold" >¡RESERVA SU CUPO!</a>
</div>
                   
            </div>



            </div>
        </div>
    </div>
    <!-- About End -->






    <section id="ages" class="sectionAges">
        <div class="agesLeft">
            
            <img src="img_plan/j_2.webp" alt="chica estudiante de arte" loading="lazy">           
            <div class="agesLeftCont">
                <div class="subDiv">

                    <h3>De 6 a 10 años</h3>
                    <p>Le mostramos a tu pequeño que
                        <span>aprender puede ser divertido y entretenido</span>, con
                        actividades diarias, dinámicas y prácticas como:</p>
                    <ul>
                        <div >🧮<li>Un gimnasio mental con ábaco</li></div>
                        <div>🧪<li>Experimentos con reacciones
                            químicas</li></div>
                            <div>🪙<li>Educación financiera para niños</li></div>
                    </ul>
                    <a href="#llenar">¡INSCRÍBELO AHORA!</a>
                </div>
            </div>
        </div>
        <div class="agesRight">
             
            <img src="img_plan/j_1.webp" alt="chico estudiante de ciencias" loading="lazy">
           
            <div class="agesRightCont">
                <div class="subDiv">

                    <h3>De 11 a 14 años</h3>
                    <p>Tu hijo <span>aprende de manera diferente</span>
                        con cada actividad que realiza en
                        nuestro Plan Vacacional.
                        
                        Impulsamos su creatividad, a través de:</p>
                    <ul>
                       <div>💰<li>Educación financiera para su futuro</li></div>
                       <div>➗<li>El uso práctico de las matemáticas</li></div>
                       <div>🔭<li>El lado divertido de las ciencias</li></div>
                    </ul>
                    <a href="#llenar">¡INSCRÍBELO AHORA!</a>
                </div>
            </div>
        </div>

    </section>


















 <!-- About start -->
 <div class="container-xxl py-3 mt-2 mb-1"  > <!-- style="background-color: cyan;" -->
        <div class="container">
<div class="row g-5 text-center" style="justify-content: center; display:flex" > <!-- style="background-color: yellow;" -->
 

           


            <div class="col-lg-12  wow fadeInUp" data-wow-delay="0.3s">
           
<h4 class="text_color_aa  t_regular"><b class="t_ebold">Dale a tu hijo unas vacaciones increíbles en Boostermath</b></h4> 
                   
            </div>
                
  

          



            </div>
        </div>
    </div>
    <!-- About End -->





<section id="galeria" style="margin-bottom: 50px;">

<span style="margin-bottom: 50px;">


<div class="carousel"
  data-flickity='{ "imagesLoaded": true, "percentPosition": false, "wrapAround": true, "autoPlay": true}'>

  <img src="img_plan/c_b.webp" alt="pequeño estudiante generación steam" loading="lazy" />
  <img src="img_plan/c_c.webp" alt="bienvenidos a boostermath" loading="lazy" />
  <img src="img_plan/c_a.webp" alt="profesor dedicado boostermath" loading="lazy" />
  <img src="img_plan/c_d.webp" alt="chicos recibiendo clases" loading="lazy" />
  <img src="img_plan/c_e.webp" alt="resolviendo inquietudes matematicas" loading="lazy"/>
  <img src="img_plan/c_f.webp" alt="programa personalizado boostermath" loading="lazy" />
</div>







</span>

</section>



<style>


.carousel {
  background: #EEE;
}

.carousel img {
  display: block;
  height: 200px;
}

@media screen and ( min-width: 768px ) {
  .carousel img {
    height: 400px;
  }
}

/* position dots in carousel */
.flickity-page-dots {
  bottom: 0px;
}
/* white circles */
.flickity-page-dots .dot {
  width: 0px;
  height: 0px;
  opacity: 1;
  background: transparent;
  border: 0px solid white;
}
/* fill-in selected dot */
.flickity-page-dots .dot.is-selected {
  background: transparent;
}





</style>


<script>



    
</script>



</body>

<?php include ("f_footer_b.php"); ?>