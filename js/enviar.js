$(document).ready(function(){
  $(".formulario-contacto").bind("submit",function(){

    $.ajax({
       type: $(this).attr("method"),
       url: $(this).attr("action"),
       data: $(this).serialize(),
       success:function(respuesta){
           if(respuesta=="ok"){
            $("#alerta").removeClass("hide").removeClass("alert-danger").removeClass("alert-success").addClass("alert-success");
            $(".respuesta").html("Enviado:");
            $(".mensaje-alerta").html("El mensaje se ha sido enviado correctamente.");
            $('.formulario-contacto')[0].reset();
           }else{
            $("#alerta").removeClass("hide").removeClass("alert-danger").removeClass("alert-success").addClass("alert-danger");
        $(".respuesta").html("Error al enviar:");
        $(".mensaje-alerta").html("El mensaje no se ha  enviado .");

           }
       
       },
       error:function(){
        
        $("#alerta").removeClass("hide").removeClass("alert-danger").removeClass("alert-success").addClass("alert-danger");
        $(".respuesta").html("Error al enviar:");
        $(".mensaje-alerta").html("El mensaje no se ha  enviado .");

       }



    });

return false;
  });
});