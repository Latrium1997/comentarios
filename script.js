
$(document).ready(function(){
    $("#enviar").on("click",function(){
        var texto=$("#comentarios").val();
        var fecha= new Date();
        var fechaComentario= "<span class='fecha'>"+fecha.getHours()+":"+fecha.getMinutes()+":"+fecha.getSeconds()+"</span>";
        var divComentarioEscrito="<div class='comentario-enviado'>";
        var divCompleto=divComentarioEscrito+texto+fechaComentario+"<img class='comentario-eliminado' src='closebutton'>"+"</img>"+"</div>";
        $("#comentarioescrito").prepend(divCompleto);

    });

});
