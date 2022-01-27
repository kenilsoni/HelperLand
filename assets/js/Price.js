const tgle_class = document.querySelector(".tgle_class");
const navmenu = document.querySelector(".navmenu");
tgle_class.addEventListener("click", () => {
    tgle_class.classList.toggle("open");
    navmenu.classList.toggle("open");
});
