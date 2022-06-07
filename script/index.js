// Toutes les variables necessaires

// All the necessary variables

const pseudo = prompt("Veuillez indiquer votre nom");
const textBar = document.querySelector(".progress-bar");
const link = document.querySelector(".LinkButton");
const video = document.querySelector("#background-video");
const head = document.querySelector(".Head");

// Evenement au chargement qui change le texte de la barre de progression en fonction d'un temps donné

// Load event that changes the progress bar text according to a given time

window.addEventListener('load', () => {
    setTimeout(() =>{
        textBar.innerHTML = "Accés en cours...";
    },0001);

    setTimeout(() =>{
        textBar.innerHTML = "Accés autorisée";
    },3800);

    setTimeout(() =>{
        textBar.innerHTML = "Bienvenue" + ' ' + pseudo;
    },6150);
    
})

// Évenement au clique qui permet de supprimer le texte et d'afficher ainsi que lancer la video

// Click event who display none the texte and put opacity for the video and launch it 

link.addEventListener('click', () => {
    head.style.display = "none";
    video.style.opacity = "1";
    video.play();
    
});