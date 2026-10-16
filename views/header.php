<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#17191f">
    <meta name="description" content="Portafolio profesional de Juan David Bermúdez, Programmer Analyst e ingeniero en formación.">
    <title>JD. | Portafolio de desarrollo</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <header class="sitio-header">
        <div class="encabezado-contenido">
            <a href="inicio" class="logo" aria-label="JD, ir al inicio">JD<span>.</span></a>
            <nav aria-label="Navegación principal">
                <ul>
                    <li><a href="inicio" class="<?php echo $url === 'inicio' ? 'activo' : ''; ?>">Inicio</a></li>
                    <li><a href="sobre-mi" class="<?php echo $url === 'sobre-mi' ? 'activo' : ''; ?>">Sobre mí</a></li>
                    <li><a href="habilidades" class="<?php echo $url === 'habilidades' ? 'activo' : ''; ?>">Habilidades</a></li>
                    <li><a href="proyectos" class="<?php echo $url === 'proyectos' ? 'activo' : ''; ?>">Proyectos</a></li>
                    <li><a href="intereses" class="<?php echo $url === 'intereses' ? 'activo' : ''; ?>">Intereses</a></li>
                    <li><a href="contacto" class="nav-contacto <?php echo $url === 'contacto' ? 'activo' : ''; ?>">Contacto <span aria-hidden="true">↗</span></a></li>
                </ul>
            </nav>
        </div>
        <?php if ($url === 'inicio') : ?>
        <div class="presentacion-mini"><span class="estado-disponible"></span> PROGRAMMER ANALYST <i></i> INGENIERÍA DE SISTEMAS Y TELECOMUNICACIONES</div>
        <?php endif; ?>
    </header>
    <main id="contenedor-principal" class="pagina-<?php echo htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>">
