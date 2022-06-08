const price = document.getElementById("price");
price.oninput = function () {
    if (this.value.length > 1) {
        this.value = this.value.slice(0,7); 
    }
}