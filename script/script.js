let anim = document.querySelectorAll(".TextNav");
const dragon = document.querySelector(".Ufo");
const dragonball = document.querySelector("#sprite2");
let list = document.querySelectorAll(".RefNav");
let list2 = document.querySelectorAll(".Paragraphe");
let list3 = document.querySelector(".RefNav");

anim.forEach(change => 
    {
        change.addEventListener('click', () => {
            dragon.classList.add("appear");
            dragonball.classList.add("display");
            setTimeout(() =>{
                dragon.classList.remove("appear");
                dragonball.classList.remove("display");
            },1000);
        });
    });

list.forEach(end => {
    end.addEventListener('click', (e) => {
        let update = end.childNodes[1];
            update.classList.add("Disapear");                
    });
});

anim.forEach(upload => {
    upload.addEventListener('load', () => {
        let loading = upload.appendChild(a);
            loading.classList.add("active");
    });
});

const mousemove = document.querySelector(".mousemove")

window.addEventListener('mousemove', (e) => {
    mousemove.style.left = e.pageX + "px";
    mousemove.style.top = e.pageY + "px";
    sprite2.style.left = e.pageX + "px";
    sprite2.style.top = e.pageY + "px";
    dragon.style.left = e.pageX + "px";
    dragon.style.top = e.pageY + "px";
});


const txtAnim = document.querySelector('.Text');

new Typewriter(txtAnim, {
    loop: true,
    deleteSpeed: 20
})
.changeDelay(20)
.typeString('<strong>BONJOUR</strong>')
.pauseFor(600)
.deleteChars(7)
.typeString('<strong>BIENVENUE CHEZ<br></strong>')
.pauseFor(200)
.typeString('<img class="Logo" src="../images/LogoEnd.png"></img>')
.pauseFor(2000)
.deleteChars(40)
.start()


