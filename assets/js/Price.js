var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map((popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl));

const tgle_class = document.querySelector(".tgle_class");
const navmenu = document.querySelector(".navmenu");
tgle_class.addEventListener("click", () => {
    tgle_class.classList.toggle("open");
    navmenu.classList.toggle("open");
});
