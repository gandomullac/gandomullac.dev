function toggleMobileNavState() {
    const e = document.querySelector("body");
    e.classList.toggle("nav--active")
}

function initBurger() {
    const e = document.querySelector(".burger");
    e.addEventListener("click", toggleMobileNavState)
}

initBurger()
