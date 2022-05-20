let describe = document.querySelectorAll(".description");

function truncateString(str, num) {
    return str.length > num ? str = str.slice(0, num) + " " + "..." : str;
};

describe.forEach(describe => 
{
    describe.innerHTML = truncateString(describe.innerHTML, 20);
})