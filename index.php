
<?php
$nombreHeladeria = "Nieve & Magia";
$administrador = "Mayra Catalina Caipe Botina";
$ciudad = "Pasto";

$edadCliente = 20;
$diaSemana = "Martes";
$saborDisponible = true;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombreHeladeria; ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <header>
        <h1>🍦 <?php echo $nombreHeladeria; ?></h1>
        <p>Helados ricos para alegrar tu día 💜</p>

        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#sabores">Nuestros helados</a>
            <a href="#promocion">Promoción</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </header>

    <section class="presentacion" id="inicio">
        <h2>¡Bienvenidos a nuestra heladería!</h2>

        <p>
            En Nieve & Magia encontrarás helados deliciosos
            de diferentes sabores. Tenemos opciones para todos
            los gustos y queremos que disfrutes cada cucharada.
        </p>

        <p><strong>📍 Estamos en <?php echo $ciudad; ?>.</strong></p>
    </section>

    <section class="datos">
        <h2>Conoce nuestro negocio 🏪</h2>

        <p><strong>Nombre:</strong> <?php echo $nombreHeladeria; ?></p>
        <p><strong>Administradora:</strong> <?php echo $administrador; ?></p>
        <p><strong>Ciudad:</strong> <?php echo $ciudad; ?></p>
    </section>

    <section class="mensaje">
        <h2>💌 Un mensaje para ti</h2>

        <?php
        if ($edadCliente >= 18) {
            echo "<p>¡Bienvenido! Conoce nuestras promociones especiales.</p>";
        } else {
            echo "<p>¡Bienvenido! Descubre nuestros deliciosos sabores.</p>";
        }
        ?>
    </section>

    <section id="sabores">
        <h2 class="titulo">Nuestros sabores 🍨</h2>
        <p class="subtitulo">¿Cuál se te antoja?</p>

        <div class="contenedor-helados">

            <div class="helado">
                <img src="img/Mora.jpg" alt="Helado de mora">
                <h3>Mora encantada</h3>
                <p>Un delicioso sabor a mora.</p>
                <h4>$5.000</h4>
            </div>

            <div class="helado">
                <img src="img/heladodemoraazul.jpg" alt="Helado de mora azul">
                <h3>Mora azul</h3>
                <p>Un sabor diferente y especial.</p>
                <h4>$6.000</h4>
            </div>

            <div class="helado">
                <img src="img/limon.jpg" alt="Helado de limón">
                <h3>Limón feliz</h3>
                <p>Perfecto para refrescarte.</p>
                <h4>$4.500</h4>
            </div>

            <div class="helado">
                <img src="img/halloween.jpg" alt="Helado especial">
                <h3>Helado mágico</h3>
                <p>Una sorpresa llena de sabor.</p>
                <h4>$6.500</h4>
            </div>

        </div>
    </section>

    <section class="promocion" id="promocion">
        <h2>🎁 Promoción del día</h2>

        <?php
        if ($diaSemana == "Martes") {
            echo "<p>¡Hoy tenemos 2x1 en conos!</p>";
        } else {
            echo "<p>Hoy puedes disfrutar de nuestros sabores habituales.</p>";
        }
        ?>
    </section>

    <section class="disponibilidad">
        <h2>🍧 Nuestro sabor especial</h2>

        <?php
        if ($saborDisponible == true) {
            echo "<p class='disponible'>¡Este sabor está disponible! 💚</p>";
        } else {
            echo "<p class='agotado'>Lo sentimos, este sabor está agotado.</p>";
        }
        ?>
    </section>

    <footer id="contacto">
        <h2>🍦 Nieve & Magia</h2>
        <p>Gracias por visitar nuestra heladería 💜</p>
        <p>📞 310 351 6188</p>
        <p>✉️ contacto@nieveymagia.com</p>
        <p>📍 Pasto, Colombia</p>
        <p class="final">Trabajo académico de HTML, CSS y PHP</p>
    </footer>

</body>
</html>
