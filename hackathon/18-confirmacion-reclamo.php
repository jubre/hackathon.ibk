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

$objReclamo = RegistrarReclamo($codigoUnicoCliente, GenerarDescripcionReclamo("IB000999", $_SESSION['montoTrx'], $_SESSION['monedaTrx'], "4546", "E1"), "ATENDIDO");
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
        <form action="#" method="post">
            <div class="wrapper">
                <header class="wancho-2">
                    <div id="header">
                        <div class="logo"></div>
                    </div>
                </header>
                <section class="wancho-2">
                    <div class="ac mt20 txtnormal size32">
                        Hola <strong><?php echo $objClienteTotal->primerNombre; ?></strong><br/>
                        Lo sentimos, tuvimos problemas en atender el retiro solicitado.<br/>
                        Hemos procedido con crear el reclamo <?php echo $objReclamo->numeroReclamo; ?> que se atendera en los próximos dias.<br/>
                        Disculpa  el inconveniente.<br/>
                        Estamos para servirte
                    </div>
                    <div class="ac mt40">
                        <div class="txtnormal size35 skyblue mb15">
                            <!--12345678<br/><br/>-->
                            Ingresa tú número de celular para contactarte
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
                                <label class="w62"><input type="text" id="numeroCelular9" name="numeroCelular9" onkeyup="javascript:ProcesarFormulario()"></label>
                            </div>
                            <span class="msgok ar">Ingresa los 9 dígitos</span>
                            <span class="msgerror ar"><img src="static-6/images/triangulo-error.png" width="35" height="28"> 
                                Ingresa un número válido</span>
                        </div>                    
                    </div>
                </section>
                <!--<div id="buttons">
                    <div>
                        <a href="" class="bt b-right pos4 ar">
                            <div class="bt-inner">
                                Finalizar
                            </div>
                        </a> 
                    </div>
                </div>-->
            </div>
        </form>
    </body>
</html>