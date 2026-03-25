// Para el manejo del evento de envío del formulario,
// previniendo su envío por defecto y mostrando alertas según la validación de los campos.


document.getElementById('contact-form').addEventListener('submit', function(event){
    event.preventDefault(); //Evita el envío por defecto del formulario

    //Obtención de valores de los campos
    const name = document.getElementById('name').value;
    const email=document.getElementById('email').value;
    const mensaje=document.getElementById('mensaje').value;

    //verificamos que los campos no esten vacíos
    if(name && email && mensaje){
        alert(`Gracias por tu mensaje, ${name}. Te contactaremos pronto.`);
    }else{
        alert(`Por favor, completa todos los campos`);
    }
});