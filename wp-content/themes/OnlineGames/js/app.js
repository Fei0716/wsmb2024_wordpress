jQuery(document).ready(function($){
    $('a').attr('data-pjax','');

    $(document).pjax('a[data-pjax]','#wrapper',{
        fragment: "#wrapper",
        timeout: 5000,
    });

    $(document).on('pjax:start',function(){
        $('#wrapper').removeClass('pjax-end');
        $('#wrapper').addClass('pjax-start');


        $('body').prepend(`
            <div class="loading-container">
                <div class="loading-animation"></div>
                <h3 class="loading-caption">Epic Games, Epic Moments</h3>
            </div>
        `)
    });

    $(document).on('pjax:end',function(){
        $('#wrapper').removeClass('pjax-start');
        $('#wrapper').addClass('pjax-end');

        $('.loading-container').fadeOut(200);
        $('a').attr('data-pjax','');
    });
});