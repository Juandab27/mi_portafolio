<?php
// controllers/SiteController.php
require_once 'models/ContactoModel.php';

class SiteController {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function manejarPeticion() {
        $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'inicio';
        $mensaje_db = "";

        if (
            $url === 'contacto' &&
            $_SERVER["REQUEST_METHOD"] == "POST" &&
            isset($_POST['nombre'], $_POST['correo'], $_POST['comentario'])
        ) {
            $nombre_contacto = trim($_POST['nombre']);
            $correo_contacto = trim($_POST['correo']);
            $comentario_contacto = trim($_POST['comentario']);

            if (
                !empty($nombre_contacto) &&
                filter_var($correo_contacto, FILTER_VALIDATE_EMAIL) &&
                !empty($comentario_contacto)
            ) {
                $modelo = new ContactoModel($this->conexion);

                $exito = $modelo->guardarContacto(
                    $nombre_contacto,
                    $correo_contacto,
                    $comentario_contacto
                );

                if ($exito) {
                    $mensaje_db = "<p style='color: green; font-weight: bold;'>¡Mensaje guardado con éxito en la Base de Datos!</p>";
                } else {
                    $mensaje_db = "<p style='color: red;'>Error al guardar en la base de datos.</p>";
                }
            } else {
                $mensaje_db = "<p style='color: red;'>Por favor, completa todos los campos con información válida.</p>";
            }
        }

        require_once 'views/header.php';

        switch ($url) {
            case 'inicio':
                require_once 'views/inicio.php';
                break;
            case 'sobre-mi':
                require_once 'views/sobre-mi.php';
                break;
            case 'habilidades':
                require_once 'views/habilidades.php';
                break;
            case 'proyectos':
                require_once 'views/servicios.php';
                break;
            case 'intereses':
                require_once 'views/intereses.php';
                break;
            case 'contacto':
                require_once 'views/contacto.php';
                break;
            default:
                require_once 'views/404.php';
                break;
        }

        require_once 'views/footer.php';
    }
}
