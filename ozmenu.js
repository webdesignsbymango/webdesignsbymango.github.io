const openMenu = document.querySelector(".menu-open");
const closeMenu = document.querySelector(".menu-close");
const menuDiv = document.querySelector(".ozmenu");
const menu = document.querySelector(".ozmenu-nav");
const dropDowns = menu.getElementsByClassName("nav-dropdown");
const dropDownsChild = menu.querySelectorAll('.dropdown .nav-dropdown');
const navLinks = menu.querySelectorAll('a'); // Select all links within the menu

openMenu.addEventListener("click", menuToggle);
closeMenu.addEventListener("click", menuToggle);

document.body.insertAdjacentHTML("beforeend", "<div id='menu-overlay'></div>");
const menuOverlay = document.querySelector("#menu-overlay");
menuOverlay.addEventListener("click", menuToggle);

function menuToggle() {
    menuDiv.classList.toggle("active");
    document.body.classList.toggle("hide-scrolling");
    document.body.classList.toggle("mobile-menu-active");
    menuOverlay.classList.toggle("show");
}

// Add functionality to close the menu when a dropdown item is clicked
for (var i = 0; i < dropDownsChild.length; i++) {
    dropDownsChild[i].classList.add('child');
    dropDownsChild[i].addEventListener("click", function(event) {
        event.stopPropagation(); // Prevent the click from bubbling up to the parent elements
        this.classList.toggle('opened');
    });
}

for (var i = 0; i < dropDowns.length; i++) {
    if (!dropDowns[i].classList.contains("child")) {
        dropDowns[i].classList.add('parent');
        dropDowns[i].addEventListener("click", function(event) {
            event.stopPropagation(); // Prevent the click from bubbling up to the parent elements
            this.classList.toggle('opened');
        });
    }
}

// Close the navbar when any nav-link is clicked
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        if (menuDiv.classList.contains("active")) {
            if (link.textContent === "Unternehmen" || link.textContent === "Leistungen" || link.textContent === "Jobs" || link.textContent === "Kontakt" ) {
                
                link.nextElementSibling.querySelector('.dropdown').classList.toggle('active');
            } else {
                // Close the navbar if the clicked link is not "Unternehmen" or "Leistungen"
                menuToggle();
            }
        }
    });
});
