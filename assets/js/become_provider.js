var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map((popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl));

const nav = document.querySelector("nav");
const tgle_class = document.querySelector(".tgle_class");

const navMenu = document.querySelector(".navMenu");


const scrollDown = document.querySelector("#scrollDown");
const howItWorks = document.querySelector(".howItWorks");


const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
const tooltipList = tooltipTriggerList.map((tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl));

window.addEventListener("scroll", () => {
    if (window.scrollY > 70) {
        nav.classList.add("bg-grey");
        document.getElementById("new").style.maxHeight = "64px";

        document.getElementById("new").style.maxWidth = "93px";
    } else {
        nav.classList.remove("bg-grey");
        document.getElementById("new").style.maxHeight = "102px";

        document.getElementById("new").style.maxWidth = "138px";
    }
});
scrollDown.addEventListener("click", () => {
    scrollDown.scrollIntoView();
});
tgle_class.addEventListener("click", () => {
    tgle_class.classList.toggle("open");
    navMenu.classList.toggle("open");
});