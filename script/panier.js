let btn = document.querySelector(".panieradd");
console.log(valDepart);
btn.addEventListener('click', () => {
// Détection

if(valDepart!=null) {
    valDepart = parseInt(valDepart);
  } else {
    valDepart = 0;
  }
    
    // Incrémentation
    valDepart++;
    console.log(valDepart);
    // Stockage à nouveau en attendant la prochaine visite...
    localStorage.setItem('#span1',valDepart);
    // Affichage dans la page
    document.getElementById('span1').innerHTML = valDepart;
    })
