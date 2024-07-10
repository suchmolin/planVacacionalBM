<?php
// Encabezado para enviar un código de estado 404
http_response_code(404);

// Registro de la URL solicitada para análisis posterior
error_log("Error 404 en: " . $_SERVER['REQUEST_URI']);

// Aquí podrías implementar una lógica para redirecciones inteligentes
// Por ejemplo, si tienes un mapeo de URLs antiguas a nuevas
$redirecciones = [
    "/pagina-vieja" => "/pagina-nueva",
    "/contacto-viejo" => "/contacto",
];

$urlSolicitada = rtrim($_SERVER['REQUEST_URI'], '/');
if (array_key_exists($urlSolicitada, $redirecciones)) {
    header("Location: " . $redirecciones[$urlSolicitada], true, 301);
    exit;
}
?>

<?php include ("a_header.php"); ?>


<title>Booster | 404</title>
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
                    <h1 class="display-3 text-white animated slideInDown">Sitio No Encontrado</h1>
                    
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
                
                <h2 class="mb-5">404</h2>

            </div>
            <div class="row g-4">



                <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">


                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                
                <h3 class="mb-5">La dirección o pagina web no esta presente, favor use los enlaces correspondientes de nuestra web.</h3>

            </div>

                

                </div>


               





                


            </div>
        </div>
    </div>
    <!-- Contact End -->















</body>

<?php include ("f_footer.php"); ?>