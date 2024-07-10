<?php 


$dt = new DateTime("now", new DateTimeZone('America/Caracas'));

$hoy_es = $dt->format('d-m-Y h:i:sa');

/* 
$hoy_es = date("d-m-Y h:i:sa");   

$la_hora = date("h:i:sa");  */

?>

<?php include ("a_header.php"); ?>


<title>Booster | Acelerador</title>
<link rel="canonical" href="https://www.boostermath.com/contact">
<meta content="" name="keywords">
<meta content="" name="description">

</head>


<?php include ("a_navbar.php"); ?>




    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-0 page-header_contact">
        <div class="container py-5">
            <div class="row justify-content-center">

                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Contáctanos</h1>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->









<?php include 'eslogan_b.php'; ?>







    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                
                <h2 class="mb-5">Contacta con Nosotros</h2>

            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Estamos para atenderle</h5> <br>

                    <p class="mb-4">Nuestros horarios de atención son de lunes a viernes de 8am a 6pm y los días sábados de 8am a 4pm.</p> <br>

                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Oficina</h5>
                            <p class="mb-0">Piso 5, Oficina A503, Torre A, C.C.C.T., Miranda 1064, Miranda</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Teléfono</h5>
                            <p class="mb-0">+58 (412) 340-8754</p> 
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">atencionalcliente@boostermath.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed/v1/place?q=caracas,+ccct&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">





                <form method="post" action="" name="contact-form">


<input type="hidden" id="Origen" name="Origen" value="Web Booster" />  



                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input maxlength="40" type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required>
                                    <label for="name">Nombre y Apellido</label>
                                </div>
                            </div>                          


                            <div class="col-6">
                                <div class="form-floating">
                                    <input maxlength="60" type="email" class="form-control" id="Correo" name="Correo" placeholder="Email" required>
                                    <label for="email">Email</label>
                                   
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input maxlength="60" type="text" class="form-control" id="Ciudad" name="Ciudad" placeholder="Ciudad" required>
                                    <label for="Ciudad">Ciudad</label>
                                   
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-floating">
                                     <input maxlength="40" type="number" class="form-control" id="Telf" name="Telf" placeholder="Teléfono" required>
                                    <label for="tlf">Teléfono</label>
                                </div>
                            </div>


                           


                            <div class="col-6">
                                <div class="form-floating">

                                <select class="form-select" aria-label="Default select" name="Programa" required>
                                    <option selected disabled></option> 
                                    <option value="Curso - Matemática">Curso - Matemática</option>
                                    <option value="Curso - Física">Curso - Física</option>
                                    <option value="Curso - Química">Curso - Química</option>
                                 <!--   <option value="Ábaco - Aritmética Mental">Ábaco - Aritmética Mental</option> -->
                                    <option value="Acelerador Matemático">Acelerador Matemático</option>
                                </select>
                                                                    
                                    <label for="acerca">Acerca ó sobre:</label>
                                   
                                </div>
                            </div>



                            <div class="col-12">
                                <div class="form-floating">
<textarea maxlength="200" class="form-control" placeholder="Escriba su mensaje aquí" id="Mensaje" name="Mensaje" style="height: 150px" required></textarea>
                                    <label for="Mensaje">Mensaje</label>
                                </div>
                            </div>


       <input type="hidden" id="Fecha_de_Solicitud" name="Fecha_de_Solicitud" value="<?php echo $hoy_es; ?>" />  

      <!-- <input type="hidden" id="Hora_de_Solicitud" name="Hora_de_Solicitud" value="" />   -->


       


                            <div class="col-12">
<button class="btn btn-primary w-100 py-3" type="submit" id='btn_send_me' name="submit" onclick="this.innerHTML='Enviando!';">Enviar Mensaje</button>
                                    
                            </div>


                          







                        </div>
                    </form>

                </div>

<script src="js/google_sheet.js"></script>




            </div>
        </div>
    </div>
    <!-- Contact End -->










</body>

<?php include ("f_footer.php"); ?>