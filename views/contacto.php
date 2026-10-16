<section class="seccion-contacto">
    <div class="titulo-seccion seccion-cabecera">
        <p class="etiqueta-seccion">05 / CONTACTO</p>
        <h2>Hablemos de ideas y proyectos.</h2>
        <p>¿Tienes una idea, una sugerencia o quieres compartir un mensaje? Puedes escribirme mediante este formulario.</p>
    </div>

    <div class="contacto-contenedor">
        <aside class="contacto-info">
            <span class="contacto-sobrelinea">CONECTEMOS</span>
            <h3>Las buenas ideas empiezan con una conversación.</h3>
            <p>Me interesa conocer nuevas perspectivas, compartir conocimientos y conversar sobre tecnología.</p>
            <div class="contacto-detalle"><span aria-hidden="true">⌘</span><p>Desarrollo de software y tecnología</p></div>
            <div class="contacto-detalle"><span aria-hidden="true">↗</span><p>Ideas, proyectos y colaboración</p></div>
            <div class="contacto-mini-marca">JD<span>.</span></div>
        </aside>

        <div class="contacto-formulario">
            <?php if (!empty($mensaje_db)) : ?>
                <div class="mensaje-estado" role="status"><?php echo $mensaje_db; ?></div>
            <?php endif; ?>

            <form action="" method="POST">
                <div class="campo-formulario">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="¿Cómo te llamas?" maxlength="100" required>
                </div>
                <div class="campo-formulario">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" id="correo" name="correo" placeholder="tucorreo@ejemplo.com" maxlength="150" required>
                </div>
                <div class="campo-formulario">
                    <label for="comentario">Mensaje</label>
                    <textarea id="comentario" name="comentario" rows="5" placeholder="Cuéntame un poco..." required></textarea>
                </div>
                <button type="submit">Enviar mensaje <span aria-hidden="true">↗</span></button>
                <p class="formulario-privacidad">Tu mensaje se guarda en la base de datos del proyecto.</p>
            </form>
        </div>
    </div>
</section>
