const nombre = document.getElementById("nombre");
const correo = document.getElementById("correo");
const telefono = document.getElementById("telefono");
const asunto = document.getElementById("asunto");
const mensaje = document.getElementById("mensaje");

const errorNombre = document.getElementById("errorNombre");
const errorCorreo = document.getElementById("errorCorreo");
const errorTelefono = document.getElementById("errorTelefono");
const errorAsunto = document.getElementById("errorAsunto");
const errorMensaje = document.getElementById("errorMensaje");

const btnEnviar = document.getElementById("btnEnviar");
const mensajeExito = document.getElementById("mensajeExito");

function validarNombre() {

    const regex = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;

    if (nombre.value.trim().length < 5) {
        errorNombre.textContent =
            "El nombre debe tener mínimo 5 caracteres.";
        return false;
    }

    if (!regex.test(nombre.value.trim())) {
        errorNombre.textContent =
            "Solo se permiten letras y espacios.";
        return false;
    }

    errorNombre.textContent = "";
    return true;
}

function validarCorreo() {

    const regex =
        /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!regex.test(correo.value.trim())) {
        errorCorreo.textContent =
            "Correo electrónico inválido.";
        return false;
    }

    errorCorreo.textContent = "";
    return true;
}

function validarTelefono() {

    const regex = /^[0-9]{8,}$/;

    if (!regex.test(telefono.value.trim())) {
        errorTelefono.textContent =
            "Debe contener al menos 8 números.";
        return false;
    }

    errorTelefono.textContent = "";
    return true;
}

function validarAsunto() {

    if (asunto.value.trim().length < 3) {
        errorAsunto.textContent =
            "El asunto debe tener mínimo 3 caracteres.";
        return false;
    }

    errorAsunto.textContent = "";
    return true;
}

function validarMensaje() {

    if (mensaje.value.trim().length < 20) {
        errorMensaje.textContent =
            "El mensaje debe tener mínimo 20 caracteres.";
        return false;
    }

    errorMensaje.textContent = "";
    return true;
}

function validarFormulario() {

    const valido =
        validarNombre() &&
        validarCorreo() &&
        validarTelefono() &&
        validarAsunto() &&
        validarMensaje();

    btnEnviar.disabled = !valido;
}

nombre.addEventListener("input", validarFormulario);
correo.addEventListener("input", validarFormulario);
telefono.addEventListener("input", validarFormulario);
asunto.addEventListener("input", validarFormulario);
mensaje.addEventListener("input", validarFormulario);

document
    .getElementById("formulario")
    .addEventListener("submit", function (e) {

        e.preventDefault();

        mensajeExito.textContent =
            "Formulario enviado correctamente.";

        this.reset();

        btnEnviar.disabled = true;
    });