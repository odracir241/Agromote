<!DOCTYPE html>
<html><!--HTML5 doctype-->

<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta http-equiv="Pragma" content="no-cache">
<script type="text/javascript" charset="utf-8" src="intelxdk.js"></script>
<script type="text/javascript" language="javascript">
    var isIntel=window.intel&&window.intel.xdk
    // This event handler is fired once the intel libraries are ready
    function onDeviceReady() {
        //hide splash screen now that our app is ready to run
        intel.xdk.device.hideSplashScreen();
        setTimeout(function () {
            $.ui.launch();
        }, 50);
    }
    //initial event handler to detect when intel is ready to roll
    document.addEventListener("intel.xdk.device.ready", onDeviceReady, false);
</script>
<script src="js/appframework.ui.min.js"></script>
<script>
    if(isIntel)
        $.ui.autoLaunch = false;
    $.ui.useOSThemes = true; //Change this to false to force a device theme
    $.ui.blockPageScroll();
    $(document).ready(function () {
        if ($.ui.useOSThemes && (!$.os.ios||$.os.ios7))
            $("#afui").removeClass("ios");
    });
</script>
<link href="css/icons.css" rel="stylesheet" type="text/css">
<link href="css/af.ui.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="afui" class="ios">
    <div id="header" class="header"></div>
    <div id="content" style="">
        <div class="panel" title="Principal" id="main" selected="selected" style="" data-appbuilder-object="page">




            <div class="container" style="width: 100%; height: 100px; margin: 0px auto;" data-appbuilder-object="container">
                <img src="images/logo.png" style="width: auto; height: auto; margin: 0px auto; max-width: 500px; max-height: 50px;"
                alt="Title" data-appbuilder-object="image" class="" title="">
            </div>




            <form style="width: 100%; min-height: 50px; position: relative;" action="validarLo.php"
            method="POST" data-appbuilder-object="form" class="">
                <div class="container" style="width: 300px; margin: 0px auto; position: relative;"
                data-appbuilder-object="container">
                    <div class="input_element form_element" style="width:100%;overflow:hidden" data-appbuilder-object="input">
                        <label for="">Correo</label>
                        <input type="email" style="float:left;" id="" placeholder="Introduzca Correo" required="">
                    </div>
                </div>
                <div class="container" style="width: 300px; margin: 0px auto; position: relative;"
                data-appbuilder-object="container">
                    <div class="input_element form_element" style="width: 100%; overflow: hidden;"
                    data-appbuilder-object="input">
                        <label for="">Contraseña</label>
                        <input type="Password" style="float:left;" id="" placeholder="Introduzca Contraseña"
                        required="">
                    </div>
                </div>
                <div class="container" style="width: 170px; margin: 0px auto; position: relative;"
                data-appbuilder-object="container">
                    <input class="button" data-appbuilder-object="button" type="submit" value="Iniciar">
                    <input class="button" data-appbuilder-object="button" type="submit" formaction="registro.html"
                    formmethod="GET" value="Registro">
                </div>
            </form>
        </div>
        <div class="panel" title="Unidades" id="page_1" data-appbuilder-object="page" style=""></div>
        <div class="panel" title="Registro" id="page_2" data-appbuilder-object="page" style=""></div>
    </div>
    <div id="navbar" class="footer">
        <a href="index.html" class="icon home">INICIO</a>
    </div>


</div>
</body>





</html>