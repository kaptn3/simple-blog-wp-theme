const menu = document.querySelector('.nav');
const btnUp = document.querySelector('.btn-up');

window.onscroll = () => {
  let scrolled = window.pageYOffset;
  if (scrolled > 100) {
      menu.classList.add('fixed');
  } else {
    menu.classList.remove('fixed');
  }  
  if (scrolled > document.documentElement.clientHeight - 100) {
    btnUp.style.display = 'block';
  } else {
    btnUp.style.display = 'none';
  }  
}

$(document).ready(function(){  
  $('.btn-up').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
   	return false;
  }); 
});