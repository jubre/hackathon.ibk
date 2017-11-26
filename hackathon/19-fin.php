<?php
session_start();

include 'model/jsonPOST.php';
include 'model/jsonGET.php';
include 'model/util.php';

EnviarSMS("Prueba 123", $_POST['numeroCelular1'].$_POST['numeroCelular2'].$_POST['numeroCelular3'].$_POST['numeroCelular4'].$_POST['numeroCelular5'].$_POST['numeroCelular6'].$_POST['numeroCelular7'].$_POST['numeroCelular8'].$_POST['numeroCelular9'])
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
    </head>
    <body class="yellow">
        <div class="cnt-wrapper yellow">
            <div class="wrapper">
                <header class="wancho-2">
                    <div id="header">
                        <div class="logo"></div>
                    </div>
                </header>
                <section class="c-main wancho-2">
                    <div class="ac">
                        <div class="-cnt-celular-afiliado mt140">
                            <div class="-caja-uno">
                                <span>¡Tu voucher se está imprimiendo!</span>
                            </div>
                        </div>
                    </div>
                    <div class="txtnormal size30 mt140 ac">
                        <p>
                            No olvides retirar tu tarjeta
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>