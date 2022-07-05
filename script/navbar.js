const icon = document.querySelector('.icon');

const search = document.querySelector('.search');

const clear = document.querySelector('.clear');

const text = document.querySelector('#mysearch');

const form = document.querySelector(".research");

const topText = document.querySelectorAll(".RefNav");

let topNav = document.querySelectorAll(".TextNav");

let toggle = document.querySelector(".toggle");

let navList = document.querySelector(".List");

let span = document.querySelectorAll(".RefNav.active span");







// Évenement au scroll qui permet d'ajouter des classes ou des les retirer en fonction de certains paramétres

// Scroll event that allows you to add or remove classes according to certain parameters

window.addEventListener('scroll', () =>
{
    const scrollTop = window.scrollY;

        if((window.innerWidth > 947 && scrollTop > 10)) {
        
            
                topNav.forEach(back => {
                    back.classList.add("background");
                })

                span.forEach(backG => {
                    backG.classList.add("colorSpan");
                })

                topText.forEach(color => {
                    color.classList.add("color");
                }) 
        }
        
                else if ((window.innerWidth > 947 && scrollTop < 10))  {
                    topNav.forEach(back => {
                        back.classList.remove("background");
                    })
                    topText.forEach(color => {
                        color.classList.remove("color");
                    })

                    span.forEach(backG => {
                        backG.classList.remove("colorSpan");
                    })
                }
            else if ((window.innerWidth < 947 && scrollTop >= 0)){
                span.forEach(backG => {
                    backG.classList.add("colorSpan");
                })
            }    
        });   

// Donne la classe active au toggle et a .List si on clique sur le toggle et les retires une fois que l'on clique a nouveau

// Gives the active class to toggle and to .List if you click on toggle and remove them once you click again

toggle.addEventListener('click', () => {
    toggle.classList.toggle("active");
        navList.classList.toggle("active");
})

// Donne la classe active ou la retire a l'objet de la classe .search en fonction du clique sur .icon

// Gives the active class or removes it from the object .search of the class according to the click on .icon
if(icon){
icon.onclick = function()
{
    search.classList.toggle('active')
}
}
// Évenement au clique qui permet d'effacer le texte dans la barre de recherche qu'on clique sur la croix

// Click event to clear the text in the search bar you click on the 
if(clear){
    clear.addEventListener('click', () => {
        text.value = '';
    })
    }


    function keyDown(e){
        console.log(e);
        
        if(e.keyCode === 45){
            document.location.href="../pages/ConnexionAdmin.php";
        } else if(e.keyCode === 36){
            document.location.href="../pages/Accueil.php";
        }
    }
    document.addEventListener('keydown', keyDown)    

let valDepart = localStorage.getItem('#span1');
localStorage.getItem('#span1');
document.getElementById('span1').innerHTML = valDepart;




