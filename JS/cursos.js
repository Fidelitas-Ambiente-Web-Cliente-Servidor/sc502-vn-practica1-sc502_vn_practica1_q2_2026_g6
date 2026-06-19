// Array con los cursos del catálogo (mínimo 6 objetos requeridos)
const cursos = [
    {
        nombre: 'JavaScript Moderno',
        descripcion: 'Domina el lenguaje de la web: ES6+, promesas, async/await y manipulación del DOM.',
        categoria: 'Desarrollo Web',
        duracion: '35 horas',
        precio: '$90',
        imagen: './img/JavaScript-Symbol.png'
    },
    {
        nombre: 'React: De Cero a Experto',
        descripcion: 'Crea aplicaciones web modernas y rápidas con la librería más popular de JavaScript.',
        categoria: 'Desarrollo Web',
        duracion: '45 horas',
        precio: '$200',
        imagen: './img/java-script1.jpg'
    },
    {
        nombre: 'Python para Ciencia de Datos',
        descripcion: 'Domina Python y librerías como Pandas y NumPy para análisis y visualización de datos.',
        categoria: 'Data Science',
        duracion: '35 horas',
        precio: '$180',
        imagen: './img/phyton.png'
    },
    {
        nombre: 'Machine Learning con Python',
        descripcion: 'Aprende los fundamentos del machine learning y crea modelos predictivos con scikit-learn.',
        categoria: 'Data Science',
        duracion: '50 horas',
        precio: '$250',
        imagen: './img/Machine Learning con Python.png'
    },
    {
        nombre: 'C++ Orientado a Objetos',
        descripcion: 'Aprende programación orientada a objetos con el potente y eficiente lenguaje C++.',
        categoria: 'Software',
        duracion: '50 horas',
        precio: '$120',
        imagen: './img/c++.png'
    },
    {
        nombre: 'Diseño de Interfaces UI/UX',
        descripcion: 'Conceptos de diseño, prototipado en Figma y principios de experiencia de usuario.',
        categoria: 'Diseño',
        duracion: '30 horas',
        precio: '$120',
        imagen: './img/web-ui-ux-design-mobile-app-development-application-design-online-web-building-concept-modern-flat-cartoon-style-illustration-on-white-background-vector.jpg'
    }
];

// Referencias a los elementos del DOM que controlan el filtrado y la visualización
const cursosContainer = document.getElementById('cursos-container');
const searchInput = document.getElementById('search-input');
const categoryFilters = document.getElementById('category-filters');

// Guarda la categoría actualmente seleccionada; inicia en "todos"
let categoriaActual = 'todos';

// Construye y muestra las tarjetas HTML para cada curso del array recibido
function renderizarCursos(cursosAMostrar) {

    // Limpiar el contenedor antes de volver a renderizar
    cursosContainer.innerHTML = '';

    // Si no hay resultados, mostrar un mensaje informativo
    if (cursosAMostrar.length === 0) {
        const mensaje = document.createElement('p');
        mensaje.textContent = 'No se encontraron cursos que coincidan con la búsqueda.';
        cursosContainer.appendChild(mensaje);
        return;
    }

    // Crear una tarjeta por cada curso usando createElement y appendChild
    cursosAMostrar.forEach(function(curso) {

        const card = document.createElement('div');
        card.className = 'card';

        const img = document.createElement('img');
        img.src = curso.imagen;
        img.alt = curso.nombre;

        const h3 = document.createElement('h3');
        h3.textContent = curso.nombre;

        const categoria = document.createElement('p');
        categoria.className = 'category';
        categoria.textContent = curso.categoria;

        const descripcion = document.createElement('p');
        descripcion.textContent = curso.descripcion;

        const duracion = document.createElement('p');
        duracion.className = 'duration';
        duracion.textContent = 'Duración: ' + curso.duracion;

        const precio = document.createElement('p');
        precio.className = 'price';
        precio.textContent = 'Precio: ' + curso.precio;

        card.appendChild(img);
        card.appendChild(h3);
        card.appendChild(categoria);
        card.appendChild(descripcion);
        card.appendChild(duracion);
        card.appendChild(precio);

        cursosContainer.appendChild(card);
    });
}

// Aplica los dos filtros activos (categoría + búsqueda) y renderiza el resultado
function filtrarCursos() {

    const termino = searchInput.value.toLowerCase();

    // Paso 1: filtrar por categoría seleccionada
    let resultado = categoriaActual === 'todos'
        ? cursos
        : cursos.filter(function(curso) {
            return curso.categoria === categoriaActual;
        });

    // Paso 2: filtrar por texto ingresado (nombre o descripción)
    resultado = resultado.filter(function(curso) {
        return curso.nombre.toLowerCase().includes(termino) ||
               curso.descripcion.toLowerCase().includes(termino);
    });

    renderizarCursos(resultado);
}

// Escuchar escritura en la barra de búsqueda para filtrar en tiempo real
searchInput.addEventListener('input', filtrarCursos);

// Manejar clic en los botones de categoría usando delegación de eventos
categoryFilters.addEventListener('click', function(event) {

    // Ignorar clics que no sean en un botón
    if (event.target.tagName !== 'BUTTON') return;

    // Quitar clase activa del botón anterior y asignarla al presionado
    const botonActivo = categoryFilters.querySelector('.activo');
    if (botonActivo) botonActivo.classList.remove('activo');
    event.target.classList.add('activo');

    // Actualizar categoría y aplicar el filtro
    categoriaActual = event.target.dataset.category;
    filtrarCursos();
});

// Renderizar todos los cursos cuando la página termina de cargar
document.addEventListener('DOMContentLoaded', function() {
    renderizarCursos(cursos);
});
