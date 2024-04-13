<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aymuray Safety</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <main class="container">
        <header class="cabezera-fija">
            <div class="logo">
                <a href="index.php">
                    <p>Aymuray Safety</p>
                    <!-- Posible uso imagen de compras: <img href=""></img> -->
                </a>
            </div>    
        
            <!-- Menu Iconos-->
            <i class="bx bx-menu" id="menu-icon"></i>
            <!-- Links -->
            <ul class="navbar">
                <li><a href="index.php" class="nav-link">Inicio</a></li>
                <li><a href="#products" class="nav-link">Productos</a></li>
                <li><a href="index.php#products" class="nav-link">Catálogo</a></li>
                <li><a href="index.php#about" class="nav-link">Sobre Nosotros</a></li>
                <li><a href="#Contacto" class="nav-link">Contactanos</a></li>
            </ul>
            <!-- Iconos -->
            <div class="header-icon">
                <!-- Posible uso carrito de compras: <i class="bx bx-cart-alt"></i> -->
                <i class='bx bx-search-alt' id="search-icon"></i>
            </div>
            <!-- Caja de Busqueda -->
            <div class="search-box">
                <input type="search" name="text" id="" placeholder="Busca aqui...">
            </div>
        </header>

        <section class="products" id="products">
            <div class="heading">
                <br><br><br>
                <h2>Productos Proteccion</h2>
            </div>
            <!-- Contenedor -->
            <div class="products-container">
                <!-- Bucle For php para productos -->
                <?PHP
                    for ($i=1; $i < 9; $i++) { 
                ?>
                <div class="box">
                    <img src="img/p<?php print($i); ?>.jpg" alt="">
                    <h3>Producto Nombre</h3>
                    <div class="content">
                        <span>$99.99</span>
                        <a href="producto.php?id=<?php print($i); ?>">Más Detalles</a>
                    </div>
                </div>
                <?php        
                }
                ?>

            </div>
        </section>

        <section class="contacto" id="Contacto">
                <div class="box">
                    <div class="info">
                        <p>¡No comprometas la seguridad de tu equipo! Contáctanos hoy mismo y descubre cómo Aymuray Safety puede proporcionarte las soluciones de seguridad industrial que necesitas. Estamos aquí para proteger a tus trabajadores y garantizar un entorno laboral seguro. ¡No esperes más, juntos podemos hacer la diferencia!</p>
                        <a href="https://wa.me/51940786398">Contactanos</a>
                    </div>
                    <div class="image">
                        <img src="img/contact.jpg" alt="imagen-contacto">
                    </div>
                </div>
        </section>

        <section class="footer">
            <div class="footer-box">
                <h2>AymuraySafety</h2>
                <p>Protegiendo vidas en el trabajo.</p>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class="bx bxl-twitter"></i></a>
                    <a href="#"><i class="bx bxl-instagram"></i></a>
                </div>
            </div>

            <div class="footer-box">
                <h3>Soporte</h3>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Ayuda y Soporte</a></li>
                <li><a href="#">Politicas de Devoluciones</a></li>
                <li><a href="#">Terminos de Uso</a></li>
            </div>

            <div class="footer-box">
                <h3>Ver guias</h3>
                <li><a href="#">Características</a></li>
                <li><a href="#">Empleo</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Nuestras Sucursales</a></li>
            </div>

            <div class="footer-box">
                <h3>Contactanos</h3>
                <div class="contact">
                    <span><i class="bx bxs-map"></i>Mz. A Calle Hermosa, San Isidro</span>
                    <span><i class="bx bxs-phone"></i>+51 945 162 565</span>
                    <span><i class="bx bxs-envelope"></i>ventas1@aymuraysafety.com</span>
                </div>
            </div>
        </section>

        <div class="copyright">
            <p>&#169; AymuraySafety Todos los derechos reservados</p>
        </div>
    </main>
    <script src="JS/products.js"></script>
</body>
</html>