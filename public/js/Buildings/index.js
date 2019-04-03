$(document).ready(function() {
    var banner = $("#title-banner");
    TweenMax.from(banner, 1, {
        top: -90,
    });

    $('.open-modal').click(function() {
        $('#code_id').val($(this).data('code'));
    });

    $('.modal-activate').click(function() {
        $('#code_activate').val($(this).data('code'));
    });

    $('.modal-delete').click(function() {
        $('#code_delete').val($(this).data('code'));
    });
});
