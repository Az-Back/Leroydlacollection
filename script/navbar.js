let menutoggle = document.querySelector('.toggle');
let navmenu = document.querySelector('.highlist');

menutoggle.addEventListener('click', () =>
{
  menutoggle.classList.toggle('active');
  navmenu.classList.toggle('activeNav');
});