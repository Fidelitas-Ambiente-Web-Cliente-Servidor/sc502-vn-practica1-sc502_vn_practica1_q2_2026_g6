<?php
require_once 'controllers/ProfesoresController.php';
require_once 'models/ProfesoresModel.php';

$action = $_GET['action'] ?? 'index';

if ($action === 'show') {
    $controller = new ProfesoresController();
    $controller->show();
    
    exit; 
}

$modelo = new ProfesoresModel();
$profesores = $modelo->getAll();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>NextCode - Profesores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/profesores.css">
</head>

<body>

<nav>
    <img src="./img/nextcode.png" class="logo" alt="Logo NextCode">
    <div class="menu">
        <button onclick="location.href='?controller=index&action=index'">Inicio</button>
        <button onclick="location.href='?controller=contacto&action=index'">Contacto</button>
        <button onclick="location.href='?controller=cursos&action=index'">Cursos</button>
    </div>
</nav>

    <header>
        <h1>Profesores</h1>
        <p>Conoce a nuestros profesores expertos en programación.</p>
    </header>

    <div class="container">
        <div id="contenedor-profesores" class="row justify-content-center g-4">
            
            <?php if (isset($profesores) && !empty($profesores)): ?>
                <?php foreach ($profesores as $profe): ?>
                    <div class="col-md-3">
                        <div class="card tarjeta" onclick="location.href='profesores.php?action=show&id=<?= htmlspecialchars($profe['id']) ?>'">
                            <img src="<?= htmlspecialchars($profe['foto'] ?? '') ?>" class="card-img-top" alt="Foto">
                            <div class="card-body">
                                <h5><?= htmlspecialchars($profe['nombre'] ?? '') ?></h5>
                                <h6><?= htmlspecialchars($profe['especialidad'] ?? '') ?></h6>
                                <p><?= htmlspecialchars($profe['descripcion'] ?? '') ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center mt-4">
                    <p>No se encontraron profesores en la base de datos.</p>
                </div>
            <?php endif; ?>

        </div>
    </div>

    <section class="container my-5">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="caja-texto">
                    <h2>Nuestra Misión</h2>
                    <p>Formar profesionales de excelencia...</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="caja-texto">
                    <h2>Nuestra Visión</h2>
                    <p>Ser la academia de programación líder...</p>
                </div>
            </div>
        </div>
    </section>

<footer class="text-center py-3">
    <p>© 2026 NextCode Academy</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>