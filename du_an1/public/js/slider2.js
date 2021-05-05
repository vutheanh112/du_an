$(document).ready(function() {
    var stt = 0;
    staring = $("img.slider:first").attr("stt");
    endImg = $("img.slider:last").attr("stt");
    $("img.slider").each(function() {
        if ($(this).is(':visible'))
            stt = $(this).attr('stt');
    })
    $("#prev").click(function() {
        if (stt == endImg) {
            stt = -1
        }
        prev = ++stt;
        $("img.slider").hide();
        $("img.slider").eq(prev).show();
        $("#slider li").removeClass('active');
        $("#slider li").eq(prev).addClass('active');
    });
    $("#next").click(function() {
        if (stt == 0) {

            stt = endImg;
            next = stt++;
        }
        next = --stt;
        $("img.slider").hide();
        $("img.slider").eq(next).show();
        $("#slider li").removeClass('active');
        $("#slider li").eq(next).addClass('active');
    });
    setInterval(function() {
        $("#next").click();
    }, 2000);




});