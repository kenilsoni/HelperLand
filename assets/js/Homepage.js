const scrollDown = document.querySelector("#scrollDown");
const tgle_class1 = document.querySelector(".tgle_class");

const navMenu = document.querySelector(".navMenu");
tgle_class1.addEventListener("click", () => {
tgle_class1.classList.toggle("open");
navMenu.classList.toggle("open");
});
window.addEventListener("scroll", ()=>{
    if (window.scrollY > 70) {
        document.getElementById("vlr").classList.add("bg-grey");

        document.getElementById("new").style.maxHeight="64px";
           
        document.getElementById("new").style.maxWidth="93px";
    } else {
        document.getElementById("vlr").classList.remove("bg-grey");
      
        document.getElementById("new").style.maxHeight="102px";
           
        document.getElementById("new").style.maxWidth="138px";
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