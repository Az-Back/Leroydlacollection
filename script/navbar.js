const icon = document.querySelector('.icon');

const search = document.querySelector('.search');

const clear = document.querySelector('.clear');

const text = document.querySelector('#mysearch')

clear.addEventListener('click', () => {
    text.value = '';
})

icon.onclick = function()
{
    search.classList.toggle('active')
}


let menutoggle = document.querySelector('.toggle');
let navmenu = document.querySelector('.highlist');

menutoggle.addEventListener('click', () =>
{
  menutoggle.classList.toggle('active');
  navmenu.classList.toggle('activeNav');
});