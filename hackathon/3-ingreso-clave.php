<?php
echo $_POST["montoTrx"] . "<br/>";
echo $_POST["monedaTrx"];
?>


﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=8" />

        <title>Interbank</title>

        <link rel="stylesheet" type="text/css" href="../static/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../static/css/styles.css"/>
        <!--[if lt IE 9]>
                <script src="../static/js/html5.js"></script>
                <script src="../static/js/respond.js" type="text/javascript"></script>
                <link rel="stylesheet" type="text/css" href="../static/css/ie.css"/>
        <![endif]-->
        <script src="../static/js/jquery1.8.3.min.js" type="text/javascript"></script>
    </head>

    <?php
    $_SESSION['montoTrx'] = $_POST['montoTrx'];
    $_SESSION['monedaTrx'] = $_POST['monedaTrx'];
    ?>

    <body class="touch cambio-clave" ontouchstart="">

        <!-- html solo para el menu responsive -->
        <div class="w-nav">
            <div  class="menu-mobile icon-menu"></div>
            <div class="menu-mobile-close icon-close"></div>
        </div>
        <div class="r-overlay"></div>
        <!-- html solo para el menu responsive -->

        <div class="cnt-wrapper">
            <div class="wrapper">
                <header class="wancho-2">
                    <div id="header">
                        <p id="logo"></p>
                        <ul class="alineacion">
                            <li><span id="ico-telefono"></span><span>Asistencia: 311 9000</span></li>
                            <li><span id="ico-cajero"></span><span># Cajero: 0088977</span></li>
                        </ul>
                    </div>
                </header>
                <!-- /header -->

                <section class="c-main wancho-2 ingreso-clave">

                    <div class="c-ingresa-clave mt45">
                        <div class="bd-box b-sup ma">
                        </div>
                        <div class="subtitle-section c60 ma ac mb50">
                            <img class="ib vm" src="../static/images/icon-candado2.png" width="53" height="68">
                            <p class="ib vm ml10">
                                Ingresa tu clave
                            </p>
                        </div>
                        <div class="c-form">
                            <div class="mensaje-error ">
                                <div class="inner-error ib mb5">
                                    <form action="">
                                        <ul>
                                            <li>
                                                <input type="password" name="" value="" maxlength="1">
                                            </li>
                                            <li>
                                                <input type="password" name="" value="" maxlength="1">
                                            </li>
                                            <li>
                                                <input type="password" name="" value="" maxlength="1">
                                            </li>
                                            <li>
                                                <input type="password"  name="" value="" maxlength="1">
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                                <div class="c-texto3 ac h35">
                                    <p>
                                        Por tu seguridad, usa el teclado del cajero. 
                                    </p>
                                </div>					
                            </div>
                        </div>
                    </div>
                    <div class="block-bottom mt40 c80 ma">
                        <div class="block-text c60 mt60 fl">
                            <ul>
                                <li class="item-block c25">
                                    <img src="../static/images/icon-cubreclave.png" width="108" height="102">
                                </li>
                                <li class="item-block c70">
                                    Por tu seguridad, no dejes que vean tu clave secreta, ni aceptes la ayuda de extraños						
                                </li>
                            </ul>
                        </div>
                        <div class="block-button c40 fr">
                            <a href="4-seleccion-cuentas-soles.php" class="bt ac mb20 fr">
                                <div class="bt-inner">
                                    Confirmar		
                                </div>
                            </a>				
                            <a href="" class="bt ac fr">
                                <div class="bt-inner">
                                    Cancelar
                                </div>
                            </a>							
                        </div>
                    </div>
                    <div class="bd-box b-inf ma">

                    </div>
                </section>

            </div>
        </div>

        <script type="text/javascript">
        </script>	

        <script type="text/javascript" src="../static/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <script src="../static/js/main.js" type="text/javascript"></script>
        <script type="text/javascript">

        </script>
        <div class="grid"></div>
    </body>
</html>