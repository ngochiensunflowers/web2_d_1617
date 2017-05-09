
$(document).ready(function () {
    var original_src = '';
    $('.item img').mouseenter(function () {
        original_src = $(this).attr('src');
        $(this).attr('src', $(this).attr('data-src'));
    });
    $('.item img').mouseleave(function () {
        $(this).attr('src', original_src);
    });
});
