
const profesores = [

{
id: 1,
nombre: "Carlos Mendoza",
especialidad: "C# y .NET Core",
descripcion:
"Especialista en arquitecturas limpias y el patrón repositorio.",
foto: "./img/profe1.jpg",
correo: "carlos.mendoza@nextcode.com",
cursosQueImparte:
"Desarrollo Backend, Arquitectura de Software"
},

{
id: 2,
nombre: "Laura Jiménez",
especialidad: "Infraestructura",
descripcion:
"Experta en administración de Windows Server.",
foto: "./img/profe2.jpg",
correo: "laura.jimenez@nextcode.com",
cursosQueImparte:
"Redes y Servidores, Cloud Computing"
},

{
id: 3,
nombre: "Roberto Silva",
especialidad: "Bases de Datos",
descripcion:
"Ingeniero enfocado en SQL Server.",
foto: "./img/profe3.jpg",
correo: "roberto.silva@nextcode.com",
cursosQueImparte:
"Diseño de BD, Optimización SQL"
},

{
id: 4,
nombre: "Ana Castillo",
especialidad: "Auditoría TI",
descripcion:
"Especialista en gobierno de datos.",
foto: "./img/profe4.jpg",
correo: "ana.castillo@nextcode.com",
cursosQueImparte:
"Ciberseguridad, Auditoría Informática"
}

];



document
.getElementById("btnInicio")
.addEventListener(
"click",
() => location.href="./index.html"
);

document
.getElementById("btnContacto")
.addEventListener(
"click",
() => location.href="./contacto.html"
);

document
.getElementById("btnCursos")
.addEventListener(
"click",
() => location.href="./cursos.html"
);



const contenedor =
document.getElementById(
"contenedor-profesores"
);


const modal =
new bootstrap.Modal(
document.getElementById(
"modalProfesor"
)
);



function abrirModal(id){

const p =
profesores.find(
x => x.id === id
);

if(!p) return;

document.getElementById(
"modal-img"
).src =
p.foto;

document.getElementById(
"modal-nombre"
).textContent =
p.nombre;

document.getElementById(
"modal-especialidad"
).textContent =
p.especialidad;

document.getElementById(
"modal-descripcion"
).textContent =
p.descripcion;

document.getElementById(
"modal-correo"
).textContent =
p.correo;

document.getElementById(
"modal-cursos"
).textContent =
p.cursosQueImparte;

modal.show();

}



function renderizarTarjetas(){

contenedor.innerHTML = "";

profesores.forEach(
profe => {

const col =
document.createElement(
"div"
);

col.className =
"col-md-3";

col.innerHTML = `

<div
class="card tarjeta"
data-id="${profe.id}">

<img
src="${profe.foto}"
class="card-img-top">

<div
class="card-body">

<h5>
${profe.nombre}
</h5>

<h6>
${profe.especialidad}
</h6>

<p>
${profe.descripcion}
</p>

</div>

</div>

`;

contenedor.appendChild(
col
);

}
);

}



contenedor.addEventListener(
"click",
(e)=>{

const tarjeta =
e.target.closest(
".tarjeta"
);

if(!tarjeta)
return;

abrirModal(
Number(
tarjeta.dataset.id
)
);

}
);



document.addEventListener(
"DOMContentLoaded",
renderizarTarjetas
);

