jQuery(document).ready(function(){
  jQuery('.news-title').matchHeight({ byRow: true, property: 'height', target: null, remove: false });
  jQuery('.news-desc').matchHeight({ byRow: true, property: 'height', target: null, remove: false });
  jQuery('.news-each .news-intro').matchHeight({ byRow: true, property: 'height', target: null, remove: false });
  jQuery('.news-each h2').matchHeight({ byRow: true, property: 'height', target: null, remove: false });

  _map = jQuery('#maps');

  if(_map.length > 0){
    ymaps.ready(init);
    var myMap;

    function init(){
      myMap = new ymaps.Map("maps", {
        center: [55.812438,37.532196],
        zoom: 16
      });
      myPlacemark = new ymaps.Placemark([55.812438,37.532196], {

      }, {
        iconLayout: 'default#image',
        iconImageHref: '/images/contact-logo.svg',
        iconImageSize: [160, 120],
        iconImageOffset: [-100, -120]
      });

      myMap.geoObjects.add(myPlacemark);


    }
  }


  jQuery('.search-button').click(function(e){
    e.preventDefault();
    jQuery('#mod-search-searchword, .search-button').addClass('active');

    jQuery('.search-button.active').click(function(){
      jQuery('form.search').submit();
    })
  })


});
