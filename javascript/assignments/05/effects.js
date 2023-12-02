$(function(){
    var $li = $('li');
    $li.hide().each(function(index) {
    $(this).delay(700 * index).fadeIn(700);
    });

    $('li').on('click', function() {
        $(this).animate({
          opacity: 0.0,
          paddingLeft: '+=120'
        }, 2500, function() {
          $(this).remove();
        });
      });
});