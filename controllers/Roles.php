<?php

// Llamar la Clase Rol
require_once "models/Rol.php";

class Roles {

    public function main(){

        // Instanciar la Clase Rol (Crear Objeto)
        $rol = new Rol;
        
        // Código del Rol: Capturar y Mostrar 
        $rol->setRolCode(05);
        echo $rol->getRolCode();

    }
}
?>