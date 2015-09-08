$(function(){

    var $window = $(window);
    
    $('section[data-type="parallax"]').each(function(){
    
        var $this = $(this);

        $window.scroll(function(){

            // Get current window position. Divide by value of data-speed-factor custom html element
            // If speed-factor -> inf, image behaves as if fixed
            // If speed-factor = 1, image appears as scroll
            // background image scrolls up page by factor of <speed-factor> less than foreground
            var yPos = -1 * $window.scrollTop() / $this.data('speed-factor');
            
            // Calculate new background position
            var coordinate = '0 ' + yPos + 'px';

            // Move background position by applying css style
            $this.css({backgroundPosition : coordinate});
        });
    });
});


