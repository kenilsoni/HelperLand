var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map((popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl));

const scrollDown = document.querySelector("#scrollDown");
const tgle_class1 = document.querySelector(".tgle_class");

var navMenu = document.querySelector(".fullPage");
var fullPageHidden = document.querySelector(".fullPageHidden");
var navbarHamburger = document.querySelector(".navSm .tgle_class");
navbarHamburger.addEventListener("click", () => navMenu.classList.add("open"));
fullPageHidden.addEventListener("click", () => navMenu.classList.remove("open"));

window.addEventListener("scroll", ()=>{
    if (window.scrollY > 70) {
        document.getElementById("vlr").classList.add("bg-grey");
        document.getElementById("vlr2").classList.add("bg-grey");

        document.getElementById("new").style.maxHeight="64px";
           
        document.getElementById("new").style.maxWidth="93px";
        document.getElementById("new2").style.maxHeight="64px";
           
        document.getElementById("new2").style.maxWidth="93px";
    } else {
        document.getElementById("vlr").classList.remove("bg-grey");
        document.getElementById("vlr2").classList.remove("bg-grey");
      
        document.getElementById("new").style.maxHeight="102px";
           
        document.getElementById("new").style.maxWidth="138px";
        
        document.getElementById("new2").style.maxHeight="102px";
           
        document.getElementById("new2").style.maxWidth="138px";
    }
});
function closefun()
{
var element = document.getElementById("policy1");
element.classList.add("d-none");
}
scrollDown.addEventListener("click", () => {
scrollDown.scrollIntoView();
});