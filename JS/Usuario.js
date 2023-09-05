

function Iniciar_sesion(){
    
    recuerdame();

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
function recuerdame(){
    if(rmcheck.checked && usuarioInput.value!=="" && passInput.value!==""){
        //Creamos el storage
        localStorage.user=usuarioInput.value;
        localStorage.pass=passInput.value;
        localStorage.checkbox=rmcheck.value;

    }else{ //Si no está tildado el cuadro Remember me, se borran los datos de acceso guardados por defecto
        localStorage.user="";
        localStorage.pass="";
        localStorage.checkbox="";
    }
}

//Funcion para listar usuarios PACIENTES
var tbl_usuario_simple;

function listar_usuario_simple() {
    tbl_usuario_simple = $("#tablaSimple").DataTable({
        "ordering": false,
        "lengthChange": true,
        "searching": { "regex": false },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": false,
        "processing": true,
        "ajax": {
            "url": "../Controlador/Usuario/controlador_usuario_listar.php", // Reemplaza "obtener_datos.php" con la ruta a tu script PHP    <i class='fa-duotone fa-user-pen fa-fade'></i>
            "dataSrc": "data" // "data" es la clave que contiene el arreglo de datos en tu JSON
        },
        "columns": [
            {"defaultContent":""},//Aquí va el contador
            { "data": "nro_ficha" },
            { "data": "Nombre_paciente" },
            { "data": "Apellido_paciente" },
            {"defaultContent":"<button class='btn btn-primary' style='background-color:#F5CBA7'><i class='fa fa-edit'></i></button>"}//Mi boton de edición
        ]
       
    });

    tbl_usuario_simple.on('draw.dt', function () {
        var PageInfo = tbl_usuario_simple.page.info();
        tbl_usuario_simple.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });

    
}

//Funcion para listar usuarios BIOQUIMICOS
var tbl_usuario_bq;

function listar_usuario_bq() {
    tbl_usuario_bq = $("#tablaBq").DataTable({
        "ordering": false,
        "lengthChange": true,
        "searching": { "regex": false },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": false,
        "processing": true,
        "ajax": {
            "url": "../Controlador/Usuario/controlador_user_bq.php", // Reemplaza "obtener_datos.php" con la ruta a tu script PHP    <i class='fa-duotone fa-user-pen fa-fade'></i>
            "dataSrc": "data" // "data" es la clave que contiene el arreglo de datos en tu JSON
        },
        "columns": [
            {"defaultContent":""},//Aquí va el contador
            { "data": "Matricula_profesional" },
            { "data": "Nombre_bq" },
            { "data": "Apellido_bq" },
            {"defaultContent":"<button class='btn btn-primary' style='background-color:#F5CBA7'><i class='fa fa-edit'></i></button>"}//Mi boton de edición
        ]
       
    });

    tbl_usuario_bq.on('draw.dt', function () {
        var PageInfo = tbl_usuario_bq.page.info();
        tbl_usuario_bq.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });

    
}
//Funcion para listar usuarios MEDICOS
var tbl_usuario_med;

function listar_usuario_bq() {
    tbl_usuario_med = $("#tablaMed").DataTable({
        "ordering": false,
        "lengthChange": true,
        "searching": { "regex": false },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": false,
        "processing": true,
        "ajax": {
            "url": "../Controlador/Usuario/controlador_user_med.php", // Reemplaza "obtener_datos.php" con la ruta a tu script PHP    <i class='fa-duotone fa-user-pen fa-fade'></i>
            "dataSrc": "data" // "data" es la clave que contiene el arreglo de datos en tu JSON
        },
        "columns": [
            {"defaultContent":""},//Aquí va el contador
            { "data": "Nombre_medico" },
            { "data": "Apellido_medico" },
            { "data": "DNI_medico" },
            { "data": "Especialidad" },
            {"defaultContent":"<button class='btn btn-primary' style='background-color:#F5CBA7'><i class='fa fa-edit'></i></button>"}//Mi boton de edición
        ]
       
    });

    tbl_usuario_med.on('draw.dt', function () {
        var PageInfo = tbl_usuario_med.page.info();
        tbl_usuario_med.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });

    
}






















