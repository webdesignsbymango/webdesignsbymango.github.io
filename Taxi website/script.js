document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.getElementById('menuButton');
    const closeButton = document.getElementById('closeButton');
    const overlay = document.getElementById('overlay');

    menuButton.addEventListener('click', function() {
        overlay.classList.add('show');
    });

    closeButton.addEventListener('click', function() {
        overlay.classList.remove('show');
    });
});