const icon = document.querySelector('.icon');

const search = document.querySelector('.search');

const clear = document.querySelector('.clear');

const text = document.querySelector('#mysearch');

const topText = document.querySelectorAll(".RefNav");

let topNav = document.querySelectorAll(".TextNav");

window.addEventListener('scroll', () =>
{
    const scrollTop = document.scrollingElement.scrollTop;

    if(window.innerWidth > 947) {
    
        if(scrollTop > 10)
        {
            topNav.forEach(back => {
                back.classList.add("background");
            })
            topText.forEach(color => {
                color.classList.add("color");
            })
        }  else {
            topNav.forEach(back => {
                back.classList.remove("background");
            })
            topText.forEach(color => {
                color.classList.remove("color");
            })
        }
        }   else if (window.innerHeight < 947 && scrollTop > 1) {
            topNav.forEach(back => {
        back.classList.add("background");
            })
        }
       
});



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




