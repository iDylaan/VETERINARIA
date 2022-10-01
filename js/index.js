// Variables
const btnIniciarSesion = document.querySelector('#nav-login');
const btnQuienesSomos = document.querySelector('#nav-quienes-somos');
const btnFacebook = document.querySelector('#btnFacebook');
const btnInstagram = document.querySelector('#btnInstagram');


// Event Listeners
eventListeners();
function eventListeners() {
    

    btnIniciarSesion.addEventListener('click', () => {
        window.location.href = './paginas/inicio_sesion.html';
    });
    btnQuienesSomos.addEventListener('click', () => {
        window.location.href = './paginas/quienes_somos.html';
    });
    btnFacebook.addEventListener('click', () => {
        window.location.href = 'https://www.facebook.com/profile.php?id=100086393047213';
    });
    btnInstagram.addEventListener('click', () => {
        window.location.href = 'https://www.instagram.com/mascota_feliz12/';
    });
}