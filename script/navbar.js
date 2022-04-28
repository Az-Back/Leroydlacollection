const icon = document.querySelector('.icon');

const search = document.querySelector('.search');

const clear = document.querySelector('.clear');

const text = document.querySelector('#mysearch');

  // toggle menu script 
  $('.toggle').click(function(){
      $('.List').toggleClass("active");
      $('.toggle').toggleClass("active");
  });

clear.addEventListener('click', () => {
    text.value = '';
})

icon.onclick = function()
{
    search.classList.toggle('active')
}




