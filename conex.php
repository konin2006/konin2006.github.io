<!--guardar.php para procesar y guardar la información en la base de datos):*
php-->
<?php
// Conexión a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'rdatos');

// Verificar la conexión
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";

if (mysqli_query($conexion, $sql)) {
    echo "Datos guardados correctamente";
} else {
    echo "Error al guardar los datos: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>