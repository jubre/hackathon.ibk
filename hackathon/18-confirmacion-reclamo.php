<?php
session_start();

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

$_SESSION['numeroReclamo'] = $objReclamo->numeroReclamo;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <title>Interbank</title>	
        <link rel="stylesheet" type="text/css" href="static-6/css/styles.css"/>
        <!--[if lt IE 9]>
                <script src="static-6/js/html5.js"></script>
                <link rel="stylesheet" type="text/css" href="static-6/css/ie.css"/>
        <![endif]-->

        <script src="../static/js/jquery1.8.3.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            function ProcesarFormulario() {
                var xyz = $('#numeroCelular9').val();
                if (xyz != "") {
                    document.forms[0].submit();
                }
            }

            function SeleccionarCampo() {
                document.getElementById("numeroCelular1").focus();
            }
        </script>
    </head>

    <body class="yellow" onload="javascript:SeleccionarCampo()">
        <form action="19-fin.php" method="post">
            <div class="wrapper">
                <header class="wancho-2">
                    <div id="header">
                        <div class="logo"></div>
                    </div>
                </header>
                <section class="wancho-2">
                    <div class="ac mt20 txtnormal size32">
                        Estimado cliente, acabamos de crear el reclamo <?php echo $objReclamo->numeroReclamo; ?> , <br/>este se atenderá en los próximos dias.
                    </div>
                    <div class="ac mt40">
                        <div class="txtnormal size35 skyblue mb15">
                            <!--12345678<br/><br/>-->
                            Por favor, ingresa tu número de celular para poder contactarte
                        </div>               	
                        <div class="input group"><!-- para error: <div class="input error group"> -->
                            <div class="border ac">                       	
                                <label class="w62"><input type="text" id="numeroCelular1" name="numeroCelular1" value="" onkeypress="javascript:document.getElementById('numeroCelular2').focus();"></label>
                                <label class="w62"><input type="text" id="numeroCelular2" name="numeroCelular2" onkeypress="javascript:document.getElementById('numeroCelular3').focus();"></label>
                                <label class="w62"><input type="text" id="numeroCelular3" name="numeroCelular3" onkeypress="javascript:document.getElementById('numeroCelular4').focus();"></label>
                                <label class="w62"><input type="text" id="numeroCelular4" name="numeroCelular4" onkeypress="javascript:document.getElementById('numeroCelular5').focus();"></label>
                                <label class="w62"><input type="text" id="numeroCelular5" name="numeroCelular5" onkeypress="javascript:document.getElementById('numeroCelular6').focus();"></label>
                                <label class="w62"><input type="text" id="numeroCelular6" name="numeroCelular6" onkeypress="javascript:document.getElementById('numeroCelular7').focus();"></label>
                                <label class="w62"><input type="text" id="numeroCelular7" name="numeroCelular7" onkeypress="javascript:document.getElementById('numeroCelular8').focus();"></label>
                                <label class="w62"><input type="text" id="numeroCelular8" name="numeroCelular8" onkeypress="javascript:document.getElementById('numeroCelular9').focus();"></label>
                                <label class="w62"><input type="text" id="numeroCelular9" name="numeroCelular9"></label>
                            </div>
                            <span class="msgok ar">Ingresa los 9 dígitos</span>
                            <span class="msgerror ar"><img src="static-6/images/triangulo-error.png" width="35" height="28"> 
                                Ingresa un número válido</span>
                        </div>                    
                    </div>
                </section>
                <div id="buttons">
                    <div>
                        <a href="#" class="bt b-left pos4 al">
                            <div class="bt-inner">
                                Borrar		
                            </div>
                        </a>
                        <a href="#" class="bt b-right pos4 ar" onclick="javascript:ProcesarFormulario()">
                            <div class="bt-inner">
                                Finalizar
                            </div>
                        </a> 
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>