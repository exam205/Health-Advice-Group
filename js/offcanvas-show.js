console.log("test")
var offcanvas = document.getElementById('offcanvas-mobile');
var button = document.getElementById('mobile-button');
offcanvas.addEventListener('show.bs.offcanvas', function () {
    button.classList.toggle('hide-button')
});
offcanvas.addEventListener('hide.bs.offcanvas', function () {
    button.classList.toggle('hide-button')
});