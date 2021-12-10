$(document).ready(function (){
    let video2 = $('#singlePost-video1')[0];
    let close2 = $('.single-close');
    $("#singlePost-play1").click(function (){
        $('#singlePost-video1').attr('controls', 'controls');
        $('.single-button').css("display","none");
        close2.animate({
            opacity: 1,
        }, 500);
        video2.play();
    })
    close2.click(function (){
        video2.pause();
        $('#singlePost-video1').removeAttr('controls');
        close2.animate({
            opacity: 0,
        }, 500);
        $('.single-button').css("display","flex");
    })
})