$(document).ready(function(){// busca si tiene cambios la pagina

    $(document).on("keyup","#filtro",function(){// llamo el evento keyup
        var buscar=$(this).val();// almacena le valor del filter
        var url=$(this).attr('data-url');

        $.ajax({
            url:url,
            data:"buscar="+buscar,
            type:"POST",
            success:function(datos){
                $("tbody").html(datos);
            }
        });

    });
    $(document).on("click","#cambioImagen",function(){
        var ruta_imagen=$("#imagen").attr('src');
        $("#contenedorImagen").html("<input type='file' name='imagen'>");
        $("#contenedorImagen").append("<input type='hidden' name='imagen_vieja' value='"+ruta_imagen+"'>");
    });


    $(document).on("keyup",".validar", function(){
        var texto=$(this).val();
        var noValidos="!¡?¿#$%&@/()=|°¬;,:.-_{}[]+*~";
        var cont=0;

        for(let i = 0; i < texto.length; i++){
            for(let k = 0; k < noValidos.length; k++){
                if(texto[i]==noValidos[k]){
                    cont++;
                }
            }
        }
        if (cont>0){
            $(this).removeClass("is-valid");
            $(this).addClass("is-invalid");            
        }else{
            $(this).removeClass("is-invalid");
            $(this).addClass("is-valid");  
        }
    });

});