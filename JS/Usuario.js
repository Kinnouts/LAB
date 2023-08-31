function Iniciar_sesion(){
    
    let usu=document.getElementById('txt_user').value;
    let pass=document.getElementById('txt_pass').value;

    //Validación de escritura de nombres en campos de texto
    if(usu.length==0||pass.length==0){
        return Swal.fire(
            'Advertencia',
            'Ingrese sus campos de login',
            'OK'
          );
    }
    $.ajax({
        //Le paso a ajax la ruta del controlador
        url:'../Controlador/Usuario/iniciar_sesion.php',
        type:'POST',
        //Le indico que datos se enviarán al controlador
        data:{
            u:usu,
            p:pass
        }

    }).done(function(resp){
        let data=JSON.parse(resp);
       if(data.length>0){
        $.ajax({
            url:'../Controlador/Usuario/crear_sesion.php',
            type:'POST',
            data:{
                idusuario:data[0][2],
                nombre:data[0][4],
                apellido:data[0][5]
            }
        }).done(function(respuesta){
 
 
        })
       }
       
        //alert(resp);//Retorna una respuesta de controlador
    })
}