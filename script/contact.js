const fb = document.querySelector("#facebook");
const goku1 = document.querySelector(".goku1");
const goku2 = document.querySelector(".goku2");


// Évenement au chargement de page qui permet d'ajouter une classe puis de la retirer aprés un temps donné

// Event at page loading that allows you to add a class and then remove it after a given time

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