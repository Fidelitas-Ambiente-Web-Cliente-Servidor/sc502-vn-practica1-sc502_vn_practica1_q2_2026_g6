<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contacto | NextCode</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/contacto.css">
</head>

<body>

    <nav>
        <img
            src="../img/nextcode.png"
            class="logo"
            alt="Logo de NextCode"
        >

        <div class="menu">
            <button
                type="button"
                onclick="location.href='index.php?controller=index&action=index'"
            >
                Inicio
            </button>

            <button
                type="button"
                onclick="location.href='index.php?controller=cursos&action=index'"
            >
                Cursos
            </button>

            <button
                type="button"
                onclick="location.href='index.php?controller=profesores&action=index'"
            >
                Profesores
            </button>
        </div>
    </nav>

    <div class="inicio">
        <h1>Contáctanos</h1>

        <p>
            Estamos listos para ayudarte a iniciar
            tu carrera en programación.
        </p>
    </div>

    <div class="contacto">

        <div class="card">

            <h2>Formulario</h2>

            <?php if (isset($_GET['success'])): ?>
                <p class="mensaje-exito">
                    <?= htmlspecialchars(
                        $_GET['success'],
                        ENT_QUOTES,
                        'UTF-8'
                    ) ?>
                </p>
            <?php endif; ?>

            <?php if (isset($_GET['error'])): ?>
                <p class="mensaje-error">
                    <?= htmlspecialchars(
                        $_GET['error'],
                        ENT_QUOTES,
                        'UTF-8'
                    ) ?>
                </p>
            <?php endif; ?>

            <form
                id="formulario"
                action="index.php?controller=contacto&action=store"
                method="POST"
            >

                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    placeholder="Nombre completo"
                    maxlength="100"
                    required
                >
                <small id="errorNombre"></small>

                <input
                    type="email"
                    id="correo"
                    name="correo"
                    placeholder="Correo"
                    maxlength="150"
                    required
                >
                <small id="errorCorreo"></small>

                <input
                    type="tel"
                    id="telefono"
                    name="telefono"
                    placeholder="Teléfono"
                    maxlength="20"
                    required
                >
                <small id="errorTelefono"></small>

                <input
                    type="text"
                    id="asunto"
                    name="asunto"
                    placeholder="Asunto"
                    maxlength="150"
                    required
                >
                <small id="errorAsunto"></small>

                <textarea
                    id="mensaje"
                    name="mensaje"
                    placeholder="Mensaje"
                    maxlength="1000"
                    required
                ></textarea>
                <small id="errorMensaje"></small>

                <button type="submit" id="btnEnviar">
                    Enviar
                </button>

            </form>

            <p id="mensajeExito"></p>

        </div>

        <div class="card">
            <h2>Información</h2>

            <p>📍 San José, Costa Rica</p>
            <p>📞 +506 2222-1234</p>
            <p>📧 contacto@nextcode.com</p>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.746520777404!2d-84.09072492585753!3d9.93254237422486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e3420b1b4d61%3A0x7c4d4ec2d5b4df44!2sSan%20Jos%C3%A9%2C%20Costa%20Rica!5e0!3m2!1ses!2scr!4v1717272000000!5m2!1ses!2scr"
                loading="lazy"
                title="Ubicación de NextCode en San José"
            ></iframe>

        </div>

    </div>

    <footer>
        <p>© 2026 NextCode Academy</p>
    </footer>

    <script src="../JS/Contacto.js"></script>

</body>

</html>