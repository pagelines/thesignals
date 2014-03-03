!function ($) {
    $(document).ready(function() {

        $('.starfield-container').each( function(){

            var theContainer = $(this)

            theContainer.imagesLoaded( function(){

                theIMG = theContainer.find('.starfield-image')

                var theHeight = theIMG.height()
                ,   theWidth  = theIMG.width()

                theIMG
                    .css('margin-left', theWidth/2 * -1)
                    .css('margin-top', theHeight/2 * -1)
                    .addClass('show-me')
                

            })

        })
        

    })
}(window.jQuery);