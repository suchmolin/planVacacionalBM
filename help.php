<?php  ?>

<?php include ("a_header.php"); ?>

<title>Booster | Acelerador</title>
<meta content="" name="keywords">
<meta content="" name="description">

</head>


<?php include ("a_navbar.php"); ?>


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-0 page-header_help">
        <div class="container py-5">
            <div class="row justify-content-center">

                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">¿Cómo podemos ayudarle?</h1>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->









<?php include 'eslogan_c.php'; ?>







    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                
                <h2 class="mb-5">Enviar Ticket</h2>

            </div>
            <div class="row g-4">



                <div class="col-lg-7 col-md-8 wow fadeInUp" data-wow-delay="0.1s">

                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Nombre">
                                    <label for="name">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                     <input type="text" class="form-control" id="tlf" placeholder="Teléfono">
                                    <label for="tlf">Teléfono</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                    <label for="email">Email</label>
                                   
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Escriba su mensaje aquí" id="mensaje" style="height: 150px"></textarea>
                                    <label for="mensaje">Mensaje</label>
                                </div>
                            </div>


                            
                    <div class="col-12">
                                <div class="input-group">
                                     <input type="file" class="form-control" id="file" aria-label="Upload">
     
                                </div>
                   </div>



                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Enviar</button>
                            </div>



                        </div>
                    </form>


                   
                   


                </div>


               





                <div class="col-lg-5 col-md-4 wow fadeInUp" data-wow-delay="0.5s">

                  <div class="position-relative overflow-hidden">
                        <img loading="lazy" class="img-fluid " src="img/ticket.webp"  alt="" style="object-fit: cover;">
                    </div>


                </div>


            </div>
        </div>
    </div>
    <!-- Contact End -->










</body>

<?php include ("f_footer.php"); ?>