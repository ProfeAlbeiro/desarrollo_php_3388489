<?php

class Rol {

    // ATRIBUTOS 
    private $rolCode;
    private $rolName;

    // MÉTODOS
    
    // Métodos Setter y Getter

    # Código Rol
    public function setRolCode($rolCode){
        $this->rolCode = $rolCode;
    }
    public function getRolCode(){
        return $this->rolCode;
    }
}
?>