<?php

function obtenerContactos(){
    include 'bd.php';
    try {
        //code...
        return $conn->query("SELECT id, nombre, empresa, telefono FROM contactos");
    } catch (Exception $e) {
        //throw $th;
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}

//Obtiene un contacto y toma un id

function obtenerContacto ($id) {
    include 'bd.php';
    try {
        //code...
        return $conn->query("SELECT id, nombre, empresa, telefono FROM contactos WHERE id = $id");
    } catch (Exception $e) {
        //throw $th;
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
?>