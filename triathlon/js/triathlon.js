NS = function($){
    main = {};
    main.init = init;

    $(function(){
       init();
    });

    function init(){
        $('.colorbox').colorbox({
            maxWidth:'50%'
        });
    }

}(jQuery);