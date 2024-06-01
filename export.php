<?php
include 'config.php';

if (isset($_POST['export'])) {
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="Empresas.xls"');
    header('Cache-Control: max-age=0');

    $output = fopen("php://output", "w");

    fputcsv($output, array('IDempresa', 'TamEmpresa', 'Sector', 'Nit', 'Nombre', 'Direccion', 'Telefono'), "\t");

    $query = "SELECT * FROM empresa";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        fputcsv($output, $row, "\t");
    }

    fclose($output);
    exit();
}
?>