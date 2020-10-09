$(document).ready(smoothScrolling);

function smoothScrolling(){
    $("#menu a").on("click", displacement);
}

function displacement(){
    var section = $(this).attr("href");
    $("body, html").animate({
        scrollTop : $(section).offset().top
    }, 1000);
}