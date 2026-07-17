<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Profesor - NextCode</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/profesores.css">
</head>
<body>

<nav>
    <img src="../img/nextcode.png" class="logo" alt="NextCode">
    <div class="menu">
        <button onclick="location.href='../pagina/index.php'">Inicio</button>
        <button onclick="location.href='../pagina/contacto.php'">Contacto</button>
        <button onclick="location.href='../pagina/cursos.php'">Cursos</button>
        <button onclick="location.href='../pagina/profesores.php'">Profesores</button>
    </div>
</nav>

<div class="container my-5 text-center">
    <?php if (isset($profesor) && $profesor): ?>
        
        <div class="card shadow p-4 mx-auto" style="max-width: 600px;">
            <div class="text-center">
                <img src="../<?= htmlspecialchars($profesor['foto']) ?>" class="foto-modal mb-3" alt="<?= htmlspecialchars($profesor['nombre']) ?>">
            </div>
            <h2><?= htmlspecialchars($profesor['nombre']) ?></h2>
            <h5 class="text-muted"><?= htmlspecialchars($profesor['especialidad']) ?></h5>
            <p class="mt-4"><?= htmlspecialchars($profesor['descripcion']) ?></p>
            <hr>
            <p><strong>Correo:</strong> <?= htmlspecialchars($profesor['correo']) ?></p>
            <p><strong>Cursos que imparte:</strong> <?= htmlspecialchars($profesor['cursosQueImparte']) ?></p>
            
            <div class="mt-4">
                <a href="../pagina/profesores.php" class="btn btn-primary">Volver a Profesores</a>
            </div>
        </div>

    <?php else: ?>
        
        <div class="alert alert-danger mx-auto" style="max-width: 500px;">
            <h4>Profesor no encontrado</h4>
            <p>El perfil que buscas no existe en nuestra base de datos.</p>
            <a href="../profesores.php" class="btn btn-primary mt-3">Volver a Profesores</a>
        </div>

    <?php endif; ?>
</div>

<footer class="text-center py-3 mt-5">
    <p>© 2026 NextCode Academy</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>