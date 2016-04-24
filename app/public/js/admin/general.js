var urlActive = '/admin';

/*
* Funcion para cargar contenido por medio de ajax
*/

$('.loadModal').on('click', function(e){
    e.preventDefault();

    $("#containerBase").html('<h2 class="text-center">Cargando ....</h2>');
    $(".titleEdit").text($(this).data('title'));

    var url = $(this).data('url');
    window.urlActive = url;
    loadContent(url);
});

/*
* Funcion para cargar contenido
*/
function loadContent(url){
   $('#containerBase').load('/admin/'+url);
}

$(document).ready(function() {

    $(".alert").fadeOut(7000);

    $("#element").introLoader({
        animation: {
            name: 'cssLoader',
            options: {
                exitFx:'slideUp',
                ease: "easeInOutCirc",
                style: 'ocean',
                delayBefore: 1000,
                exitTime: 500
            }
        }
    });
});
