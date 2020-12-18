<?php

    class BaseDatos{

        public $heroesBD="root"; 
        public $contraseñaBD=""; 


        public function __construct(){ }


        public function conectarBD(){

            try{
                
                $datoBD="mysql:host=localhost;dbname=comicheroes";
                $conexionBD=new PDO($datoBD,$this->heroesBD,$this->contraseñaBD); 
                return($conexionBD);
                

            }catch(PDOException $error){

                echo($error->getMessage()); 

            }
            
        }

        public function agregarHeroes($querySQL) {

            $conexionBD=$this->conectarBD();

            $queryInsertData=$conexionBD->prepare($querySQL);

            $resultado=$queryInsertData->execute(); 

            if($resultado){
                echo("Dato ingresado con exito");
            
            }else{
                echo("Error al ingresar el dato"); 
            } 





        }

        public function consultData($querySQL){
            $conexionBD=$this->conectarBD();

            $queryLookData=$conexionBD->prepare($querySQL);

            $queryLookData->setFetchMode(PDO::FETCH_ASSOC); 

            $queryLookData->execute(); 

            return( $queryLookData->fetchAll());  


        }

    }

?>