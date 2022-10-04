// Variables
const btnIniciarSesion = document.querySelector('#nav-login');
const btnQuienesSomos = document.querySelector('#nav-quienes-somos');
const btnFacebook = document.querySelector('#btnFacebook');
const btnInstagram = document.querySelector('#btnInstagram');
const btnUbicacionHeader = document.querySelector('#nav-ubicacion');
const btnHome = document.querySelector('#nav-home');
const btnLogo = document.querySelector('.header__logo');
var bars = document.querySelector('.bars__menu');

// Event Listeners
eventListeners();
function eventListeners() {
    // Header responsivo
    bars.addEventListener('click', () => bars.classList.toggle('active-bars__menu'));

    // Redirecciones
    btnIniciarSesion.addEventListener('click', () => window.location.href = '../paginas/inicio_sesion.html' );
    btnQuienesSomos.addEventListener('click', () => window.scrollTo(0, 4900) );
    btnLogo.addEventListener('click', () => window.location.href = '../index.html' );
    btnFacebook.addEventListener('click', () =>  window.location.href = 'https://www.facebook.com/profile.php?id=100086393047213' );
    btnInstagram.addEventListener('click', () => window.location.href = 'https://www.instagram.com/mascota_feliz12/' );
    btnHome.addEventListener('click', () => window.location.href = '#' );

    window.addEventListener('scroll', adaptarHeader); // Adapta el header cuando se hace scroll

    // Scrollers
    btnUbicacionHeader.addEventListener('click', () => window.scrollTo(0, 3700) );
}

function adaptarHeader() {
    const header = document.querySelector('.header__nav-container');
    header.classList.toggle("abajo", window.scrollY > 0);
    bars.classList.toggle("bars-abajo", window.scrollY > 0);
}