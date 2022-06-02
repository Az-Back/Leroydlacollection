// Lance un son a la connection de l'utilisateur

// Starts a sound at the user’s connection

const sound = document.querySelector("#audio1");
const launch = document.querySelector("#Connect");

launch.addEventListener('click', () => {
    sound.play();
})