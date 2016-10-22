<?php
/**
 * Created by PhpStorm.
 * User: marcosmh
 * Date: 22/10/16
 * Time: 3:37 AM
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>

    <script src="FrmEjemplo.js" ></script>



</head>
<body>
<section>
    <div class="containerç">
        <form method="post" name="frm1" id="frm1" class="form-horizontal" onSubmit="return false">
            <input type="hidden" name="proceso" id="proceso" value="" />
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title"><strong>Datos Generales</strong></h3></div>
                <div class="panel-body">

                    <div class="row form-group form-group-sm">
                        <div class="col-sm-1"><label>Nombre:</label></div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" />
                        </div>
                    </div>

                    <div class="row form-group form-group-sm">
                        <div class="col-sm-1"><label>Apellidos:</label></div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" />
                        </div>
                    </div>

                    <div class="row form-group form-group-sm">
                        <div class="col-sm-1"><label>Correo:</label></div>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" />
                        </div>
                    </div>

                    <div class="row form-group form-group-sm">
                        <div class="col-sm-1"><label>Telefono:</label></div>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" id="telefono" name="telefono" placeholder="Telefono" />
                        </div>
                    </div>

                    <div class="row form-group form-group-sm">
                        <div class="col-sm-1"><label>Salario:</label></div>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" id="salario" name="salario" placeholder="Salario" />
                        </div>
                    </div>

                </div>
            </div>


            <div align="center">
                <button type="button" class="btn btn-default btn-sm" name="limpiar" id="limpiar">
                    <span class="glyphicon glyphicon-search"></span>Limpiar</button>
                <button type="button" class="btn btn-primary btn-sm" name="enviar" id="enviar">
                    <span class="glyphicon glyphicon-search"></span>Guardar</button>
            </div>

            <div id="mensaje">
            </div>


        </form>
    </div>
</section>



</body>
</html>
