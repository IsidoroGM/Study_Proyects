
// Fetch es una API moderna que permite realizar solicitudes HTTP de manera sencilla y trabajar con las respuestas del servidor. 
// A continuación, un ejemplo de envío de formulario usando Fetch:

const formulario=document.getElementById('miFormulario');

formulario.addEventListener('submit', function(event){
    event.preventDefault();
    const datos=new FormData(formulario);

    fetch('procesar.php', { method: 'POST', body: datos})

    .then(response=> response.json())
    .then(data=> { 
        alert('Datos enviados con éxito');
        console.log(data);
    })
    .catch(error=>{
        console.error('ERror al enviar los datos', error);
    });
});