<?php

 require_once('modelo.php');
 class encuesta extends modeloCredencialesBD{

 
     public function __construct(){
         parent::__construct();
     }  


     public function insertar_dato_encuestados($opcion,$edad,$salario,$provincia){
   
         $instruccion = "CALL sp_insertar_datos_encuestados('".$opcion."','".$edad."','".$salario."','".$provincia."')";
         $consulta = $this->_db->query($instruccion);
            return "se envio a la bd";
         }  


         public function consultar_datos_encuestados(){

            $instruccion = "CALL  sp_consultar_datos_encuestados()";
          
            $consulta = $this->_db->query($instruccion);
            $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
          
    
            if (!$resultado) {
                echo"Fallo al consultar_datos_encuestados";
            }
            else{
                return $resultado;
                $resultado->close();
                $this->_db->close();
            }
    
        }

        public function consultar_datos_encuestados_filtro($parametro){

            $instruccion = "CALL  sp_monstrar_filtro('".$parametro."')";
          
            $consulta = $this->_db->query($instruccion);
            $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
          
    
            if (!$resultado) {
                echo"Fallo al consultar filtro";
            }
            else{
                return $resultado;
                $resultado->close();
                $this->_db->close();
            }
    
        }

 
     }   





?>

