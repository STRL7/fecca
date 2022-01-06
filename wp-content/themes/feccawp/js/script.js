
$(".flipper").click(function() {
    var target = $( event.target );
    if ( target.is("a") ) {
      //follow that link
      return true;
    } else {
      $(this).toggleClass("flip");
    }
    return false;
  });

 /* $(".accordion-item-my").ready(function() {
    $( ".accordion-button-my" ).click( function() {
        $(".accordion-button-img").toggleClass('rotate');
      });
});*/



$(".accordion-button-my").click(function() {
  var target = $( event.target );
  if ( target.is("a") ) {
    //follow that link
    return true;
  } else {
    $(this).find(".accordion-button-img").toggleClass("rotate");
  }
  return false;
});



$(".nav-item").click(function() {
  var target = $( event.target );
    if($(this).children('ul').hasClass('open')) {
      $(this).children('ul').removeClass('open');
      $(this).find(".nav-menu-icon").removeClass("rotate"); 
    }
    else{
      $(".nav-item").children('ul').removeClass('open');
      $(this).children('ul').addClass('open');
      $(this).find(".nav-menu-icon").addClass("rotate"); 
    }
});


jQuery(function($){
  $(document).mouseup(function (e){ // событие клика по веб-документу
    var div = $(".nav-item"); // тут указываем ID элемента
    if (!div.is(e.target) // если клик был не по нашему блоку
        && div.has(e.target).length === 0) { // и не по его дочерним элементам
          $(".nav-item").children('ul').removeClass('open');
    }
  });
});

$(".drop").hover(function() {
  var target = $( event.target );

    $(this).children('ul').toggleClass("open");
    $(this).find(".nav-menu-icon").toggleClass("rotate");
  return false;
});



jQuery('img.svg').each(function(){
  var $img = jQuery(this);
  var imgID = $img.attr('id');
  var imgClass = $img.attr('class');
  var imgURL = $img.attr('src');

  jQuery.get(imgURL, function(data) {
      // Get the SVG tag, ignore the rest
      var $svg = jQuery(data).find('svg');

      // Add replaced image ID to the new SVG
      if(typeof imgID !== 'undefined') {
          $svg = $svg.attr('id', imgID);
      }
      // Add replaced image classes to the new SVG
      if(typeof imgClass !== 'undefined') {
          $svg = $svg.attr('class', imgClass+' replaced-svg');
      }

      // Remove any invalid XML tags as per http://validator.w3.org
      $svg = $svg.removeAttr('xmlns:a');

      // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
      if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
          $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
      }

      // Replace image with new SVG
      $img.replaceWith($svg);

  }, 'xml');

});