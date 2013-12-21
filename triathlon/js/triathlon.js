NS = function($){
    main = {};
    main.init = init;
    main.positionContentAreas = positionContentAreas;

    $(function(){
       init();
    });

    function init(){
        $('.colorbox').colorbox({
            maxWidth:'50%'
        });

        jQuery(window).load(function(){
            positionContentAreas();
            $(window).on('resize', positionContentAreas);
        });

    }

    function positionContentAreas(){
        if (screen.width){
            var screenWidth = screen.width;
        }
        var windowWidth = $(window).innerWidth();
        screenWidth = Math.min(screenWidth, windowWidth);
        var $contentAreas = $('.content-widget');
        var totalContentWidth = 0;
        $contentAreas.each(function(index, element){
            totalContentWidth += $(element).outerWidth();
        });
        if (totalContentWidth > screenWidth){
            if (totalContentWidth < screenWidth * 1.5){
                var horizontalGroups = 1;
            } else {
                var horizontalGroups = Math.ceil($contentAreas.length / 3);
            }

            var row = 0;
            var column = 1;
            var rowWidth = $contentAreas.eq(0).outerWidth() + $contentAreas.eq(1).outerWidth() + $contentAreas.eq(2).outerWidth();
            var scaleRatio = (screenWidth - screenWidth *.1) / rowWidth;
            var rowOneScaleRatio = scaleRatio;
            $contentAreas.each(function(index, element){
                var $element = $(element);
                var width = $element.width();
                var $images = $element.find('img');
                $images.each(function(index, image){
                   $(image).width($(image).width() * scaleRatio);
                });
                var $headers = $element.find('h1, h2, h3');
                $headers.each(function(index, header){
                    var $header = $(header);
                    $header.css('font-size', Number($header.css('font-size').replace('px', '')) * scaleRatio + 'px');
                });
                $element.width(width * scaleRatio);
                if (column == 3){
                    column = 1;
                    row++;
                    rowWidth = $contentAreas.eq(0 + (row * 3)).outerWidth() + $contentAreas.eq(1 + (row * 3)).outerWidth() + $contentAreas.eq(2 + (row * 3)).outerWidth();
                    scaleRatio = (screenWidth - screenWidth *.1) / rowWidth;
                    if (scaleRatio > 1.2){
                        scaleRatio = 1.2;
                    }
                } else {
                    column++;
                }
            });
            var $logo = $('#Logo');
            $logo.width($logo.width() * rowOneScaleRatio);
        }
    }

}(jQuery);