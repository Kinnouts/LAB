$(document).ready(function () {
    $('#formUsuario').submit(function (e) {
        e.preventDefault();

        $.ajax({
            url: '../../controller/usuario/controller_usuario.php',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (respuesta) {
                if (respuesta.status === 'success') {
                    $('#resultado').html('<p style="color: green;">' + respuesta.message + '</p>');
                    $('#formUsuario')[0].reset();
                } else {
                    $('#resultado').html('<p style="color: red;">' + respuesta.message + '</p>');
                }
            },
            error: function () {
                $('#resultado').html('<p style="color: red;">Error al conectar con el servidor</p>');
            }
        });
    });
});
