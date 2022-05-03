const fb = document.querySelector("#facebook");
const goku1 = document.querySelector(".goku1");
const goku2 = document.querySelector(".goku2");


window.addEventListener('load', () =>
{
    goku1.classList.add("come");
    goku2.classList.add("come");
    setTimeout(() =>{
        goku1.classList.remove("come");
        goku2.classList.remove("come");
        fb.style.display = "contents";
    },1500);
});