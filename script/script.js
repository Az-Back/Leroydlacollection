let anim = document.querySelectorAll(".TextNav");
const ufo = document.querySelector(".Ufo");
const dragonball = document.querySelector("#sprite2");
let list = document.querySelectorAll(".RefNav");
let list2 = document.querySelectorAll(".Paragraphe");
let list3 = document.querySelector(".RefNav");

const text2 = document.querySelector("#Text2");
const text3 = document.querySelector("#Text3");
const text4 = document.querySelector("#Text4");

const gun1 = document.querySelector("#gunorange");
const gun2 = document.querySelector("#gunbleu");
const gun3 = document.querySelector("#gunnoir");

const portail1 = document.querySelector("#portail1");
const portail2 = document.querySelector("#portail2");
const portail3 = document.querySelector("#portail3");

anim.forEach(change => 
    {
        change.addEventListener('click', () => {
            ufo.classList.add("appear");
            dragonball.classList.add("display");
            setTimeout(() =>{
                ufo.classList.remove("appear");
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
    ufo.style.left = e.pageX + "px";
    ufo.style.top = e.pageY + "px";
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
.pauseFor(1700)
.deleteChars(40)
.start()



window.addEventListener('scroll', () =>
{
    const scrollTop = document.scrollingElement.scrollTop;

    if(scrollTop > 200)
    {
        text2.classList.add('Text2');
        text3.classList.add('Text3');
        text4.classList.add('Text4');
        gun1.classList.add('gunorange');
        gun2.classList.add('gunbleu');
        gun3.classList.add('gunnoir');
        portail1.classList.add('portail1active');
        portail2.classList.add('portail2active');
        portail3.classList.add('portail3active');
    }
    
});



