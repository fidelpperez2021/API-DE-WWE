<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API de la WWE</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212; /* Color de fondo oscuro */
            color: #ffffff; /* Color del texto */
            font-family: Arial, sans-serif; /* Fuente general */
        }

        h1, h2 {
            color: #f1c40f; /* Color dorado para títulos */
        }

        .card {
            background-color: #1e1e1e; /* Color de fondo de las tarjetas */
            border: none; /* Sin borde */
            transition: transform 0.3s; /* Transición para el hover */
        }

        .card:hover {
            transform: scale(1.05); /* Efecto de zoom al pasar el mouse */
        }

        .card-title {
            color: #f39c12; /* Color del título de la tarjeta */
        }

        .card-text {
            color: #bdc3c7; /* Color del texto de la tarjeta */
        }

        footer {
            background-color: #333333; /* Color de fondo del pie de página */
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Encabezado -->
    <header class="bg-dark text-white text-center py-4">
        <h1>WWE NETWORK</h1>
        <p>Explora luchadores, eventos y más</p>
        <img src="https://www.wwe.com/f/styles/shows_header_xl/public/all/2024/08/20240816_Superstars_Header--08335ddce5bc971578fa2aa24bc0d571.jpg" alt="Banner WWE" class="img-fluid" loading="lazy">
    </header>        

    <!-- Menú de Navegación -->
    <!-- Contenido Principal -->
    <div class="container mt-4 flex-grow-1">

        <!-- Sección de Campeonatos -->
        <section id="campeonatos">
            <h2>Campeonatos</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://www.wwe.com/f/styles/wwe_16_9_l/public/all/2024/04/TITLE_04192023gd_0062_Fin--b4ea60da7626c3ce7fe770d2f0955917.png" class="card-img-top" alt="Campeonato Universal Indiscutible" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Campeonato Universal Indiscutible</h5>
                            <p class="card-text">El Campeonato Universal Indiscutible es el título principal de la WWE, creado en 2016. Simboliza la máxima gloria en la marca SmackDown y ha sido defendido por campeones como Roman Reigns, destacándose por su diseño azul y dorado.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://www.wwe.com/f/styles/wwe_16_9_l/public/all/2023/05/WWE_World_Championship--3f7deec341d4257875929ee8ab140834.png" class="card-img-top" alt="Campeonato Mundial Pesado" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Campeonato Mundial Pesado</h5>
                            <p class="card-text">El Campeonato Mundial Pesado es uno de los títulos más icónicos de la WWE, con una historia que se remonta a 1905. Representa el prestigio y la excelencia en la lucha libre, habiendo sido ostentado por leyendas como Hulk Hogan y Ric Flair.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://www.wwe.com/f/styles/wwe_16_9_l/public/all/2019/11/_Intercontinental_Title_Belts_1920x1080_updated--7d94c38bf0d90f5cb2f3bad36490dd70.png" class="card-img-top" alt="Campeonato Intercontinental" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Campeonato Intercontinental</h5>
                            <p class="card-text">El Campeonato Intercontinental, introducido en 1979, es un símbolo de habilidad y excelencia en el ring. Muchos campeones intercontinentales han ascendido al estrellato, y ha sido defendido por luchadores legendarios como Bret Hart y Shawn Michaels.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Combates -->
        <section id="combates" class="mt-4">
            <h2>Combates</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://i.ytimg.com/vi/8y6EUHW7b-E/hq720.jpg" class="card-img-top" alt="Cody Rhodes vs Gunther" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Cody Rhodes vs Gunther</h5>
                            <p class="card-text">El combate entre Cody Rhodes y Gunther en Crown Jewel 2024 fue un emocionante enfrentamiento por el Campeonato Universal Indiscutible y el Campeonato Mundial Peso Pesado. Ambos luchadores, conocidos por su habilidad en el ring, ofrecieron una actuación intensa que mantuvo a los fanáticos al borde de sus asientos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://i.ytimg.com/vi/wN6dSvual6U/hq720.jpg" class="card-img-top" alt="Nia Jax vs Liv Morgan" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Nia Jax vs Liv Morgan</h5>
                            <p class="card-text">El combate entre Nia Jax y Liv Morgan en Crown Jewel 2024 fue un esperado enfrentamiento "Champions vs. Champions". Nia Jax, conocida por su poderosa fuerza, se enfrentó a Liv Morgan, quien destacó por su agilidad y estrategia en el ring.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://www.tvplay.it/wp-content/uploads/2024/11/WWE-Crown-Jewel-20241101-TVPlay.it-1.jpg" class="card-img-top" alt="Sami Zayn vs JD McDonagh" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Roman Reigns & The Usos vs The Bloodline</h5>
                            <p class="card-text">Lucha de equipos de seis hombres – Roman Reigns y Los Usos vs La Bloodline: la reunión de la antigua Bloodline controla la nueva. Un combate que podría saldar cuentas después de una rivalidad que comenzó en verano. Jimmy y Jey Uso han vuelto a estar juntos y ahora están al lado del Original Tribal Chief, pero el objetivo es vencer a Solo Sikoa, Tama Tonga y Tonga Loa. Ojo a Jacob Fatu, que estará en el borde del ring para ayudar a la nueva Bloodline.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Eventos -->
        <section id="eventos" class="mt-4">
            <h2>Eventos</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://www.voxcatch.fr/wp-content/uploads/2024/05/WWE-Crown-Jewel-2024.jpeg" class="card-img-top" alt="Crown Jewel 2024" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Crown Jewel 2024</h5>
                            <p class="card-text">Crown Jewel 2024 fue un evento destacado de la WWE que tuvo lugar en Arabia Saudita. Con combates épicos y la participación de superestrellas de la WWE, fue un evento que mantuvo a los fanáticos al borde de sus asientos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://th.bing.com/th/id/OIP.qkgioZgBKEYzFZTlmbXWggHaEK?rs=1&pid=ImgDetMain" class="card-img-top" alt="SummerSlam 2024" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">SummerSlam 2024</h5>
                            <p class="card-text">SummerSlam 2024 fue uno de los eventos más importantes del año, donde se llevaron a cabo combates por los campeonatos de la WWE. Este evento se destacó por su acción intensa y momentos memorables.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://e.rpp-noticias.io/xlarge/2022/10/06/332333_1326228.jpg" class="card-img-top" alt="Extreme Rules 2024" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Extreme Rules 2024</h5>
                            <p class="card-text">Extreme Rules 2024 trajo consigo combates extremos, donde los luchadores se enfrentaron en situaciones desafiantes para llevar a casa la victoria y demostrar su valía en el ring.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Pie de Página -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
