/**
 * Created by Pavel Kizernis on 16.09.2015.
 */

$(document).ready(function() {

    //slider
    $('.slider-tab').mouseover(function(){
        $('.slider-tab').removeClass('active');
        $(this).addClass('active');
        $('.slider-image img').removeClass('active');
        $('#' + $(this).data('target')).addClass('active');
    });
});