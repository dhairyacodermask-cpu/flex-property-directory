document.addEventListener("DOMContentLoaded", function () {

    const navbar = document.querySelector(".custom-navbar");

    window.addEventListener("scroll", function () {

        if (window.scrollY > 100) {

            navbar.classList.add("scrolled");

        } else {

            navbar.classList.remove("scrolled");

        }

    });

});