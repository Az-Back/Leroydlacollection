const title = document.querySelector("#Title");
const video = document.querySelector("#background-video");
const head = document.querySelector(".Head");

title.addEventListener('click', () => {
    head.style.display = "none";
    video.style.opacity = "1";
    video.play();
    
});