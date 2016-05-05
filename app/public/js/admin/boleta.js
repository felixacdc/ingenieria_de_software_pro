$(document).ready(function () {
    $('.nextButton').click(function () {
        var id = $(this).data( "id" );
        $(".nav-tabs li").removeClass('active');
        $("#" + id).addClass('active');
    });
});
