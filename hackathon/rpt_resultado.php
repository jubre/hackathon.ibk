<?php
include 'model/jsonPOST.php';
include 'model/jsonGET.php';
include 'model/util.php';

$codigoUnicoCliente = "00" . $_POST["numeroDocumento"];
$objClienteTotal = ObtenerClientePorCodigoUnicoCliente($codigoUnicoCliente);
?>

<html>
    <body>
        <table border="0" cellpadding="5">
            <tr>
                <td bgcolor="#008000" colspan="2" align="center"><font color="white">Datos del Cliente</font></td>
            </tr>
            <tr>
                <td>
                    Número de Documento
                </td>
                <td>
                    <?php echo $objClienteTotal->numeroDocumento; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Codigo Unico Cliente
                </td>
                <td>
                    <?php echo $codigoUnicoCliente; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Nombre Completo
                </td>
                <td>
                    <?php echo $objClienteTotal->primerNombre . " " . $objClienteTotal->apellidoPaterno; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Correo Electronico
                </td>
                <td>
                    <?php echo $objClienteTotal->email; ?>
                </td>
            </tr>
        </table>
    </body>
</html>