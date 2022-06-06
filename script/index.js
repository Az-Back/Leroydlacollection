const link = document.querySelector(".LinkButton");
const video = document.querySelector("#background-video");
const head = document.querySelector(".Head");

// Évenement au clique qui permet de supprimer le texte et d'afficher ainsi que lancer la video

// Click event who display none the texte and put opacity for the video and launch it 

link.addEventListener('click', () => {
    head.style.display = "none";
    video.style.opacity = "1";
    video.play();
    
});