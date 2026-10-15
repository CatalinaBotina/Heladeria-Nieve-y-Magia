<?php
// Variables del negocio (Reto 1)
$nombreHeladeria = "Heladería Nieve & Magia";
$administrador = "Mayra Catalina Caipe Botina";
$ciudad = "Pasto";

// Edad para mensaje de bienvenida (Reto 2)
$edadCliente = 19;

// Día de la semana para promociones (Reto 3)
$diaSemana = "Miercoles"; 

// Disponibilidad del Sabor Especial del Mes (Reto 4)
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

    <!-- Encabezado con datos del negocio (Reto 1) -->
    <header>
        <h1>🍧 <?php echo $nombreHeladeria; ?> 🍧</h1>
        <p>Administradora: <strong><?php echo $administrador; ?></strong> | Ciudad: <strong><?php echo $ciudad; ?></strong></p>
    </header>

    <!-- Bienvenida según edad (Reto 2) -->
    <section>
        <p>
            <?php 
            if ($edadCliente < 18) {
                echo "¡Hola! Bienvenido a nuestra heladería, descubre los sabores más divertidos pensados para ti.";
            } else {
                echo "¡Bienvenido! Revisa nuestras promociones y combos especiales de la semana.";
            }
            ?>
        </p>
    </section>

    <!-- Sección de Promociones según el día (Reto 3) -->
    <section>
        <h2>Promoción del Día</h2>
        <p>
            <?php 
            if ($diaSemana == "Miercoles") {
                echo "🎉 ¡Miércoles de locura! Lleva 2x1 en todos los conos y toppings gratis.";
            } else {
                echo "Ven y prueba nuestras combinaciones artesanales únicas en la ciudad.";
            }
            ?>
        </p>
    </section>

    <!-- Catálogo de Sabores -->
    <section>
        <h2>Nuestra Menú de Sabores</h2>
        <div class="tarjetas-contenedor">
            
            <div class="tarjeta">
                <img src="img/halloween.jpg" alt="Edición Especial Halloween">
                <h3>Edición Halloween</h3>
                <p class="precio">$6.500</p>
            </div>

            <div class="tarjeta">
                <img src="img/heladodemoraazul.jpg" alt="Helado de Mora Azul">
                <h3>Mora Azul</h3>
                <p class="precio">$5.800</p>
            </div>

            <div class="tarjeta">
                <img src="img/limon.jpg" alt="Helado de Limón">
                <h3>Limón Refrescante</h3>
                <p class="precio">$5.000</p>
            </div>

            <div class="tarjeta">
                <img src="img/Mora.jpg" alt="Helado de Mora">
                <h3>Mora Silvestre</h3>
                <p class="precio">$5.500</p>
            </div>

        </div>
    </section>

    <!-- Disponibilidad de Sabor Especial (Reto 4) -->
    <section>
        <p>Estado de la Edición Especial de Temporada: 
            <strong>
                <?php 
                if ($saborDisponible == true) {
                    echo "¡Disponible hoy en tienda!";
                } else {
                    echo "Agotado por el día de hoy.";
                }
                ?>
            </strong>
        </p>
    </section>

    <!-- Pie de página -->
    <footer>
        <p>📞 Contacto: 3103516188 | ✉️ contacto@nieveymagia.com</p>
        <p>&copy; 2026 Heladería Nieve & Magia - Pasto</p>
    </footer>

</body>
</html>