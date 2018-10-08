jQuery(document).ready(function(){
  _me_l = jQuery('#main_menu > li:first-child').position().left;
  jQuery('.inner-menu').css('padding-left', _me_l);
  jQuery('.inner-menu').css('padding-right', _me_l);


  var left_row = jQuery('.left-row').length;
  if(left_row > 0){
    jQuery('body').addClass('inner-page');
    jQuery('.header').addClass('fixed');
    jQuery('.logo').attr('src', '/images/logo2.svg');
  }
  _geo = jQuery('.page-geography').length;
  if(_geo > 0){
    jQuery('body').addClass('inner-page');
    jQuery('.header').addClass('fixed');
    jQuery('.logo').attr('src', '/images/logo2.svg');
    jQuery('.layout-wrapper ').addClass('mtop');
    jQuery('.breadcrumbs').addClass('wrapper')
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
    jQuery("html, body").animate({
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


  /* Vacancies function*/



  jQuery('.chief-ctn').click(function(e){
    e.preventDefault();
    _mm = jQuery('.chiefs-ctn').offset().top-150;

    _m = '-'+_mm;
    console.log(_m);
    jQuery('.chiefs-ctn').css('margin-top', _m+'px')
    setTimeout(function(){
      jQuery('.chief-list').css('opacity', 0);
    }, 500)
    jQuery("html, body").animate({
      scrollTop: 0
    }, 100);

    _id = jQuery(this).data('id');

    jQuery('.chiefs-ctn').addClass('active');
    jQuery('.carousel-item').removeClass('active')
    jQuery('.item-ch-'+_id).addClass('active')
  });

  jQuery('.close-panel').click(function(e){
    e.preventDefault();
    jQuery('.chief-list').css('opacity', 1);
    jQuery('.chiefs-ctn').removeClass('active');
    setTimeout(function(){
      jQuery('.carousel-item').removeClass('active');
      jQuery('.chiefs-ctn').css('margin-top', 0)
    }, 500)
  });

  //News filter//

  if(jQuery('.all-news').length > 0){
    _news_year = jQuery('#news-year').val();
    console.log(_news_year);
    _all_news = jQuery('.news-each')
    _all_news.each(function(v, k){
      _item = jQuery(k);
      if(_item.data('year') != _news_year){
        _item.hide();
      }
    })
    //*changing year//
    jQuery('#news-year').change(function(){
      _val = jQuery(this).val();
      _month = jQuery('#news-month').val();
      _all_news = jQuery('.news-each')
      _all_news.each(function(v, k){
        _item = jQuery(k);
        if(_month == 0){
          if(_item.data('year') == _val){
            _item.fadeIn();
          }else{
            _item.hide();
          }
        }else{
          if( (_item.data('year') == _val) && (_item.data('month')==_month)){
            _item.fadeIn();
          }else{
            _item.hide();
          }
        }

      })
    })

    jQuery('#news-month').change(function(){
      _val = jQuery(this).val();
      _news_year = jQuery('#news-year').val();
      console.log(_news_year);
      _all_news = jQuery('.news-each')
      _all_news.each(function(v, k){
        if(_val != 0){
          _item = jQuery(k);
          if((_item.data('year')==_news_year) && (_item.data('month')==_val)){
            _item.fadeIn();
          }else{
            _item.hide();
          }
        }else{
          if(_item.data('year') == _news_year){
            _item.fadeIn();
          }
        }
      })
    })
  }

  //MAP2//
  _data = {
      "type": "FeatureCollection",
      "features": [
          {"type": "Feature", "id": 0, "geometry": {"type": "Point", "coordinates": [55.946078, 63.028486]}, "properties": {"balloonContent": "<b>ПАО «ППГХО»</b><br>674673, Забайкальский край, г. Краснокаменск"}},
          {"type": "Feature", "id": 1, "geometry": {"type": "Point", "coordinates": [50.093720, 118.033256]}, "properties": {"balloonContent": "<b>ПАО «Далур»</b><br>641750, Курганская обл., Далматовский район, с. Уксянское, ул. Ленина, 42"}},
          {"type": "Feature", "id": 2, "geometry": {"type": "Point", "coordinates": [52.033973, 113.499432]}, "properties": {"balloonContent": "<b>ПАО «Хиагда»</b><br>672002, Забайкальский край, г. Чита, ВОХ 02086"}},
          {"type": "Feature", "id": 3, "geometry": {"type": "Point", "coordinates": [58.973159, 126.273107]}, "properties": {"balloonContent": "<b>ПАО «Эльконский ГМК»</b><br>678955, Республика Саха (Якутия), Алданский район, г. Томмот, ул. Укуланская, д.51"}},
          {"type": "Feature", "id": 4, "geometry": {"type": "Point", "coordinates": [58.602441, 125.332544]}, "properties": {"balloonContent": "<b>ПАО «Лунное»</b><br>678900, Республика Саха (Якутия),г. Алдан, 26 Пикет, № 12"}},
          {"type": "Feature", "id": 5, "geometry": {"type": "Point", "coordinates": [52.044338, 113.243835]}, "properties": {"balloonContent": "<b>ПАО «УДК «Горное»</b><br>672018, Забайкальский край, г. Чита, Дворцовский тракт, д.50"}},
          {"type": "Feature", "id": 6, "geometry": {"type": "Point", "coordinates": [55.746527, 37.659245]}, "properties": {"balloonContent": "<b>ПАО «Первая горнорудная компания»</b><br>109004, Москва, Б. Дровяной переулок, д. 22"}},
          {"type": "Feature", "id": 7, "geometry": {"type": "Point", "coordinates": [55.744693, 37.657907]}, "properties": {"balloonContent": "<b>ООО «АРМЗ Сервис»</b><br>109004, Москва, Большой Дровяной переулок, дом 12, стр. 3"}},
          {"type": "Feature", "id": 8, "geometry": {"type": "Point", "coordinates": [55.748716, 37.657682]}, "properties": {"balloonContent": "<b>ПАО «РУСБУРМАШ»</b><br>109004, Москва, ул. Земляной Вал, д.59, стр.2"}},
          {"type": "Feature", "id": 9, "geometry": {"type": "Point", "coordinates": [55.646563, 37.670339]}, "properties": {"balloonContent": "<b>ПАО «ВНИПИпромтехнологии»</b><br>115409, Москва, Каширское шоссе, 33"}}
      ]
  };


  if(jQuery('.map2').length > 0 ){
    ymaps.ready(init);

    function init () {
        var myMap = new ymaps.Map('map2', {
                center: [55.946078, 63.028486],
                zoom: 4
            }, {

            }),
            objectManager = new ymaps.ObjectManager({
                // Чтобы метки начали кластеризоваться, выставляем опцию.
                clusterize: true,
                geoObjectOpenBalloonOnClick: true,
                clusterOpenBalloonOnClick: false
            });

        myMap.geoObjects.add(objectManager);

        objectManager.add(_data);

        myMap.behaviors.disable('scrollZoom')

        function onObjectEvent (e) {
            var objectId = e.get('objectId');
            if (e.get('type') == 'mouseenter') {
                // Метод setObjectOptions позволяет задавать опции объекта "на лету".
                objectManager.objects.setObjectOptions(objectId, {
                    preset: 'islands#yellowIcon'
                });
            } else {
                objectManager.objects.setObjectOptions(objectId, {
                    preset: 'islands#blueIcon'
                });
            }
        }

        function onClusterEvent (e) {
            var objectId = e.get('objectId');
            if (e.get('type') == 'mouseenter') {
                objectManager.clusters.setClusterOptions(objectId, {
                    preset: 'islands#yellowClusterIcons'
                });
            } else {
                objectManager.clusters.setClusterOptions(objectId, {
                    preset: 'islands#blueClusterIcons'
                });
            }
        }

        objectManager.objects.events.add(['mouseenter', 'mouseleave'], onObjectEvent);
        objectManager.clusters.events.add(['mouseenter', 'mouseleave'], onClusterEvent);
    }

  }
  _org = jQuery('.mod-languages a').attr('href');
  console.log(_org);
  _eng = jQuery('.item-111 a');
  _rus = jQuery('.item-237 a');

  if(_eng.length > 0){
    _eng.attr('href', _org)
  }
  if(_rus.length > 0){
    _rus.attr('href', _org)
  }
})
