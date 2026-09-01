<?php
    require_once "models/Database.php";
    $prueba = DataBase::connection(); 
    // Consulta
    $sql = 'SELECT * FROM AUTORES';
    $stmt = $prueba->query($sql);  
    $autores = $stmt->fetchAll();
    print_r($autores);
    // foreach ($autores as $autor) {
    //     echo $autor['autor_nombre'] . "<br>";
    // }    
?>