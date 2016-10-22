<?php
/**
 * Created by PhpStorm.
 * User: marcosmh
 * Date: 22/10/16
 * Time: 3:36 AM
 */
class ModeloEjemplo
{

    function get_datos($con,$usuario)
    {
        try
        {

            $vsql = " select *
                        from usuarios 
                      where usuario = :usuario
                    
                   ";

            $vquery  = $con->prepare($vsql);
            $vquery->bindparam(":usuario", $usuario, PDO::PARAM_INT);
            $error   = $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $execute = $vquery->execute();

            if($execute)
            {
                return $vquery->fetchAll(PDO::FETCH_ASSOC);
            }
            else
            {
                return false;
            }

        }
        catch(Exception $e)
        {
            echo $e->getMessage();

        }
    }


    function insertar_datos($con,$nombre,$apellidos,$telefono)
    {
        try
        {
            $con->beginTransaction();

            $vsql = " insert into usuarios
                      (
                        id_usuario
                        ,nombre
                        ,apellidos
                        ,telefono
                      )
                      VALUES 
                      (
                        nextval('seq_id_usuario')
                        ,:nombre
                        ,:apellidos
                        ,:telefono
                        
                      )
                    ";

            $vquery = $con->prepare($vsql);
            $vquery->bindparam(":nombre", $nombre, PDO::PARAM_INT);
            $vquery->bindparam(":apellidos", $apellidos, PDO::PARAM_STR);
            $vquery->bindparam(":telefono", $telefono, PDO::PARAM_INT);
            $error = $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $execute = $vquery->execute();

            if($execute)
            {
                $con->commit();
                return TRUE;
            }
            else
            {
                $con->rollBack();
                return array('message' => ($error));
            }


        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }
    }

    

}
?>