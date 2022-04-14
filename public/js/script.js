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
        }else{
            document.getElementById('contenedor').style.display = 'none';
            document.getElementById('carga_suelta').style.display = 'none';
        }
    });
    $("#add").click(function(){
        var contenedor = document.getElementById('contenedor');
        var div = document.createElement('div');
            div.setAttribute('class', 'form-group');
            div.innerHTML = '<div class="form-group"><label for="no_contenedor">Num. Contenedor</label><input type="text" class="form-control" name="no_contenedor[]" id="no_contenedor"></div><div class="form-group"><label for="no_contenedor">Tipo</label><input type="text" class="form-control" name="tipo_contenedor[]" id="tipo_contenedor"></div><div class="form-group"><label for="dimenciones">Dimenciones</label><input type="text" class="form-control" name="dimenciones[]" id="dimenciones"></div><div class="form-group"><label for="no_contenedor">Fecha de Descargo</label><input type="date" class="form-control" name="fecha_descargo[]" id="fecha_descargo"></div>';
            contenedor.appendChild(div);
    });

    document.getElementById('importacion').style.display = 'none';
    document.getElementById('exportacion').style.display = 'none';
    $("#t_operacion").change(function(){
        var t_operacion = $("#t_operacion").val();
        console.log(t_operacion);
        if(t_operacion == '1'){
            document.getElementById('importacion').style.display = 'block';
            document.getElementById('exportacion').style.display = 'none';
        }else if(t_operacion == '2'){
            document.getElementById('importacion').style.display = 'none';
            document.getElementById('exportacion').style.display = 'block';
        }else{
            document.getElementById('importacion').style.display = 'none';
            document.getElementById('exportacion').style.display = 'none';
        }
    });
});



