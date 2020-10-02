<?php
/**
 * Aqui hago la conexion y gestiono las acciones sobre la base de datos,
 * crear, actualizar, eliminar y consultar
 *
 * @author Marcela Salinas
 */
class crud {
   
      public $conexion;
      
    //Realiza la conexion con la base de datos especificando el usuario, la clave, y bd
    public function conectar()
    {
        $host="mysql.webcindario.com";
        $user= "abarroteschile";// 
        $password="Chely111";// 
        $db="abarroteschile";
        $this->conexion = new mysqli($host,$user,$password,$db);
    }
    
    //Cierra la conexion con la base de datos
    public function desconectar()
    {
        $this->conexion->close();
    }
     
    
    //INICIO INSERTAR ///////////////////////////////////////////////////////   
     //permite ingresar un registro en una tabla
    public function insertar($primary,$infopk,$tabla,$values)
    {
        $sql="SELECT * FROM ".$tabla." WHERE ".$primary."=".$infopk;
        $query=$this->conexion->query($sql)->fetch_assoc();
        
         if($query==NULL)
        {
            $sql="INSERT INTO ".$tabla." VALUES (".$values.")";
            $result=$this->conexion->query($sql);

            if($result==true){$message="guardo";}
            else{$message = "error";}
        }
          else{$message = "existe";} 
          return $message;
    }
    //FIN INSERTAR /////////////////////////////////////////////////
    
    //REGISTRO EN BITACORA
   //INICIO
   
    public function registro_bitacora($values){
        $sql="INSERT INTO tb_bitacoras VALUES (".$values.")";
        $result=$this->conexion->query($sql);

            if($result==true){$message="guardo";}
            else{$message = "error";}
    }
    
   //FIN
    
    //**************************************************************************************************************
    
    //INICIO CONSULTAR ///////////////////////////////////////////////////////
      public function consultar_todos($tabla){
        $sql="select * from ".$tabla;
        if($tabla=="tb_bitacoras"){
            $sql=$sql." order by fechahora";
        }
        $result=$this->conexion->query($sql);
        return $result;
    }
    
     public function consultar_uno($tabla, $id){
        $sql="select * from ".$tabla." where codigo= ".$id;
        $result=$this->conexion->query($sql); 
        return $result;
    }
      
    //FIN CONSULTAR /////////////////////////////////////////////////////////
    
    public function editar($tabla,$valores,$id) {
        $sql="update ".$tabla. " set ".$valores. " where codigo= ".$id;
        $result=$this->conexion->query($sql);
        return $result;
    }
    
    //metodo eliminar
    public function eliminar($id, $tabla){
         $sql = "DELETE FROM ".$tabla." WHERE codigo= ".$id;
         $result=$this->conexion->query($sql);
         return $result;
    }
    //FIN  Eliminar /////////////////////////////////////////////////////////
  
    
    
}
