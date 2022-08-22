<!DOCTYPE html>
<html class="sapCpRuntime" lang="es">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="./sapContentPage.css">
    <script src="./sapContentPage.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>Formulario Renovación HU_12 Extendido</title>
  </head>
  <body class="sapCpBody">
    <form id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage" data-sap-cp-key="0DFEFAFF2FE8FD3A718649D96245DE40152FD031" class="sapCpContentPage sapCRLPage sapCpContentPageLoading" data-sap-cp-lpkey="" data-sap-cp-prefill-data="true" data-sap-cp-progres-enabled="true" data-sap-cp-progres-max="1" data-sap-cp-version="23.0.3">
      <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L" data-sap-cp-key="C7C496D98534EA1646F8400F2FB91D445C63E052" class="sapCpLayout sapCRLLayout sapCRLLayoutVertical">
        <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-0W" data-sap-cp-key="CFE3EAF40C88E02D433589DEE9291713BE106550" class="sapCpWidget sapCRLWidget sapCpTextWidget" data-sap-cp-wprogres-enabled="false">
          <div class="sapCpWidgetContentNoIndent sapCRLWidgetContentNoIndent">
            <p>
              <strong>Para asegurar que nuestro vendedor lo contacte a la brevedad, nos gustaría que nos confirme su teléfono: </strong>
            </p>
          </div>
        </div>
        <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-1W" data-sap-cp-key="C35F2B82A2CD1E0B32C709BD2EE7328626F6D2A6" class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetMandatory sapCpContactAttribute-TELNR_LONG" data-sap-cp-wprogres-enabled="false">
          <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" style="width:20%">
            <label id="__label14" class="sapCpLabel sapCpLabelRequired" for="__input5">Teléfono</label>
          </div>
          <div class="sapCpWidgetContent sapCpWidgetContentRight sapCRLWidgetContent sapCRLWidgetContentRight" style="padding-left:20%">
            <input id="__input5" class="sapCpInput" type="tel" value="+569" required="required" maxlength="30" data-sap-cp-validationmessage="El número de teléfono debe tener un símbolo de suma (+) y 5 o más dígitos.">
          </div>
          <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
        </div>
        <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-2W" data-sap-cp-key="38D098F13F5DE68CC3F7BE81E0A0A685943F0184" class="sapCpWidget sapCRLWidget sapCpButtonWidget" data-sap-cp-follow-up-action="01" data-sap-cp-wprogres-enabled="false">
          <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" style="width:20%"></div>
          <div class="sapCpWidgetContent sapCpWidgetContentRight sapCRLWidgetContent sapCRLWidgetContentRight" style="padding-left:20%">
            <button id="__button30" class="sapCpButton" type="button">Enviar</button>
            <span id="__text340" class="sapCpText sapCpButtonWidgetExtraText sapCpMissingMandatoryFieldText sapCpMissingMandatoryFieldLabel">Rellene todos los campos correctamente.</span>
            <span id="__text341" class="sapCpText sapCpButtonWidgetExtraText sapCpErrorMessageText">Se ha producido un error técnico.</span>
            <span id="__text342" class="sapCpText sapCpButtonWidgetExtraText sapCpSuccessMessageText sapCpSuccessMessageLabel">Gracias por su envío.</span>
          </div>
          <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
        </div>
      </div>
    </form>
  </body>
  <script type="text/javascript">
  	$("#__button30").click(function() {
        var url = window.location.href;
        var dataString = {"url":url};
        $.ajax({
            url: 'integracionC4C.php',
            type: "POST",
            data: dataString,
            asycn:false,

            success: function(data) {

            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    });
  </script>
</html>