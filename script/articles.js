// Script permettant de mettre 3 petits points quand celle-ci depasse 20 caractères pour la description des articles

// Script to put 3 small points when it exceeds 20 characters for description of items

let describe = document.querySelectorAll(".description");

function truncateString(str, num) {
    return str.length > num ? str = str.slice(0, num) + " " + "..." : str;
};

describe.forEach(describe => 
{
    describe.innerHTML = truncateString(describe.innerHTML, 20);
})