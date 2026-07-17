USE nextcode;

CREATE TABLE IF NOT EXISTS contacto (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    asunto VARCHAR(150) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha_creacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO contacto (
    nombre,
    correo,
    telefono,
    asunto,
    mensaje
) VALUES
(
    'Ana Rodríguez',
    'ana@example.com',
    '8888-1111',
    'Información',
    'Deseo recibir información sobre los cursos.'
),
(
    'Carlos Méndez',
    'carlos@example.com',
    '8888-2222',
    'Matrícula',
    'Quiero conocer las fechas de matrícula.'
),
(
    'María López',
    'maria@example.com',
    '8888-3333',
    'Horarios',
    'Necesito información sobre los horarios.'
),
(
    'José Ramírez',
    'jose@example.com',
    '8888-4444',
    'Profesores',
    'Quiero consultar por los profesores disponibles.'
),
(
    'Laura Sánchez',
    'laura@example.com',
    '8888-5555',
    'Soporte',
    'Necesito ayuda para acceder a la plataforma.'
);