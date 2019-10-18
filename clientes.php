<?php 
    require_once("includes/head.php");
    require_once("includes/header.php");
?>

<div class="container border-radius">
    <table class="table table-striped table-bordered table-space">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>correo</th>
                <th>dni</th>
                <th>dirección</th>
                <th>país</th>
                <th>telefono</th>
                <th>Operación</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT user_id,nombre,apellido, correo, usuario, dni, direccion, pais, telefono  FROM usuarios";
                $query_conn = mysqli_query($connection, $query);
                if(!$query_conn) {
                    die("Query failed" . mysqli_error($connection));
                } else {
                }
                foreach ($query_conn as $row) {
                    echo '<tr>';
                    echo '<td>'. $row['usuario'] . '</td>';
                    echo '<td>'. $row['nombre'] . '</td>';
                    echo '<td>'. $row['apellido'] . '</td>';
                    echo '<td>'. $row['correo'] . '</td>';
                    echo '<td>'. $row['dni'] . '</td>';
                    echo '<td>'. $row['direccion'] . '</td>';
                    echo '<td>'. $row['pais'] . '</td>';
                    echo '<td>'. $row['telefono'] . '</td>';
                    echo '<td width=250>';
                    echo '<a class="btn btn-info btn-sm" href="read.php?id='.$row['user_id'].'">Leer</a>';
                    echo ' ';
                    echo '<a class="btn btn-success btn-sm" href="update.php?id='.$row['user_id'].'">Actualizar</a>';
                    echo ' ';
                    echo '<a class="btn btn-danger btn-sm" href="delete.php?id='.$row['user_id'].'">Eliminar</a>';
                    echo '</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>




<?php 
require_once("includes/footer.php");

?>