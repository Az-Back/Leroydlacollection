// Toutes les variables necessaires

// All variables needed

let anim = document.querySelectorAll(".TextNav");
const ufo = document.querySelector(".Ufo");
const car = document.querySelector("#sprite");
let list = document.querySelectorAll(".RefNav");
let list2 = document.querySelectorAll(".Paragraphe");
let list3 = document.querySelector(".RefNav");

let desc = document.querySelector("#desc");

const text2 = document.querySelector("#Text2");
const text3 = document.querySelector("#Text3");
const text4 = document.querySelector("#Text4");

const gun1 = document.querySelector("#gunorange");
const gun2 = document.querySelector("#gunbleu");
const gun3 = document.querySelector("#gunnoir");

const portail1 = document.querySelector("#portail1");
const portail2 = document.querySelector("#portail2");
const portail3 = document.querySelector("#portail3");

//////////////////////////////////////////

// Pour chaque .TextNav et au click on va donner une classe et placer un element en fonction de la ou est la souris sur l'écran puis au bout d'une seconde on les retire

// For each . TextNav and at the click we will give a class and place an element according to where is the mouse on the screen then after a second we remove them

anim.forEach(change => 
    {
        change.addEventListener('click', (e) => {
            ufo.classList.add("appear");
            ufo.style.left = e.pageX + "px";
            ufo.style.top = e.pageY + "px";
            car.classList.add("display");
            setTimeout(() =>{
                ufo.classList.remove("appear");
                car.classList.remove("display");
            },1000);
        });
    });

// Pour chaque .RefNav et au click on donne la classe au premier enfant

// For each . RefNav and click the class is given to the first child

list.forEach(end => {
    end.addEventListener('click', (e) => {
        let update = end.childNodes[1];
            update.classList.add("Disapear");                
    });
});

// Pour chaque .TextNav au chargement on donne a l'élement a qui est sont enfant la classe active

// For each . TextNav at loading we give to the element a who is child the active class

anim.forEach(upload => {
    upload.addEventListener('load', () => {
        let loading = upload.appendChild(a);
            loading.classList.add("active");
    });
});

// Évenement avec effet en fonction de la ou se trouve la souris

// Event with effect depending on where the mouse is located

const mousemove = document.querySelector(".mousemove")

window.addEventListener('mousemove', (e) => {
    mousemove.style.left = e.pageX + "px";
    mousemove.style.top = e.pageY + "px";
    car.style.left = e.pageX + "px";
    car.style.top = e.pageY + "px";
});

// Évenement pour le texte de la page d'accueil

// Event for the home page text

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

// Évenement au scroll pour la page d'accueil

// Scroll event for home page

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



