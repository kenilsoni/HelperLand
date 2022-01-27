const tgle_navs = document.querySelector(".tgle_navs");
const navmenu = document.querySelector(".navmenu");
tgle_navs.addEventListener("click", () => {
    tgle_navs.classList.toggle("open");
    navmenu.classList.toggle("open");
});