<?php
session_start();
$_SESSION['montoTrx'] = $_POST["montoTrx"];
$_SESSION['monedaTrx'] = $_POST["monedaTrx"];
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

    <body class="touch seleccion-principal" ontouchstart="">
        <form action="4-ingreso-clave.php" method="post">
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

                    <div class="menu-navegacion wancho-2 ">
                        <div class="menu-inner">
                            <ul>
                                <li class="item-menu fl">
                                    <a href="" class="bt bt-h active ac">
                                        <div class="bt-inner">
                                            <img class="vm" src="../static/images/bt-icon-1.png" width="70" height="50"> <br>
                                            Retira
                                        </div>
                                    </a>
                                </li>
                                <li class="item-menu fl">
                                    <a href="" class="bt bt-h  ac">
                                        <div class="bt-inner">
                                            <img class="vm" src="../static/images/consulta-img.png" width="70" height="50"> <br>
                                            Consulta
                                        </div>
                                    </a>
                                </li>
                                <li class="item-menu fr">
                                    <a href="" class="bt bt-h  ac">
                                        <div class="bt-inner">
                                            <img class="vm" src="../static/images/bt-icon-7.png" width="70" height="50"> <br>
                                            Claves y <br> Seguridad
                                        </div>
                                    </a>
                                </li>
                                <li id="SalaryAdvanceOption" class="item-menu fl">
                                    <a  class="bt bt-h ac">
                                        <div class="bt-inner">
                                            <img class="vm" src="../static/images/bt-icon-6.png" width="70" height="50"> <br>
                                            Adelanta <br> tu sueldo	
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <section class="p-main wancho-2">
                        <div class="page-title page-title-noimg ">
                            <div class="page-title-seccion ">
                                <div class="page-subtitle">
                                    Retira
                                </div>
                                <p class="al">
                                    Selecciona el tipo y nombre de cuenta de retiro
                                </p>
                            </div>
                            <div class="j-page-text">
                                <!--<p>
                                    <strong>Monto a retirar:</strong> S/  80
                                </p>-->
                            </div>
                        </div>

                        <div class="s560 clearfix ma mt40">
                            <div class="c45 fl">
                                <a href="#ibcontent-1" class="text-fancy bt ac mb10">
                                    <div class="bt-inner">
                                        Ahorro soles		
                                    </div>
                                </a>
                                <a href="#" class="bt ac mb10">
                                    <div class="bt-inner">
                                        Cta. Cte. Soles	
                                    </div>
                                </a>
                                <a href="#" class="bt ac mb10">
                                    <div class="bt-inner">
                                        Tarjeta de Crédito		
                                    </div>
                                </a>
                                <a href="#" class="bt ac mb10">
                                    <div class="bt-inner">
                                        CTS Soles		
                                    </div>
                                </a>									
                            </div>
                            <div class="c45 fr">
                                <a href="#" class="bt ac mb10">
                                    <div class="bt-inner">
                                        Ahorro Dólares	
                                    </div>
                                </a>
                                <a href="#" class="bt ac mb10">
                                    <div class="bt-inner">
                                        Cta. Cte. Dólares
                                    </div>
                                </a>
                                <a href="#" class="bt ac mb10">
                                    <div class="bt-inner">
                                        Tarjeta Prepago	
                                    </div>
                                </a>
                                <a href="#" class="bt ac mb10">
                                    <div class="bt-inner">
                                        CTS Dólares	
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="abs b0 l15">
                            <div class="ib">
                                <a href="" class="bt bt-fl ac">
                                    <div class="bt-inner">
                                        <img class="vm" src="../static/images/icon-x.png" width="15" height="15">
                                        Sacar tarjeta  

                                    </div>
                                </a>	
                            </div>
                        </div>
                    </section>

                    <!-- FancyBox -->

                    <div style="display: none">
                        <div id="ibcontent-1" class="fancy-main">
                            <div class="inner-fancy pt70 pb80 pl45 pr45">
                                <a class="close-fancy" onclick="$.fancybox.close();">
                                    <img src="../static/images/icon-cerrar-blue.png" width="30" height="31">
                                </a>
                                <div class="parrafo-resumen ac mb50 cceleste">
                                    <p>
                                        Selecciona la cuenta de retiro
                                    </p>
                                </div>
                                <div class="clearfix">
                                    <div class="w315 fl">
                                        <a href="#" onclick="javascript:document.forms[0].submit()" class="bt b-large ac mb15">
                                            <div class="bt-inner">
                                                Sueldo Soles	
                                            </div>
                                        </a>

                                    </div>
                                    <div class="w315 fr">
                                        <a href="#" class="bt b-large ac mb15">
                                            <div class="bt-inner">
                                                Millonaria -8876
                                            </div>
                                        </a>

                                    </div>		
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display: none">
                        <div id="ibcontent-1" class="fancy-main">
                            <div class="inner-fancy pt70 pb80">
                                <a class="close-fancy" onclick="$.fancybox.close();">
                                    <img src="../static/images/icon-cerrar-blue.png" width="30" height="31">
                                </a>
                                <div class="parrafo-resumen ac mb50">
                                    <p>
                                        Selecciona la cuenta de retiro
                                    </p>
                                </div>
                                <div class="s600 clearfix ma">
                                    <div class="c45 fl">
                                        <a href="5-procesando-operacion.php" class="bt b-large ac mb15">
                                            <div class="bt-inner">
                                                Sueldo Soles	
                                            </div>
                                        </a>

                                    </div>
                                    <div class="c45 fr">
                                        <a href="" class="bt b-large ac mb15">
                                            <div class="bt-inner">
                                                Millonaria -8876
                                            </div>
                                        </a>

                                    </div>		
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <script type="text/javascript">
            </script>

            <script type="text/javascript" src="../static/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
            <script src="../static/js/main.js" type="text/javascript"></script>
            <script type="text/javascript">

            </script>
            <div class="grid"></div>
        </form>
    </body>
</html>