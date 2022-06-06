// Script permettant de mettre 3 petits points quand celle-ci depasse 20 caractères pour la description des articles

// Script to put 3 small points when it exceeds 20 characters for description of items

let block = document.querySelectorAll("#suppr");

let allmenu = document.querySelectorAll(".menu");

const gate = document.querySelectorAll(".Gate");

let describe = document.querySelectorAll(".description");

function truncateString(str, num) {
    return str.length > num ? str = str.slice(0, num) + " " + "..." : str;
};

describe.forEach(describe => 
{
    describe.innerHTML = truncateString(describe.innerHTML, 20);
})

for(let i = 0 ; i <= block.length ; i++)
{
    block[i].addEventListener('click', () => {

        allmenu[i].classList.add("MenuDisappear");

        gate[i].classList.add("GateOp");
            
    })
}
/*block.forEach(disapear => 
    {
        disapear.addEventListener('click', () => {
            
                allmenu.classList.add("MenuDisappear");
            
            gate.classList.add("GateOp");
            setTimeout(() =>{
                gate.classList.remove(".GateOp");
            },1000);
        });
});*/