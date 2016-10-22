/**
 * Created by marcosmh on 22/10/16.
 */


$(document).ready(function () {


    $('#enviar').click(function () {

        $('#proceso').val('guardar');
        document.forms['frm1'].action = 'CtrlOperaciones.php';
        document.forms['frm1'].submit();



    });// FIN GUARDAR


});
