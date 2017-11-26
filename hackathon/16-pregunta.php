<?php
session_start();
$numeroDocumento = $_POST['numeroDocumento1'] . $_POST['numeroDocumento2'] . $_POST['numeroDocumento3'] . $_POST['numeroDocumento4'] . $_POST['numeroDocumento5'] . $_POST['numeroDocumento6'] . $_POST['numeroDocumento7'] . $_POST['numeroDocumento8'];
$_SESSION['numeroDocumento'] = $numeroDocumento;
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
        <div class="wrapper">
            <header class="wancho-2">
                <div id="header">
                    <div class="logo"></div>
                </div>
            </header>
            <section class="wancho-2">
                <div class="ac mt20 txtnormal size50">
                    <br/><br>
                    ¿Deseas crear una cuenta<br/>
                    para realizar al abono de los <?php echo $_SESSION['montoTrx'] . " " . $_SESSION['monedaTrx'] ;?>?<br/><br/><br> 					
                </div>
                <div class="ac mt40">
                    <form> 
                        <div class="txtnormal size35 skyblue mb15">

                        </div>               	                                           
                    </form>
                </div>
            </section>
            <div id="buttons">
                <div>                	
                    <a href="18-confirmacion-reclamo.php" class="bt b-left pos4 al">
                        <div class="bt-inner">
                            Por ahora no		
                        </div>
                    </a>
                    <a href="17-confirmacion-cuenta.php" class="bt b-right pos4 ar">
                        <div class="bt-inner">
                            Confirmar
                        </div>
                    </a> 
                </div>
            </div>
        </div>
    </div>

</body>
</html>