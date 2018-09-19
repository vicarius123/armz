jQuery(document).ready(function(){
  _me_l = jQuery('#main_menu .item-104').position().left;
  jQuery('.inner-menu').css('padding-left', _me_l);

  var left_row = jQuery('.left-row').length;
  if(left_row > 0){
    jQuery('body').addClass('inner-page');
    jQuery('.logo').attr('src', '/images/logo2.svg');
  }

  jQuery('header').mouseenter(function(){
    jQuery('body').addClass('inner-page');
    jQuery('.logo').attr('src', '/images/logo2.svg');
  }).mouseleave(function(){
    jQuery('body').removeClass('inner-page');
    jQuery('.logo').attr('src', '/images/logo.svg');
  })
})
