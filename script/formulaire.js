const post = document.getElementById("postal");
post.oninput = function () {
    if (this.value.length > 1) {
        this.value = this.value.slice(0,5); 
    }
}