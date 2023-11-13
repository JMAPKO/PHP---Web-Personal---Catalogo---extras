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
            	<li><a href="index.php">Inicio</a></li><li><a href="catalogo.php">Catálogo</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador Web con PHP y MySQL<br/> Backend Developer Java</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Sobre Mi</h2>
    <div id="uni4_1">
        <?php
            echo "<h4>Mecatronico - Software Engineer</h4>";
            echo '<p id="rol">Mi principal objetivo es aportar mis conocimientos, aprender nuevas tecnologias y junto a ello nuevas experiencias en el rubro IT
            <n> Busco desarollarme en el backend pero puedo adaptarme a los objetivos de la empresa, predispuesto a desempañerarme con las tecnologias que se requieran</n></p>';
            echo '<p id="rol2"><a href="https://github.com/JMAPKO" target="_new">Repositorio en Github</a></p>';
        ?>
    </div>
    <h2>Tecnologias</h2>
    <div id="uni4_2">
    <?php
        $palabras = array("html","css", "php", "mysql", "java", "Sprint - boot", "apis rest", "Kotlin (andorid)");
        foreach ($palabras as $palabra) {
        echo $palabra . "<br>";
        }
    ?>
    </div>
    <div id="uni4_3">
    <?php
    $edad = 27;
    $nombre = "Juan Manuel Albarracin Olmos";
    $tiempo = true;

    echo "Edad: " . $edad . "<br>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Disponibilidad: " . ($tiempo ? "full time" : "Part Time") . "<br>";
    ?>
    </div>
    
    </section>

<footer>
<p>Desarrollado por <a href="https://www.linkedin.com/in/jmpk" target="_new">JM - Albarracin Olmos | programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>