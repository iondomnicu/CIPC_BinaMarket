(function($){
    $(function(){
        $(".open-debug").on("click", function(){
            $(this).next(".dump").toggleClass('hidden');
        });
    });
})(jQuery);