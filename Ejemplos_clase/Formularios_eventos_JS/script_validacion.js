
// Ejemplo para validar un formulario con JavaScript
// Para el manejo del evento de envío del formulario,

const formulario=document.getElementById('miForm');
formulario.addEventListener('submit', function(evento){
    const campoNombre=formulario.elements['nombre'];
    const campoCorreo=formulario.elements['correo'];

    //Verificamos que el campo no esté vacío
    if(campoNombre.value.trim()===''){

        alert('El nombre es obligatorio');
        evento.preventDefault();
    }

    //Verificamos que el campo no esté vacío
    if(!campoCorreo.value.includes('@')){

        alert('El correo es obligatorio');
        evento.preventDefault();
    }
});

//comprobación de campos obligatorios
if(campo.value.trim()===''){
    alert('Campos obligatorios')
}

//Validación de formato de correo electrónico
const regexCorreo=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
if(!regexCorreo.test(campoCorreo.value)){
    alert('Introduce un email valido')
}

//Validación de longitud mínima/máxima
if(campoContraseña.value.lenght<8){
    alert('');
}

//Validación de coincidencia de contraseñas
if(campoContraseña.value!==campoConfirmacion.value){
    alert('Las contraseñas no coinciden');
}
