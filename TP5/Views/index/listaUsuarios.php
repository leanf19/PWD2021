<?php
include_once "../../config.php";
$sesion = new Session();
if (!$sesion->activa()) {
    header('Location: login.php');
    exit();
} else if ($sesion->getRol()->getIdRol() != 1) {
    header('Location: errorAcceso.php');
}

$controller = new UsuarioController();
$listaUsuarios = $controller->buscar(null);

include_once "../structure/Header.php";
?>

    <div class="container mt-4">
        <table class='table'>
            <thead class='table-light'>
            <tr>
                <th scope='col' class='text-center'>ID Usuario</th>
                <th scope='col' class='text-center'>Nombre Usuario</th>
                <th scope='col' class='text-center'>Contraseña</th>
                <th scope='col' class='text-center'>E-mail</th>
                <th scope='col' class='text-center'>¿Deshabilitado?</th>
                <th scope='col' class="text-center">Editar</th>
                <th scope='col' class="text-center">Borrar</th>
            </tr>
            </thead>

            <?php
            if (count($listaUsuarios) > 0) {
                foreach ($listaUsuarios as $usuario) {
                    $id = $usuario->getIdUsuario();
                    echo "<tr>
            <td class='text-center'>{$usuario->getIdUsuario()}</td>
            <td class='text-center'>{$usuario->getUsNombre()}</td>
            <td class='text-center'>{$usuario->getUsPass()}</td>
            <td class='text-center'>{$usuario->getUsMail()}</td>";
                    if (!is_null($usuario->getUsDeshabilitado())) {
                        echo "<td class='text-center'><i class='fas fa-check-circle'></i></td>";
                    } else {
                        echo "<td class='text-center'><i class='fas fa-times-circle'></i></td>";
                    }

                    echo "<form method='post' action='actualizarlogin.php'>
        <td class='text-center'>
        <input name='idusuario' id='idusuario' type='hidden' value='$id'><button class='btn btn-info' type='submit'><i class='fas fa-user-edit'></i></button>
        </td>
        </form>
        <form method='post' action='../Accion/eliminarLogin.php'>
        <td class='text-center'>";
                    if (is_null($usuario->getUsDeshabilitado())) {
                        echo "<input name='idusuario' id='idusuario' type='hidden' value='$id'><button class='btn btn-info' type='submit'>";
                        echo "<i class='fas fa-ban'></i>
                        </button>
                        </td>
                        </form>
                        </tr>";
                    } else {
                        echo "<input name='idusuario' id='idusuario' type='hidden' value='$id'><button class='btn btn-warning' type='submit' disabled>";
                        echo "<i class='fas fa-ban'></i>
                        </button>
                        </td>
                        </form>
                        </tr>";
                    }
                }
            } else {
                echo "<div class='alert alert-warning' role='alert'>No hay usuarios registrados.</div>";
            }
            ?>
        </table>
    </div>

<?php
include_once "../structure/Footer.php";
?>