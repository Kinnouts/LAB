function Iniciar_sesion(){
    
    let usu=document.getElementById('txt_user').value;
    let pass=document.getElementById('txt_pass').value;

    //Validación de escritura de nombres en campos de texto
    if(usu.length==0||pass.length==0){
        return Swal.fire(
            'Advertencia',
            'Ingrese sus campos de login',
            'warning'
          );
    }
    $.ajax({
        //Le paso a ajax la ruta del controlador
        url:'../Controlador/Usuario/iniciar_sesion.php',
        type:'POST',
        //Le indico que datos se enviarán al controlador
        data:{ //A izq van los nombres como los recibirá el controladory a de rva el nombre del js
            u:usu,
            p:pass
        }

    }).done(function(resp){//resp es la repsuesta que trae del controlador

        let data=JSON.parse(resp);

       if(data.length>0){
         //alert(resp);//Retorna una respuesta de controlador

           // alert(data[0][8]);//Verifico que esté tomando el valor de tabla ACTIVO

            
            if(data[0][8]==0){
                   // return  Swal.fire('Logueo exitoso','Mensaje de confirmacion','success');
            
                    return  Swal.fire('Usuario desactivado',usu+ '. Comuníquese con el adminsitrador','warning');
            }

            $.ajax({
                    url:'../Controlador/Usuario/crear_sesion.php',
                    type:'POST',
                    data:{
                        idusuario:data[0][2],
                        nombre:data[0][4],
                        apellido:data[0][5]
                    }
                }).done(function(r){
                        let timerInterval
                        Swal.fire({
                        title: 'Bienvenido!',
                        html: 'Redireccionando en <b></b> milliseconds.',
                        timer: 1000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                        }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                           location.reload()//Actualiza el index
                        }
                        })
                })


       }else{
            Swal.fire('Mensaje de error','Usuario o clave incorrecta','error');
       }
       
        //alert(resp);//Retorna una respuesta de controlador
    })
}