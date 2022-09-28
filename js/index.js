// Variables
const btnIniciarSesion = document.querySelector('#nav-login');
const btnQuienesSomos = document.querySelector('#nav-quienes-somos');


// Event Listeners
eventListeners();
function eventListeners() {
    

    btnIniciarSesion.addEventListener('click', () => {
        window.location.href = './paginas/inicio_sesion.html';
    });
    btnQuienesSomos.addEventListener('click', () => {
        window.location.href = './paginas/quienes_somos.html';
    });
}