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
        <header class="cabezera">
            <div class="logo">
                <a href="#">
                    <p>Aymuray Safety</p>
                    <!-- Posible uso imagen de compras -->
                </a>
            </div>    
        
            <!-- Menu Iconos-->
            <i class="bx bx-menu" id="menu-icon"></i>

            <!-- Links -->
            <ul class="navbar">
                <li><a href="#home" class="nav-link">Inicio</a></li>
                <li><a href="productos.php" class="nav-link">Productos</a></li>
                <li><a href="#products" class="nav-link">Catálogo</a></li>
                <li><a href="#about" class="nav-link">Sobre Nosotros</a></li>
                <li><a href="productos.php#Contacto" class="nav-link">Contactanos</a></li>
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
        
        <section class="home" id="home">
            <div class="home-text">
                <h1>Aymuray<br>Safety</h1>
                <p class="lore">AYMURAY SAFETY S. A. C. líder en soluciones de seguridad industrial, <br> brinda una amplia gama de productos y servicios de alta calidad para garantizar <br> la protección de los trabajadores en entornos laborales exigentes. <br> Nuestro compromiso con la excelencia, la innovación constante y la atención <br> personalizada nos distingue como el socio confiable para empresas que buscan salvaguardar <br> la integridad de su equipo. <br> Confía en Aymuray Safety y toma medidas seguras hacia un futuro laboral más protegido</p>
            </div>
        </section>

        <!-- Acerca de -->
        <section class="about" id="about">
            <div class="about-img">
                <img src="img/about.jpg" alt="">
            </div>
            <div class="about-text">
                <h2>NUESTRA HISTORIA</h2>
                <p>Aymuray Safety comenzó como una pequeña tienda local, ofreciendo una variedad de productos como cascos, guantes, gafas de seguridad, calzado resistente, equipos de protección respiratoria y mucho más. La calidad y la atención al cliente eran los pilares fundamentales de la empresa desde sus inicios.</p>
                <p>Con el tiempo, la reputación de Aymuray Safety creció y se convirtió en un referente en el sector de la seguridad industrial. Gracias a su compromiso con la excelencia, la empresa logró establecer relaciones sólidas con proveedores confiables y ampliar su catálogo de productos, ofreciendo soluciones integrales para cubrir las necesidades de sus clientes.</p>
                <p>Aymuray Safety no solo se preocupaba por vender productos, sino también por brindar asesoramiento especializado. El equipo se capacita constantemente en normativas de seguridad, nuevas tecnologías y tendencias del mercado, para poder asesorar de manera efectiva a sus clientes y ayudarles a seleccionar los productos más adecuados para sus necesidades específicas.</p>
                <a href="#about" class="btn">Leer Más</a>
            </div>
        </section>

        <section class="products" id="products">
            <div class="heading">
                <h2>Nuestros productos más populares</h2>
            </div>

            <!-- Contenedor -->
            <div class="products-container">

                <!-- Bucle For php para productos -->
                <?PHP
                    for ($i=1; $i < 4; $i++) { 
                ?>
                <div class="box">
                    <img src="img/p<?php print($i); ?>.jpg" alt="">
                    <h3>Producto Nombre</h3>
                    <div class="content">
                        <span>$99.99</span>
                        <a href="producto.php?id=<?php print($i); ?>">Detalles del Producto</a>
                    </div>
                </div>
                <?php        
                }
                ?>

            </div>
        </section>

        <!--section-->
        <section class="customers" id="customers">
            <div class="heading">
                <h2>NUESTROS CLIENTES</h2>
            </div>
            <div class="customers-container">
                <!-- Bucle For php para clientes destacados -->
            <?PHP 
                $a = 4.8;

                for($i=0;$i<3;$i++){
            ?>
                    <div class="box">
                        <div class="stars">
                    
                    <?PHP

                    // Condicional If php para identificar decimales o no
                    if(($a*2)%2==0){
                        $b=$a;
                        // Bucle While php para inprimir las estrellas
                        while($b>0.9){
                            $b=$b-1;
                    ?>
                            <i class="bx bxs-star"></i>
                    <?PHP
                        }
                    }else{
                        $b=$a;
                        while($b>1){
                            $b=$b-1;
                    ?>
                            <i class="bx bxs-star"></i>
                    <?PHP
                        }
                    ?>
                            <i class="bx bxs-star-half"></i>
                    <?PHP  
                    }

                    // Condicional If php para estrellas vacias
                    if($a<4.49 and $a>3.49){
                    ?>
                        <i class='bx bx-star' ></i>
                    <?PHP
                    }
                    if($a<=3.49){
                    ?>
                        <i class='bx bx-star' ></i>
                        <i class='bx bx-star' ></i>
                    <?PHP
                    }
                    ?>
                            <p>Aymuray Safety es mi proveedor confiable en seguridad industrial. Productos de calidad y excelente servicio al cliente. ¡Los recomiendo!</p>
                            <h2>Juan Carlos Rodríguez</h2>
                        </div>
                        <img src="img/rev1.jpg" alt="">
                    </div>
                <?PHP
                }
            ?>
            </div>
        </section>
        <section class="footer" id="footer">
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
                    <span><i class="bx bxs-map"></i>MZ. A LOTE. 17 A.H. HORACIO ZEVALLOS, RIMAC</span>
                    <span><i class="bx bxs-phone"></i>+51 945 162 565</span>
                    <span><i class="bx bxs-envelope"></i>ventas1@aymuraysafety.com</span>
                </div>
            </div>
        </section>

        <div class="copyright">
            <p>&#169;AymuraySafety Todos los derechos reservados</p>
        </div>
    </main>
    <script src="JS/main.js"></script>
</body>
</html>