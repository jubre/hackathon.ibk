<?php
include 'model/jsonPOST.php';
include 'model/jsonGET.php';
include 'model/util.php';

$codigoUnicoCliente = "00" . $_SESSION["numeroDocumento"];
$objClienteTotal = ObtenerClientePorCodigoUnicoCliente($codigoUnicoCliente);

if (!isset($objClienteTotal->primerNombre)) {
    $objClienteTotal = RegistrarCliente($_SESSION["numeroDocumento"]);
    $objClienteTotal = ObtenerClientePorCodigoUnicoCliente($codigoUnicoCliente);
}

$objReclamo = RegistrarReclamo($codigoUnicoCliente, GenerarDescripcionReclamo("IB000999", $_SESSION['montoTrx'], $_SESSION['monedaTrx'], "4546", "E1"), "PENDIENTE");
?>

<html>
    <body>
        <table border="0">
            <tr>
                <td>Datos del Cliente</td>
            </tr>
            <tr>
                <td>
                    Número de Documento
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    Codigo Unico Cliente
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    Nombre Completo
                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>
                    Correo Electronico
                </td>
                <td>

                </td>
            </tr>
        </table>
    </body>
</html>