<?php

class Registro {

    private $conn;

    public function __construct($conexion) {
        $this->conn = $conexion;
    }

    public function registrar($dni, $nombre, $apellido, $programa, $modulo, $semestre) {

        $sql = "INSERT INTO registrados 
        (dni, nombre, apellido, programa, modulo, semestre)
        VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param(
            "ssssss",
            $dni,
            $nombre,
            $apellido,
            $programa,
            $modulo,
            $semestre
        );

        return $stmt->execute();
    }

    public function listar() {

        $sql = "SELECT * FROM registrados";
        $resultado = $this->conn->query($sql);

        return $resultado;
    }
}

?>