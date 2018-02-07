$(function() {
  $('.btn-menu').on('click', function(e) {
    e.preventDefault();
    $('.menu').slideToggle();
  });
});

$(window).resize (function() {
  let w = $(window).width();
  if(w > 767 ) {
    $('.menu').removeAttr('style');
  }
}); 

const hasChild = document.querySelectorAll('.menu-item-has-children > a');
for (let i = 0; i < hasChild.length; i++) { 
	let iconSortDown = document.createElement('i');
	hasChild[i].appendChild(iconSortDown);
	iconSortDown.classList.add('fas', 'fa-sort-down');
}