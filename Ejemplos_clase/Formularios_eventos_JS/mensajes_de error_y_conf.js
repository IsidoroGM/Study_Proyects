
// Simples mensajes de eror y confirmación

const mensajeError=document.getElementById('miError');
if(mensajeError.value.trim()===''){
    mensajeError.textContent = 'El nombre es obligatorio';
    mensajeError.style.display='block';
}


// Mensaje de confirmación
// Una vez que el formulario se ha enviado correctamente, podemos mostrar un mensaje de confirmación en la página sin necesidad de recargarla:

fetch('procesar.php', {
    method: 'POST', body:datos
})

.then (response=>response.json())
.then (data=> {
    const mensajeExito =document.getElementById('mensajeExito');
    mensajeExito.textContent = '¡Formulario enviado con éxito!';
    mensajeExito.style.display= 'block';
});
