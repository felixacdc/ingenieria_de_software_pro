$(document).ready(function () {
    $('.nextButton').click(function () {
        alert($(this).attr("href"));
        $(".nav-tabs li").removeClass('active');
        $("#two").addClass('active');
    });
});
