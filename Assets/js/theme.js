// Variables
const menuToggle = document.querySelector('#menu-toggle');

// Events
menuToggle.addEventListener('click', event => {
    event.preventDefault();
    document.getElementById('content-wrapper').classList.toggle('toggled');    
});