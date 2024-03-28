<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIMO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">

</head>

<?php
    include("../backend/conexion.php");
    include("../backend/ropa/functions/obtenerColor(idColor).php");
    $ConsultaGeneral = mysqli_query($conexion, "SELECT * FROM Ropa");
?>

<body>
    <header>
        <h1 class="logo">BIMO</h1>
        <nav>
            <ul>
                <li>BIMO</li>
                <li>HOGAR</li>
                <li>COMERCIO</li>
                <li>BLOG</li>
                <li>PAGINAS <span class="arrow">&#8595;</span></li>
            </ul>
        </nav>
        <div class="wishlist-cart">
            <i class="fa fa-search"></i> <!-- Icono de lupa -->
            <i class="fa fa-shopping-cart"></i> <!-- Icono de carrito -->
        </div>
    </header>
  
        <div class="center-text">
            <img src="../img/Logo.jpg" alt="">
            <h2>Nuevas Colecciones</h2>
        </div>
        <!-- 
            <div class="product-group">
            <div class="product-card">
                <img src="../img/banner-image-1.jpg" alt="Product Image 2" id="productImage">
                <div class="product-info">
                    <h2>Saco largo</h2>
                    <p>Descripción:</p>
                    <p>y cómodo, ideal para ocasiones formales.</p>
                    <p>Colores disponibles:</p>
                    <div>
                        <span class="product-color negro"></span>
                        <span class="product-color gris"></span>
                        <span class="product-color azul-marino"></span>
                    </div>
                    <p>$307.00</p>
                    <p class="product-stock">En existencia: 5</p>
                </div>
                
            </div>
            <div class="product-card">
                <img src="../img/banner-image-2.jpg" alt="Product Image 2">
                <div class="product-info">
                    <h2>Blazer</h2>
                    <p>Descripción: </p>
                    <p>Versátil y moderno, perfecto para looks casuales o formales.</p>
                    <p>Colores disponibles:</p>
                    <div>
                        <span class="product-color negro"></span>
                        <span class="product-color azul"></span>
                        <span class="product-color gris"></span>
                        <span class="product-beige"></span>
                    </div>
                    <p>$245.00</p>
                    <p class="product-stock">En existencia: 4</p>
                </div>
                
            </div>
            <div class="product-card">
                <img src="../img/banner-image-3.jpg" alt="Product Image 3">
                <div class="product-info">
                    <h2>Vestido largo liso</h2>
                    <p>Descripción:</p>
                    <p>Elegante y atemporal, ideal para eventos formales. </p>
                    <p>Colores disponibles:</p>
                    <div>
                        <span class="product-color cafe"></span>
                        <span class="product-color marron"></span>
                        <span class="product-color beige"></span>
                    </div>
                    <p>$178.00</p>
                    <p class="product-stock">En existencia:6</p>
                </div>
                
            </div>
            <div class="product-card">
                <img src="../img/banner-image-4.jpg" alt="Product Image 4">
                <div class="product-info">
                    <h2>Chaqueta de cuero para hombre</h2>
                    <p>Descripción:</p>
                    <p>Clásica y resistente.</p>
                    <p>Colores disponibles:</p>
                    <div>
                        <span class="product-color negro"></span>
                        <span class="product-color cafe"></span>
                        <span class="product-color marron"></span>
                    </div>
                    <p>$95.00</p>
                    <p class="product-stock">En existencia: 2</p>
                </div>
                
            </div>
        </div> 
    -->

    <!-- Aquí puede ir el section que está en los commits -->
    <section>
        <div class="product-group">
            <?php
            // Iterar sobre los resultados de la consulta
            while ($fila = mysqli_fetch_assoc($ConsultaGeneral)) {
                // Obtener el nombre del color según el ID del color
                $color = obtenerColor($fila['IdColor']);
                ?>
                <div class="product-card">
                    <!-- Convertir el dato binario de la imagen a una imagen -->
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($fila['ImagenPrenda']); ?>" alt="<?php echo $fila['NombrePrenda']; ?>">
                    <div class="product-info">
                        <h2><?php echo $fila['NombrePrenda']; ?></h2>
                        <p>Descripción:</p>
                        <p><?php echo $fila['DescripcionP']; ?></p>
                        <p>Colores disponibles:</p>
                        <div>
                            <!-- Mostrar el color según el ID del color -->
                            <span class="product-color <?php echo $color; ?>"></span>
                        </div>
                        <p>$<?php echo $fila['Precio']; ?></p>
                        <p class="product-stock">En existencia: <?php echo $fila['Cantidad']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>    



    <div class="container">
        <aside>
            <div class="image-container">
                <img src="../img/Publicacio.jpg" alt="Imagen de la colección" class="aside-image">
            </div>
        </aside>
        <main>
            <h1>COLECCIÓN CLÁSICA DE VERANO</h1>
            <p>Proximamente</P>
        </main>
    </div>

    <div class="title">Objetos unicos</div>
    <ul class="product-list">
        <li>
            <img src="../img/product-item-1.jpg" alt="Short">
            <a href="../img/product-item-1.jpg">Short $55.00</a>
        </li>
        <li>
            <img src="../img/product-item-2.jpg" alt="BlusaB">
            <a href="../img/product-item-2.jpg">Blusa color blanco $65.00 </a>
        </li>
        <li>
            <img src="../img/product-item-3.jpg" alt="BlusaR">
            <a href="../img/product-item-3.jpg">Blusa color rojo $65.00</a>
        </li>
        <li>
            <img src="../img/product-item-4.jpg" alt="Jersey ">
            <a href="../img/product-item-4.jpg">JERSEY  $100.00</a>
        </li>
        <li>
            <img src="../img/product-item-5.jpg" alt="Jersey mezclilla">
            <a href="../img/product-item-5.jpg">JERSEY mezclilla $70.00</a>
        </li>
    </ul>

    <div class="message">
        <p>"La moda es la armadura para sobrevivir a la realidad cotidiana." - Bill Cunningham</p>
        <p>"La moda es la expresión de la personalidad a través de la ropa." - Amy Winehouse</p>
        <p>"La moda es arte y tú eres el lienzo."                            - Velvet Paper</p>
        <p> "La moda es una tendencia que se adapta a tu estilo único." </p>
        <p>"La moda es la mejor manera de decir quién eres sin tener que hablar." - Rachel Zoe</p>
    </div>
    
    
        <nav class="nav">
            <h2>ENLACES RÁPIDOS</h2>
            <ul>
                <li><a href="#">OBJETOS UNICOS</a></li>
                <li><a href="#">CONTACTO</a></li>
                <li><a href="product-card">INFORMACION</a></li>
                <li><a href="#">CONTÁCTENOS</a></li>
                <li><a href="#">ENCUENTRANOS FÁCILMENTE</a></li>
            </ul>
        </nav>
    
        <section class="contact-info">
            <h2>CONTÁCTENOS</h2>
            <p>
                ¿Tiene alguna pregunta o sugerencia?<br>
                guaricl116@gmail.com
            </p>
            <p>
                ¿Necesitas apoyo? Llamanos. <br>
                +2462419827
            </p>
        </section>
    
    
    
</body>
</html>
