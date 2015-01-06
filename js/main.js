/**
 * Place your JS-code here.
 */
$(document).ready(function(){
  'use strict';
  
  // define plugin

  (function($) {
    $.fn.changeColor = function() {
      var iId = setInterval(function() {setColor();}, 2000);

      var setColor = function() {
        $('.change-colors').each(function(){
          $(this)
            .css('background-color', randomizeColor())
            .click(function(){
              clearInterval(iId);
            })
        });
      };
    };

  }) (jQuery);

  $('.change-colors').click(function(){
    $(this).changeColor();
  });

  // Helper function to randomize hex numbers.
  function randomizeColor() {
    var str, 
    colors = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f'];
    str = colors[(Math.floor(Math.random() * 15) + 1)];
    str += colors[(Math.floor(Math.random() * 15) + 1)];
    str += colors[(Math.floor(Math.random() * 15) + 1)];
    str += colors[(Math.floor(Math.random() * 15) + 1)];
    str += colors[(Math.floor(Math.random() * 15) + 1)];
    str += colors[(Math.floor(Math.random() * 15) + 1)];
    return '#' + str;
  }

}); // document ready end. 



