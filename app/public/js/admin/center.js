<<<<<<< HEAD
$(document).ready(function () {

});

function edit(btn) {
    $('#editForm').attr('action', $(btn).data('url'));
=======
var urlActive = '/admin';

/*
* Funcion para cargar contenido por medio de ajax
*/

$('.editModal').on('click', function(e){
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
>>>>>>> 02f4521dfd123663d84a3e675194aac05b51ed5c
}
