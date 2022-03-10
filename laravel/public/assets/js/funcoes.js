$(function () {
    //Menu mobile
    $(".mobmenu").click(function () {
        $(".menu").slideToggle();
        $(this).toggleClass("active");
        return false;
    });
});
$(".mascara-data").mask("00/00/0000");
