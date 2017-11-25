<?php
session_start();
echo var_dump($_SESSION);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
    <body class="touch " ontouchstart="">
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

                <section class="c-main wancho-2">

                    <div class="c-texto1 text-error -solo mt200">
                        <span></span>
                        <p class="vm">
                            Tu operación ha sido cancelada. Por favor,<br>
                            retira tu tarjeta.
                        </p>
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