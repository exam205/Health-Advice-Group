// Description: This script is used to hide the mobile menu button when the offcanvas menu is shown and vice versa.
var offcanvas = document.getElementById('offcanvas-mobile');
var button = document.getElementById('mobile-button');
offcanvas.addEventListener('show.bs.offcanvas', function () {
    button.classList.toggle('hide-button')
});
offcanvas.addEventListener('hide.bs.offcanvas', function () {
    button.classList.toggle('hide-button')
});