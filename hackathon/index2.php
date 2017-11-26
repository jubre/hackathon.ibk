<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <title>Interbank</title>
        <link rel="stylesheet" type="text/css" href="static-4/css/styles.css"/>
        <!--[if lt IE 9]>
                <script src="static-4/js/html5.js"></script>
                <script src="static-4/js/respond.js" type="text/javascript"></script>
                <link rel="stylesheet" type="text/css" href="static-4/css/ie.css"/>
        <![endif]-->

        <script src="../static/js/jquery1.8.3.min.js" type="text/javascript"></script>
        
        <script type="text/javascript">            
            $(window).load(function () {
                $("#password").focus();
            });
            
            function ProcesarFormulario() {
                if($("#password").val().length == 3){
                    $(location).attr('href', '12-touch-titular-8-opcs.php')
                }
            }            
        </script>
    </head>

    <body class="">
        <div class="cnt-wrapper">
            <div class="wrapper">
                <div class="main-cajero" style="background-image:url('static-4/images/bg-ingreso.jpg')">
                    <div class="page-titulo">
                        <h1 class="titulo-text">
                            Ingresa tu clave secreta y <br>
                            presiona la tecla en 
                            <strong>CONTINUAR </strong>
                        </h1>
                    </div>
                    <div class="page-parrafo-sugerencia c60 pl50 mt140">
                        <div class="main-form w480">
                            <div class="borde-sup"></div>
                            <div class="item-input ">
                                <input class="input-box" type="password" id="password" name="password" onkeypress="javascript:ProcesarFormulario();">
                            </div>
                            <br/>
                        </div>
                        <p>
                            Por tu seguridad, no dejes que vean tu clave secreta, ni aceptes la ayuda de
                            extraños.
                        </p>
                    </div>
                </div> 
            </div>
        </div>
        <script src="static-4/js/jquery1.8.3.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        </script>
        <script src="static-4/js/main.js" type="text/javascript"></script>

        <div class="grid"></div>
    </body>
</html>