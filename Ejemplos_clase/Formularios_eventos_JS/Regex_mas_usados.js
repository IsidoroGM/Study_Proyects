
// Regex (abreviatura de Regular Expression, o expresión regular) es una forma de buscar, validar o manipular texto usando patrones.
// Una regex es como un “filtro inteligente” para texto.

// 🧠 Cuándo usar regex (muy importante)

// ✔️ Validar formularios
// ✔️ Buscar texto
// ✔️ Limpiar strings
// ✔️ Procesar datos

// 🧰 PACK DE REGEX MÁS USADOS

//-------------------------- 📧 1. Validar email
const regexEmail1 = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
if(!regexEmail.test(email)){
    alert("Email inválido");
}
// ✔️ Acepta: usuario@gmail.com
// ❌ Rechaza: usuario@ o @gmail.com

// ---------------------- 🔒 2. Contraseña segura (nivel medio)

const regexPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;

// 👉 Mínimo 8 caracteres, 1 mayúscula, 1 minúscula y 1 número
// ✔️ Acepta: Password123
// ❌ Rechaza: password

// --------------------------------------- 🔢 3. Solo números

const regexNumeros = /^\d+$/;

// ✔️ 12345
// ❌ 123a

// --------------------------- 🔤 4. Solo letras (sin espacios)

const regexLetras = /^[a-zA-Z]+$/;

// ✔️ Juan
// ❌ Juan123

// -------------------- 🔤 5. Letras con espacios (nombre real)

const regexNombre1 = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;

// ✔️ Juan Pérez
// ❌ Juan123

// ------------------------------- 📱 6. Teléfono (España básico)

const regexTelefono = /^[6789]\d{8}$/;

//✔️ 612345678
//❌ 123456789

// ------------------------------- 🔑 7. Solo letras y números

const regexAlfanumerico = /^[a-zA-Z0-9]+$/;

// ✔️ user123
// ❌ user_123

// 🧪 EJEMPLO COMPLETO (modo PRO)

const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const regexNombre = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;

formulario.addEventListener('submit', function(evento){

    const nombre = formulario.elements['nombre'].value;
    const correo = formulario.elements['correo'].value;

    if(!regexNombre.test(nombre)){
        alert("Nombre inválido");
        evento.preventDefault();
    }

    if(!regexEmail.test(correo)){
        alert("Email inválido");
        evento.preventDefault();
    }
});