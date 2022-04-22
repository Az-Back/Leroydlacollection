const icon = document.querySelector('.icon');

const search = document.querySelector('.search');

const clear = document.querySelector('.clear');

const text = document.querySelector('#mysearch');


$(document).ready(function(){
  // script pour le scroll de la nav bar
  $(window).scroll(function(){
      if(this.scrollY > 20){
          $('.Navbar').addClass("sticky");
      }else{
          $('.Navbar').removeClass("sticky");
      }
      if(this.scrollY > 500){
          $('.scrollupbtn').addClass("show");
      }else{
          $('.scrollupbtn').removeClass("show");
      }
  });

  

  // toggle menu script 
  $('.toggle').click(function(){
      $('.List').toggleClass("active");
      $('.toggle').toggleClass("active");
  });

});

clear.addEventListener('click', () => {
    text.value = '';
})

icon.onclick = function()
{
    search.classList.toggle('active')
}




