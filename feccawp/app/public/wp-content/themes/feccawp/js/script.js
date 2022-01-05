
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
    }
    else{
      $(".nav-item").children('ul').removeClass('open');
      $(this).children('ul').addClass('open');
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