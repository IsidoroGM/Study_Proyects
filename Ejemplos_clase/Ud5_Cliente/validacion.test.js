
// validacion.test.js
// Este archivo contiene pruebas unitarias para la función de validación del formulario de contacto. 
// Utiliza Jest para simular el entorno del DOM y verificar que la lógica de validación funcione correctamente, 
// mostrando los mensajes de error adecuados cuando los datos ingresados no cumplen con los criterios establecidos.

const { iniciarValidacion } = require('./validacion');

describe('Pruebas de formulario de contacto', () => {
    beforeEach(() => {
        // 1. Simulamos el HTML que necesita tu script
        document.body.innerHTML = `
            <form id="contact-form">
                <input name="name" id="name" />
                <span id="error-name" class="error"></span>
                <input name="email" id="email" />
                <span id="error-email" class="error"></span>
                <input name="phone" id="phone" />
                <span id="error-phone" class="error"></span>
                <input name="password" id="password" />
                <span id="error-password" class="error"></span>
                <div id="mensaje"></div>
                <button type="submit">Enviar</button>
            </form>
        `;
        // 2. Ejecutamos la lógica
        iniciarValidacion();
    });

    test('debe mostrar error si el email es inválido', () => {
        const emailInput = document.getElementById('email');
        const form = document.getElementById('contact-form');
        const errorSpan = document.getElementById('error-email');

        emailInput.value = 'correo-falso'; // Email mal escrito
        form.dispatchEvent(new Event('submit')); // Simulamos el click en enviar

        expect(errorSpan.textContent).toBe('Correo no válido');
        expect(emailInput.style.border).toBe('2px solid red');
    });

    test('debe mostrar éxito si todos los campos son correctos', () => {
        document.getElementById('name').value = 'Juan Perez';
        document.getElementById('email').value = 'juan@ejemplo.com';
        document.getElementById('phone').value = '+34 600-123-456';
        document.getElementById('password').value = 'Password123!';

        const form = document.getElementById('contact-form');
        form.dispatchEvent(new Event('submit'));

        const mensaje = document.getElementById('mensaje');
        expect(mensaje.textContent).toBe('Formulario enviado con éxito');
        expect(mensaje.style.color).toBe('green');
    });
});