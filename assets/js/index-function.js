$(document).ready(function(){

    $('#formPass').click(function(){
        $('#loginBlock').hide();
        $('#formBlock').show();
    });

    $('#cancelar').click(function(){
        $('#loginBlock').show();
        $('#formBlock').hide();
    });

    $('#continuar').click(function(){
        $('#formBlock').hide();
        $('#confBlock').show();
    });

    $('#aceptar').click(function(){
        $('#confBlock').hide();
        $('#validarBlock').show();
        $('body').height(768);
    });

    $('#cancelarConf').click(function(){
        $('#validarBlock').hide();
        $('#loginBlock').show();
        $('body').css('height', '100%');
    });

    $('#guardarPass').click(function(){
        $('#validarBlock').hide();
        $('#cambioCorrecto').show();
        $('body').css('height', '100%');
    });

    $('#aceptarCambio').click(function(){
        $('#cambioCorrecto').hide();
        $('#loginBlock').show();
        $('body').css('height', '100%');
    });

    $('#aceptarCambioModal').click(function(){
        $('#cambioCorrecto').hide();
        $('#formBlock').show();
        $('body').css('height', '100%');
    });
});