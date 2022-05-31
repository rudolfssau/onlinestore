const dropdown = document.querySelector(".dropdown");
const listmenu = document.querySelector(".navbar-items");
dropdown.addEventListener("click", () => {
    dropdown.classList.toggle("active");
    listmenu.classList.toggle("active");
})
document.querySelectorAll(".navbar-item").forEach(n => n.addEventListener("click", () => {
    dropdown.classList.remove("active");
    listmenu.classList.remove("active");
}))