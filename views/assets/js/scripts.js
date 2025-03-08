/*! 
* Start Bootstrap - Freelancer v7.0.7 (https://startbootstrap.com/theme/freelancer) 
* Copyright 2013-2023 Start Bootstrap 
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE) 
*/ 
//
// Scripts
//

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

// ✅ ✅ ✅ CÓDIGO CORREGIDO PARA LOGIN ✅ ✅ ✅
document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("loginForm");
    const loginModal = new bootstrap.Modal(document.getElementById("loginModal"));

    if (loginForm) {
        loginForm.addEventListener("submit", function (event) {
            event.preventDefault(); // Evita el envío tradicional del formulario

            const email = document.getElementById("loginEmail").value.trim();
            const password = document.getElementById("password").value.trim();

            console.log("🔍 Enviando datos: ", email, password); // Depuración

            // Enviar los datos al servidor mediante AJAX
            fetch("views/pages/login/login.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: `email=${encodeURIComponent(email)}&password=${encodeURIComponent(password)}`
            })
            .then(response => response.json())
            .then(data => {
                console.log("🔍 Respuesta del servidor:", data); // Depuración

                if (data.success) {
                    alert("✅ " + data.message);
                    loginModal.hide(); // Cierra el modal solo si el login es exitoso
                } else {
                    alert("❌ " + data.message);
                }
            })
            .catch(error => console.error("❌ Error en el login:", error));
        });
    }
});
