import './bootstrap';

import Alpine from 'alpinejs';

window.$ = window.jQuery = require('jquery');
require('bootstrap');

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', function() {
    // Verificar si jQuery está cargado
    if (typeof $ !== 'undefined') {
        console.log('jQuery está cargado correctamente.');
        
        // Agregar un listener de clic al botón
        $('.dropdown-toggle').on('click', function() {
            console.log('Clic en el botón de menú desplegable.');
        });
    } else {
        console.error('jQuery no está cargado correctamente.');
    }
});