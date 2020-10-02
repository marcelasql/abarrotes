<?php
   
        include '../modelo/crud.php';
        $conecto=new crud();
        $conecto->conectar();
        
        $tabla="articulos";
        date_default_timezone_set("America/Santiago");
        $fechahora=date('Y-m-d H:i:s');
        $valores="nombre='".$_POST['nombre']."',"
                    . "cantidad=".$_POST['cantidad'].","
                    . "precio=".$_POST['precio'].","
                    . "fecha='".$fechahora."'";//Comento Marcela
     
        $id=$_POST["codigo"];
        $rta = $conecto->editar($tabla,$valores,$id);
        
         //INICIO BITACORA ////////////////////////////////////////////////////////////////////////
        //que puede recibir: guardo, error, existe
        
        if($rta=="guardo"){
            $rta="Exito, Modifico el Artículo";
            
            //id, usuario,fechahora, accion,registroafectado
             $id="null";
             @session_start();
             $usuario=$_SESSION["alias"];
             
             $accion="Modificado";
             $registroafectado=$_POST['nombre'];
             $values=$id.", '".$usuario."', '".$fechahora."', '".$accion."', '".$registroafectado."'";
            // $values=$id.", ".$usuario.", '".$fechahora."', '".$accion."', '".$registroafectado."'"; //Coemento Marcela
             
             $rtx=$conecto->registro_bitacora($values);
        }
        else{
            $rta="Error, Problema en la instrucción";
        }
        
        //FIN BITACORA ////////////////////////////////////////////////////////////////////////////
        
        print "<script>alert('".$rta."');"
                 ."window.location='../vistas/consulto_articulos.php';"
                 ."</script>";
        
?>