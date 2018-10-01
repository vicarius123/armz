jQuery(document).ready(function(){
  _me_l = jQuery('#main_menu .item-104').position().left;
  jQuery('.inner-menu').css('padding-left', _me_l);
  jQuery('.inner-menu').css('padding-right', _me_l);
  var left_row = jQuery('.left-row').length;
  if(left_row > 0){
    jQuery('body').addClass('inner-page');
    jQuery('.header').addClass('fixed');
    jQuery('.logo').attr('src', '/images/logo2.svg');
  }
  var _main = jQuery('.main-page-block').length;
  console.log(_main);
  if(_main > 0){
    jQuery('header').mouseenter(function(){
      jQuery('body').addClass('inner-page');
      jQuery('.logo').attr('src', '/images/logo2.svg');
    }).mouseleave(function(){
      jQuery('body').removeClass('inner-page');
      jQuery('.logo').attr('src', '/images/logo.svg');
    })


  }else{
    jQuery('.main_menu li').mouseenter(function(){
      jQuery('#shadow').addClass('active')
    }).mouseleave(function(){
      jQuery('#shadow').removeClass('active')
    })
  }

  jQuery(window).resize(function(){
    _w = jQuery('.wrapper').width();
    jQuery('.inner-menu').width(_w);
    _me_l = jQuery('#main_menu .item-104').position().left;
    jQuery('.inner-menu').css('padding-left', _me_l);
    jQuery('.inner-menu').css('padding-right', _me_l);
  })



  jQuery('#accordion').on('show.bs.collapse', function (e) {
    jQuery('#accordion').toggleClass('active');
    _target = e.target;
    jQuery(_target).prev().addClass('active')
    console.log(jQuery(_target).prev())
  });

  jQuery('#accordion').on('shown.bs.collapse', function (e) {
    _target = e.target;
    _id = jQuery(_target).attr('id');

    console.log(jQuery('#'+_id).offset().top);
    $("html, body").animate({
        scrollTop: jQuery('#'+_id).offset().top-200
    }, 100);
  });

  jQuery('#accordion').on('hide.bs.collapse', function (e) {
    jQuery('#accordion').toggleClass('active');
    _target = e.target;
    jQuery(_target).prev().removeClass('active')
    console.log(jQuery(_target).prev())
  });

  _map = jQuery('#maps');

  if(_map.length > 0){
    ymaps.ready(init);
    var myMap;

    function init(){
      myMap = new ymaps.Map("maps", {
        center: [55.746527, 37.659245],
        zoom: 18
      });
      myPlacemark = new ymaps.Placemark([55.746527, 37.659245], {

      }, {
        iconLayout: 'default#image',
        iconImageHref: '/images/map_ico.svg',
        iconImageSize: [133, 91],
        iconImageOffset: [-75, -91]
      });

      myMap.geoObjects.add(myPlacemark);


    }
  }

  jQuery('.vacancy-title h2').matchHeight({ byRow: true, property: 'height', target: null, remove: false });
  jQuery('.vacancy-desc').matchHeight({ byRow: true, property: 'height', target: null, remove: false });
  jQuery('.vacancy-logo').matchHeight({ byRow: true, property: 'height', target: null, remove: false });





})
