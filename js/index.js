$(document).ready(function() {
		$(document).delegate('.open', 'click', function(event){
			$(this).addClass('oppenned');
			event.stopPropagation();
		})
		$(document).delegate('body', 'click', function(event) {
			$('.open').removeClass('oppenned');
		})
		$(document).delegate('.cls', 'click', function(event){
			$('.open').removeClass('oppenned');
			event.stopPropagation();
		});
	});


/**
 * Created by Kupletsky Sergey on 16.09.14.
 *
 * Hierarchical timing
 * Add specific delay for CSS3-animation to elements.
 */

(function($) {
    var speed = 2000;
    var container =  $('.display-animation');
    container.each(function() {
        var elements = $(this).children();
        elements.each(function() {
            var elementOffset = $(this).offset();
            var offset = elementOffset.left*0.8 + elementOffset.top;
            var delay = parseFloat(offset/speed).toFixed(2);
            $(this)
                .css("-webkit-animation-delay", delay+'s')
                .css("-o-animation-delay", delay+'s')
                .css("animation-delay", delay+'s')
                .addClass('animated');
        });
    });
})(jQuery);

/**
 * Created by Kupletsky Sergey on 04.09.14.
 *
 * Ripple-effect animation
 * Tested and working in: ?IE9+, Chrome (Mobile + Desktop), ?Safari, ?Opera, ?Firefox.
 * JQuery plugin add .ink span in element with class .ripple-effect
 * Animation work on CSS3 by add/remove class .animate to .ink span
*/

(function($) {
    $(".ripple-effect").click(function(e){
        var rippler = $(this);

        // create .ink element if it doesn't exist
        if(rippler.find(".ink").length == 0) {
            rippler.append("<span class='ink'></span>");
        }

        var ink = rippler.find(".ink");

        // prevent quick double clicks
        ink.removeClass("animate");

        // set .ink diametr
        if(!ink.height() && !ink.width())
        {
            var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
            ink.css({height: d, width: d});
        }

        // get click coordinates
        var x = e.pageX - rippler.offset().left - ink.width()/2;
        var y = e.pageY - rippler.offset().top - ink.height()/2;

        // set .ink position and add class .animate
        ink.css({
            top: y+'px',
            left:x+'px'
        }).addClass("animate");
    })
})(jQuery);


$(function(){
  $.easing.def = 'easeOutBack';
  
  $('.tile').click(function(){
    $('.tile').animate({'opacity':0},300)
    setTimeout(animate(),300)
  })
  animate()
  
  function animate(){
    var icons = [
  'fontawesome-adjust',
  'fontawesome-asterisk',
  'fontawesome-ban-circle',
  'fontawesome-beaker',
  'fontawesome-beer',
  'fontawesome-bell',
  'fontawesome-bullhorn',
  'fontawesome-calendar',
  'fontawesome-camera',
  'fontawesome-cog',
  'fontawesome-coffee', 
  'fontawesome-cog',
  'fontawesome-comments',
  'fontawesome-heart',
  'fontawesome-home',
  'fontawesome-folder-open'
  ]
  
  $('.tile').each(function(i){
    time=200+(100*i)
    icon=Math.floor((Math.random()*16));
    $(this).css({
      'top':'-200px',
      'left':'-200px',
    }).delay(time).animate({
      'opacity':'1',
      'top':'0',
      'left':'0'
    },700).addClass(icons[icon])
  })
  }
})