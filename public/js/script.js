$(document).ready(function(){
    document.getElementById('contenedor').style.display = 'none';
    document.getElementById('carga_suelta').style.display = 'none';
    $("#t_mercancia").change(function(){
        var t_mercancia = $("#t_mercancia").val();
        console.log(t_mercancia);
        if(t_mercancia == '1'){
            document.getElementById('contenedor').style.display = 'block';
            document.getElementById('carga_suelta').style.display = 'none';
        }else if(t_mercancia == '2'){
            document.getElementById('contenedor').style.display = 'none';
            document.getElementById('carga_suelta').style.display = 'block';
        }
    });
    //agregar campos a mi div de contenedor
    $("#add").click(function(){
        console.log("hola");
    });
});



