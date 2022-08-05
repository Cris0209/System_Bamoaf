<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/style.css">
    <title>Inicio - Systems Bamoaf</title>
</head>

<body>
    <?php include('includes/navbar.php');  ?>
    <!-- CARRUSEL DE PRESENTACION -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/banner_1.png" class="d-block w-100 images" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/banner_2.png" class="d-block w-100 images" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/banner_3.png" class="d-block w-100 images" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- GRID PARA INFORMACION -->
    <div class="container">
        <h4 style="margin: 25px; font-weight: bolder;">¿Que Beneficios tiene?</h4>
        <div class="accordion" id="accordionExamples">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOnes">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOnes" aria-expanded="true" aria-controls="collapseOnes">
                        Mantenimientos que realizamos
                    </button>
                </h2>
                <div id="collapseOnes" class="accordion-collapse collapse show" aria-labelledby="headingOnes" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Mantenimiento Preventivo
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Brinda confiabilidad hacia sus dispositivos que estén operando, mejoran sus condiciones de seguridad ya que conocen el estado y sus condiciones de funcionamiento, con ello disminuye el tiempo muerto, nos referimos el tiempo de parada de tu equipo por causa de fallas disminuyen, por lo tanto, el costo asociado también disminuye.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Mantenimiento Correctivo
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Brinda una investigación permite que el equipo continúe funcionando sin necesidad de reemplazar por una nueva, este ni implica costos extra mientras no exista un fallo, suele ser el más común de los diferentes mantenimientos.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Mantenimiento Predictivo
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Brinda una reducción de fallos, averías y accidentes, aumenta la disponibilidad de los activos y su seguridad. Con esta investigación reduce el costo de mantenimiento, piezas de repuesto y el seguro industrial.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Mantenimiento Proactivo
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Brinda confiabilidad del equipo, reduce el costo ante tareas de un mantenimiento extenso, brinda mayor duración del equipo, gracias a su táctica de detección y corrección.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwos">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwos" aria-expanded="false" aria-controls="collapseTwos">
                        Instalación de Hardware y Software
                    </button>
                </h2>
                <div id="collapseTwos" class="accordion-collapse collapse" aria-labelledby="headingTwos" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingsOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Software
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Brinda un buen rendimiento proporciona mayor efectividad y mejora la experiencia del usuario, sus actualizaciones y personalizaciones son realizadas por el proveedor de servicios en la nube realiza esto garantiza que obtengas las últimas versiones de software.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Hardware
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Brinda una alta calidad, con estándares abiertos y que sean más económicos, tiene comunidades de diseño, programación y soportes físicos en informática de cada día crece de forma dinámica y participativa.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- OFERTA DE CONTENIDO -->
    <div class="container">
        <h4 style="font-weight: bolder; margin: 25px;">Oferta de Contenido</h4>
        <div class="row">
            <div class="col" aling="justify">
                Nosotros ofreceremos estas 3 promociones de nuestros servicios como instalaciones hardware y software, como también mantenimiento de cómputos:</br>
                <ol style="margin-top: 10px;">
                    <li>Las 10 primeras personas que lleguen a utilizar nuestros servicios de reparación e instalaciones, tendrán un mes gratuito.</li>
                    <li>Para las siguientes 10 personas tendrán un descuento del 10% en sus reparaciones</li>
                    <li>Para aquellas personas que utilicen nuestros servicios que ofrecemos, tendrá una garantía de seis meses.</li>
                </ol>
            </div>
            <div class="col-md-3">
                <img src="assets/software.jpg" width="100%">
            </div>
        </div>
    </div>
    <!-- CARACTERISTICAS -->
    <div class="container">
        <h4 style="font-weight: bolder; margin: 25px;">Nuestras Caracteristicas</h4>
        <div class="row">
            <div class="col" aling="justify">
                Nuestra empresa se caracteriza por:
            </div>
        </div><br>
        <div class="container" style="display: flex;">
            <div class="card bordercard" style="width: 18rem;">
                <div class="card-body">
                    <p style="margin-top: 10px; margin-bottom: 10px;" class="card-text textoC">Nos encargamos de corregir averías o defectos que se están presentando periódicamente.</p>
                </div>
            </div>
            <div class="card bordercard" style="width: 18rem; margin-left: 10px">
                <div class="card-body">
                    <p style="margin-top: 10px; margin-bottom: 10px;" class="card-text textoC">Somos eficaces y muy rentables, de carácter rutinario y sistemático, evitaremos las apariciones de los problemas que puntos vulnerables.</p>
                </div>
            </div>
            <div class="card bordercard" style="width: 18rem; margin-left: 10px">
                <div class="card-body">
                    <p style="margin-top: 10px; margin-bottom: 10px;" class="card-text textoC">Somos eficaces y muy rentables, de carácter rutinario y sistemático, evitaremos las apariciones de los problemas que puntos vulnerables.</p>
                </div>
            </div>
        </div>
        <div class="container" style="display: flex; margin-top: 10px; margin-bottom: 10px">
            <div class="card bordercard" style="width: 18rem;">
                <div class="card-body">
                    <p style="margin-top: 10px; margin-bottom: 10px;" class="card-text textoC">Nos encargaremos de controlar las informaciones permanentes sobre situaciones y operatividad de los equipos y sus instalaciones.</p>
                </div>
            </div>
            <div class="card bordercard" style="width: 18rem; margin-left: 10px">
                <div class="card-body">
                    <p style="margin-top: 10px; margin-bottom: 10px;" class="card-text textoC">Estaremos haciendo el mantenimiento básico a cualquier tipo de equipo, por ejemplo, inspección visual, toma de datos, limpieza o lubricación.</p>
                </div>
            </div>
            <div class="card bordercard" style="width: 18rem; margin-left: 10px">
                <div class="card-body">
                    <p style="margin-top: 10px; margin-bottom: 10px;" class="card-text textoC">Cada de servicios de mantenimiento son herramientas imprescindibles, para la prevención y evitar accidentes. </p>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/scripts.php'); ?>
</body>

</html>