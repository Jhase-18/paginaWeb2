<?php
// Creando una nueva conexión a la base de datos.
$conn = new mysqli("localhost", "root", "199418", "empresas");

// Comprobando si hay un error de conexión.
if ($conn->connect_error) {
    echo 'Error de conexion ' . $conn->connect_error;
    exit;
}
/* Password  *Directorioempresas2024
user bd id22209896_admin
password bd *Admin123
*/