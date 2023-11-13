<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Catálogo - Unidad V</h2>
    <!-- BOTONERA-->
    <nav id="btn_catalogo">
        <ul>
            <li><a href="catalogo.php?ID=1417">Silon Capri</a></li>
            <li><a href="catalogo.php?ID=2017">Mesa Ipanema</a></li>
            <li><a href="catalogo.php?ID=2022">Banco Venecia</a></li>
        </ul>
    </nav>
    
    <?php
    if($_GET){
        switch ($_GET["ID"]) {
            case '1417':
                $Producto = "Sillón Capri";
                $Precio = "$ 345.00";
                $Caracteristica = "Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece. ";
                $Imagen = "sillon1.jpg";
                break;
            
            case '2017':
                $Producto = "Mesa Ipanema";
                $Precio = "$ 500.00";
                $Caracteristica = "Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms";
                $Imagen = "ipanema.jpg";
                break;

            case '2022':
                $Producto = "Banco Venecia";
                $Precio = "$ 450.00 ";
                $Caracteristica = "Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms. ";
                $Imagen = "venecia.jpg";
                break;
                
                break;
                default:
                
                break;
        }
    
        ?>
        <!--ESTRUCTURA -->
        <div id="info_producto">
        <h2><?php echo $Producto ?></h2>
         <h3><?php echo $Precio ?></h3>
         <p><?php echo $Caracteristica ?></p>
        
        </div>
        <div id="imagen_producto">
        <img src="imagenes/<?php echo $Imagen ?>" alt="">

        </div>

        <?php } ?>
    </section>

    <footer>
<p>Desarrollado por <a href="https://www.linkedin.com/in/jmpk" target="_new">JM - Albarracin Olmos | programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>