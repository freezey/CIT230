NS = function($){
    main = {};
    main.init = init;

    $(function(){
       init();
    });

    function init(){
        var screenWidth = $('body').width();
        var $logo = $('#Logo');
        if (screenWidth > 800){
            $logo.prop('src', $logo.data('src-base') + '_large' + $logo.data('src-ext'));
        }

        $('.colorbox').colorbox({
            maxWidth:'50%'
        });
    }

}(jQuery);