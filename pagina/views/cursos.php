<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cursos - NextCode</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/cursos.css">
</head>
<body>
    <nav>
        <img src="img/nextcode.png" class="logo">
        <div class="menu">
            <button onclick="location.href='index.php?controller=index&action=index'">Inicio</button>
            <button onclick="location.href='../contacto.html'">Contacto</button>
            <button onclick="location.href='../profesores.html'">Profesores</button>
        </div>
    </nav>

    <div class="inicio">
        <h1>Catálogo de Cursos</h1>
        <p>Explora nuestra amplia gama de cursos de programación.</p>
    </div>

    <div class="search-container">
        <form method="get" action="index.php">
            <input type="hidden" name="controller" value="cursos">
            <input type="hidden" name="action" value="index">
            <select name="categoria" onchange="this.form.submit()">
                <option value="todos" <?= ($categoria ?? 'todos') === 'todos' ? 'selected' : ''; ?>>Todos</option>
                <option value="Desarrollo Web" <?= ($categoria ?? '') === 'Desarrollo Web' ? 'selected' : ''; ?>>Desarrollo Web</option>
                <option value="Data Science" <?= ($categoria ?? '') === 'Data Science' ? 'selected' : ''; ?>>Data Science</option>
                <option value="Software" <?= ($categoria ?? '') === 'Software' ? 'selected' : ''; ?>>Software</option>
                <option value="Diseño" <?= ($categoria ?? '') === 'Diseño' ? 'selected' : ''; ?>>Diseño</option>
            </select>
        </form>
    </div>

    <main>
        <div class="cursos-container">
            <?php foreach($cursos as $curso): ?>

                <div class="card">
                    <img src="<?= $curso['imagen']; ?>" alt="<?= $curso['nombre']; ?>">
                    <h3><?= $curso['nombre']; ?></h3>
                    <p class="category"><?= $curso['categoria']; ?></p>
                    <p><?= $curso['descripcion']; ?></p>
                    <p class="duration">Duración: <?= $curso['duracion']; ?></p>
                    <p class="price">Precio: <?= $curso['precio']; ?></p>
                </div>

            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <p>© 2026 NextCode Academy</p>
    </footer>
</body>
</html>