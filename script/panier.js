let btn = document.querySelector(".panieradd");
let buttonlocal = document.querySelector(".btnloc");
let crossx = document.querySelector('.btncross');

if(btn){
btn.addEventListener('click', () => {
// Détection

if(valDepart!=null) {
    valDepart = parseInt(valDepart);
  } else {
    valDepart = 0;
  }
    
    // Incrémentation
    valDepart++;
    // Stockage à nouveau en attendant la prochaine visite...
    localStorage.setItem('#span1',valDepart);
    // Affichage dans la page
    document.getElementById('span1').innerHTML = valDepart;

    
    })
  }  
  
if(crossx){
  crossx.addEventListener('click', () => {
    valDepart = parseInt(valDepart);
    valDepart--;
    
    localStorage.setItem('#span1',valDepart);
    
    document.getElementById('span1').innerHTML = valDepart;
  })
}
  
if(buttonlocal) {
    buttonlocal.addEventListener('click', () => {
      localStorage.clear();
  })
} 

