$(document).ready(function () {
    $('.thumb1').on('click', function () {
        $(this).toggleClass('thumb2');
    });
    $('.thumb2').on('click', function () {
        $(this).removeClass('thumb2');
        $(this).addClass('thumb1');
    });
});