<?php

require_once "models/Registro.php";

class RegistroController {

    private $modelo;

    public function __construct($conexion) {
        $this->modelo = new Registro($conexion);
    }

    public function guardar() {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $dni = $_POST["dni"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $programa = $_POST["programa"];
            $modulo = $_POST["modulo"];
            $semestre = $_POST["semestre"];

            $resultado = $this->modelo->registrar(
                $dni,
                $nombre,
                $apellido,
                $programa,
                $modulo,
                $semestre
            );

            if ($resultado) {
                echo "<script>
                    alert('Registro exitoso');
                    window.location='index.php?vista=formulario';
                </script>";
            } else {
                echo "Error al registrar";
            }
        }
    }

    public function listar() {
        return $this->modelo->listar();
    }
}

?>