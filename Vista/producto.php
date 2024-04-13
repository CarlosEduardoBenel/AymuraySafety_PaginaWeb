<?php

if(isset($_GET["id"]) and $_GET["id"] != 0){
    $codigo = $_GET["id"];
} else {
    header("Location: error.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aymuray Safety</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/sproducto.css">
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
                <li><a href="productos.php" class="nav-link">Productos</a></li>
                <li><a href="index.php#products" class="nav-link">Catálogo</a></li>
                <li><a href="index.php#about" class="nav-link">Sobre Nosotros</a></li>
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

        <section class="detalles-productos">
        <div class="product-details">
        <div class="product-image">
            <img src="img/p<?php print($codigo); ?>.jpg" alt="Producto">
        </div>
        <div class="product-info">
            <h2>Nombre del producto</h2>
            <ul>
            <li><strong>Material:</strong> Material duradero</li>
            <li><strong>Protección:</strong> Protección integral</li>
            <li><strong>Ajuste:</strong> Ajustable y ergonómico</li>
            <li><strong>Certificaciones:</strong> Cumple con las normas de seguridad</li>
            <li><strong>Transpirable:</strong> Transpirable y resistente al calor</li>
            <li><strong>Mantenimiento:</strong> Fácil de limpiar y mantener</li>
            <li><strong>Bolsillos:</strong> Bolsillos y accesorios adicionales</li>
            <li><strong>Visibilidad:</strong> Alta visibilidad</li>
            </ul>
            <a href="https://wa.me/51945162565">Contacto</a>
        </div>
        </div>
        </section>

        <section class="products" id="products">
            <div class="heading">
                <h2>Productos Relacionados</h2>
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
                        <span>$precio</span>
                        <a href="producto.php?id=<?php print($i); ?>">Más Detalles</a>
                    </div>
                </div>
                <?php        
                }
                ?>

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
                    <span><i class="bx bxs-map"></i>MZA. A LOTE. 17 A.H. HORACIO ZEVALLOS, RIMAC</span>
                    <span><i class="bx bxs-phone"></i>+51 940 786 398</span>
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