<?php

require_once "conexion.php";

class ModeloPostulantes{

    // /=============================================
    // MOSTRAR CATEGORIAS
    // =============================================/

    static public function mdlMostrarPostulantes($tabla, $item, $valor){

        if($item != null){
                                                 //SELECT * FROM usuarios WHERE usuario='admin';
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt -> fetch();

        }else{

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt -> execute();

            return $stmt -> fetchAll();

        }

        $stmt -> close();

        $stmt = null;

    }

    // /=============================================
    // CREAR CATEGORIA
    // =============================================/

    static public function mdlIngresarPostulantes($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(paquete) VALUES (:paquete)");

        $stmt->bindParam(":paquete", $datos, PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            return "error";

        }

        $stmt->close();
        $stmt = null;

    }
}