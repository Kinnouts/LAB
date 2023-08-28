function Iniciar_sesion(){
    
    let usu=document.getElementById('txt_user').value;
    let pass=document.getElementById('txt_pass').value;

    //Validación de escritura de nombres en campos de texto
    if(usu.length==0||pass.length==0){
        return Swal.fire(
            'Advertencia',
            'Ingrese sus campos de login',
            'lala'
          );
    }
}