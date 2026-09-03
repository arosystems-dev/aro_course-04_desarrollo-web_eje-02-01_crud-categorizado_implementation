<!-- =====================================
            VISTA PRINCIPAL
====================================== -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AROSYSTEMS.DEV CRUD ARTICULOS CATEGORIZADOS" />
    <link rel="icon" href="vista/public/img/icons/logo.ico">
    <link rel="stylesheet" href="vista/public/css/style.css">
    <link rel="stylesheet" href="vista/public/css/styleForm.css">
    <title>aro_crud-categorizado</title>
</head>

<body>

    <!-- --------------------------
                HEADER
    --------------------------- -->
    <header>
        <div class="logo">
            <h2><a href="#">CRUD Categorizado</a></h2>
        </div>
        <h1 class="titulo">Sistema de Inventarios</h1>
        <div class="imgHeader">
            <img src="vista/public/img/tecnologias.png" alt="">
        </div>
        <!-- NAVBOTON -->
        <button id="navBoton">
            <img class="imgBoton" src="vista/public/img/botonNav.png" alt="">
        </button>
    </header>

    <!-- --------------------------
                MAIN
    --------------------------- -->
    <main>

        <!-- NAV -->
        <nav id="navMenu" class="">
            <ul>
                <a class="optionNav" href="?control=CPrincipal&accion=dashboard">
                    <li>Dashboard</li>
                </a>
                <a class="optionNav" href="?control=CCategoria&accion=index">
                    <li>Categorías</li>
                </a>
                <a class="optionNav" href="?control=CArticulo&accion=index">
                    <li>Articulos</li>
                </a>
                <a class="optionNav" href="?control=CConsulta&accion=reporte">
                    <li>Reporte</li>
                </a>
            </ul>
            <div class="autor">
                <img src="vista/public/img/logo.png" alt=""><br>
                <i>
                    <small>Developed by <br> Marco Aro</small>
                </i>
            </div>
        </nav>

        <!-- SECTION -->
        <section>
            <article>
                <?php
                include_once('route/Route.php');
                ?>
            </article>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="redesSociales">
            <img src="vista/public/img/icons/facebook.png" alt="">
            <img src="vista/public/img/icons/youtube.png" alt="">
            <img src="vista/public/img/icons/tiktok.png" alt="">
        </div>
        <div class="derechosAutos">
            AroSystems.dev &copy; 2026
        </div>
    </footer>
    <script src="vista/public/js/scriptNavResponsivo.js"></script>
</body>

</html>