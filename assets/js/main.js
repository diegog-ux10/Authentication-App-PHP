const dropdownToggle = document.querySelector("#dropdown-menu-toggle")
const dropdownMenu = document.querySelector("#dropdown-menu")

dropdownToggle.addEventListener("click", () => {
    dropdownMenu.classList.toggle("hide-toggle");
})