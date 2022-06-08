const price = document.getElementById("price");

// Fonction qui empeche d'ecrire + de 7 caractères dans l'input nommmé price

// Function that prevents writing more than 7 characters in the input named price

price.oninput = function () {
    if (this.value.length > 1) {
        this.value = this.value.slice(0,7); 
    }
}