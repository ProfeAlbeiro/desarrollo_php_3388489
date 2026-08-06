<?php
// Llamar la Clase Rol
require_once "models/Rol.php";

class Roles {

    public function main(){

        echo "MÉTODOS SETTER Y GETTER<br><br>";
        // Obj01: Instanciar la Clase Rol (Crear Objeto)
        $rol01 = new Rol;        
        // Código del Rol: Capturar y Mostrar 
        $rol01->setRolCode(1);
        $rol01->setRolName("admin");
        echo "Id: " . $rol01->getRolCode() . "<br>";
        echo "Nombre: " . $rol01->getRolName() . "<br><br>";

        // Obj02: Instanciar la Clase Rol (Crear Objeto)
        $rol02 = new Rol;        
        // Código del Rol: Capturar y Mostrar 
        $rol02->setRolCode(2);
        $rol02->setRolName("vendedor");
        echo "Id: " . $rol02->getRolCode() . "<br>";
        echo "Nombre: " . $rol02->getRolName() . "<br><br>";
        
        // Obj03: Instanciar la Clase Rol (Crear Objeto)
        $rol03 = new Rol;        
        // Código del Rol: Capturar y Mostrar 
        $rol03->setRolCode(3);
        $rol03->setRolName("cliente");
        echo "Id: " . $rol03->getRolCode() . "<br>";
        echo "Nombre: " . $rol03->getRolName() . "<br><br>";
        
        // Obj04: Instanciar la Clase Rol (Crear Objeto)
        echo "MÉTODO CONSTRUCTOR <br><br>";
        $rol04 = new Rol(4, "Cajero");
        echo "Id: " . $rol04->getRolCode() . "<br>";
        echo "Nombre: " . $rol04->getRolName() . "<br><br>";
    }
}
?>