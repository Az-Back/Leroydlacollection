const post = document.getElementById("postal");

// Fonction qui empeche d'ecrire + de 5 caractères dans l'input nommmé postal

// Function that prevents writing more than 5 characters in the input named postal

post.oninput = function () {
    if (this.value.length > 1) {
        this.value = this.value.slice(0,5); 
    }
}