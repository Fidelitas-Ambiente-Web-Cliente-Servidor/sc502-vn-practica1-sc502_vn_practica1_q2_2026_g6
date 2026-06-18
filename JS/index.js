const cursos = [
    {
        nombre: "Python",
        descripcion: "Aprende a crear aplicaciones web.",
        imagen: "./img/phyton.png",
        categoria: "Backend"
    },
    {
        nombre: "JavaScript",
        descripcion: "Programa aplicaciones modernas.",
        imagen: "./img/JavaScript-Symbol.png",
        categoria: "Frontend"
    },
    {
        nombre: "C++",
        descripcion: "Orientado a objetos.",
        imagen: "./img/c++.png",
        categoria: "Software"
    }
];

const contenedor = document.getElementById("contenedor-cursos");

cursos.forEach(curso => {

    const card = document.createElement("div");
    card.className = "card";

    const imagen = document.createElement("img");
    imagen.src = curso.imagen;

    const nombre = document.createElement("h3");
    nombre.textContent = curso.nombre;

    const descripcion = document.createElement("p");
    descripcion.textContent = curso.descripcion;

    const categoria = document.createElement("p");
    categoria.textContent = curso.categoria;

    card.appendChild(imagen);
    card.appendChild(nombre);
    card.appendChild(categoria);
    card.appendChild(descripcion);

    contenedor.appendChild(card);
});