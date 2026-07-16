<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>NextCode</title>

    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <nav>

        <img src="img/nextcode.png" class="logo">

        <div class="menu">
            <button onclick="location.href='./contacto.html'">Contacto</button>
            <button onclick="location.href='./cursos.html'">Cursos</button>
            <button onclick="location.href='./profesores.html'">Profesores</button>
        </div>

    </nav>
    <div class="inicio">
        <h1>Academia de programación NextCode </h1>
        <p>Aprende programación desde cero, rápido y fácil con los mejores profesores.</p>
    </div>
    <div>
        <h2>Cursos Destacados</h2>
    </div>
    <div class="cursos">

        <?php foreach($cursos as $curso): ?>

            <div class="card">

                <img src="<?= $curso['imagen']; ?>" alt="<?= $curso['nombre']; ?>">

                <h3><?= $curso['nombre']; ?></h3>

                <p><?= $curso['categoria']; ?></p>

                <p><?= $curso['descripcion']; ?></p>

            </div>

        <?php endforeach; ?>

    </div>
    <div class="estadisticas">
        <h2>Estadísticas</h2>
        <p>3000 Estudiantes</p>
        <p>25 Profesores</p>
        <p>40 Cursos</p>
    </div>
    <div class="testimonios">
        <h2>Testimonios</h2>
        <p>"Muy buenos cursos, aprendi desde lo mas básico y fácil" - Jesús</p>
        <p>"Aprendí muchísimo y me encantaron los cursos" - Sofia</p>
    </div>
    <footer>
        <p>
            © 2026 NextCode Academy
        </p>
    </footer>
    
</body>
</html>