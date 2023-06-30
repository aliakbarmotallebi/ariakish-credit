import "./bootstrap";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import swal from 'sweetalert2';
window.Swal = swal;

import Num2persian from "num2persian";

import select2 from "select2";
select2();

let toggleMenu = (sidebarElement = "aside.sidebar") => {
    document.querySelector(sidebarElement).classList.toggle("hidden");
};

document.addEventListener("click", (event) => {
    const mobile_menu = document.querySelector("aside.sidebar");
    let targetElement = event.target; // Clicked element

    do {
        if (
            targetElement == document.querySelector("#mobileMenuBtn") ||
            targetElement == document.querySelector("#mobileMenuCloseBtn")
        )
            return toggleMenu();
        if (targetElement == mobile_menu) return;
        targetElement = targetElement.parentNode;
    } while (targetElement);

    if (!mobile_menu.classList.contains("hidden"))
        mobile_menu.classList.add("hidden");
});

let toggleBackdrop = (sidebarElement = ".backdrop") => {
    document.querySelector(sidebarElement).classList.toggle("hidden");
};

document.addEventListener("click", (event) => {
    const mobile_menu = document.querySelector(".backdrop");
    let targetElement = event.target; // Clicked element

    do {
        if (
            targetElement == document.querySelector("#mobileMenuBtn") ||
            targetElement == document.querySelector("#mobileMenuCloseBtn") ||
            targetElement == mobile_menu
        )
            return toggleBackdrop();
        if (targetElement == mobile_menu) return;
        targetElement = targetElement.parentNode;
    } while (targetElement);

    if (!mobile_menu.classList.contains("hidden"))
        mobile_menu.classList.add("hidden");
});
