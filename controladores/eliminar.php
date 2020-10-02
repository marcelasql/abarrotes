<?php
//Inicio Elimina Articulo
    if(!empty($_GET))
    {
        include '../modelo/crud.php';
        $conecto=new crud();
        $conecto->conectar();
        
        $ide=$_GET["codigo"];
     
        $rtz=$conecto->consultar_uno("articulos", $ide);
        $r=$rtz->fetch_array();
        $nombre=$r["nombre"];
        
        $tabla="articulos";
        $rta = $conecto->eliminar($ide, $tabla);
                     
        if($rta!=null){
            
         //INICIO BITACORA ////////////////////////////////////////////////////////////////////////
        //que puede recibir: guardo, error, existe
        
        if($rta=="guardo"){
            $rta="Exito, Eliminó el Articulo";
            
            //id, usuario,fechahora, accion,registroafectado
             $id="null";
             @session_start();
             $usuario=$_SESSION["alias"];
             date_default_timezone_set("America/Santiago");
             $fechahora=date('Y-m-d H:i:s');
            
             $accion="Eliminado";
             $registroafectado=$nombre;
             $values=$id.", '".$usuario."', '".$fechahora."', '".$accion."', '".$registroafectado."'";
             
             $rtx=$conecto->registro_bitacora($values);
        }
        else{
            $rta="Error, Problema en la instrucción";
        }
                
        //FIN BITACORA ////////////////////////////////////////////////////////////////////////////
        
        print "<script>alert('".$rta."');"
                 ."window.location='../vistas/consulto_articulos.php';"
                 ."</script>";
       }else{
            print "<script>alert(\"No se pudo eliminar.\");"
                 ."window.location='../vistas/consulto_articulos.php';"
                 ."</script>";
        }
    }
//Fin elimina Articulo
    
    

?>
