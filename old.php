<!DOCTYPE html>
<html class="sapCpRuntime" lang="es">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="./sapContentPage.css">
    <script src="./sapContentPage.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>Formulario Renovación HU_12</title>
</head>


<body class="sapCpBody cuerpo">
    <form id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage"
        action="integrationScript.php" method="POST"
        data-sap-cp-key="836DEEA19A6CA5374908EECBF7C0EC52C37573C9"
        class="sapCpContentPage sapCRLPage sapCpContentPageLoading formulario" data-sap-cp-lpkey="" data-sap-cp-prefill-data="true"
        data-sap-cp-progres-enabled="true" data-sap-cp-progres-max="1" data-sap-cp-version="20.0.5">

        <div style="display: flex; justify-content: center; margin-bottom: 50px;">
            <img src="./assets/5774fcbd-8e46-4be1-babf-ea0d892eb853.png" style="width: 200px;">
        </div>


        <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L"
            data-sap-cp-key="F0E7C2723950C6144B59C8A9C09A1DE1E66BA351"
            class="sapCpLayout sapCRLLayout sapCRLLayoutVertical">
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-0W"
                data-sap-cp-key="50858D431266F0FEACB518B3766E90F943A57FA7"
                class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetMandatory sapCpContactAttribute-TELNR_MOBILE"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    ><label id="__label44" class="sapCpLabel sapCpLabelRequired input-lbl"
                        for="__input21" style="margin-top: 10px; width: 100px !important; font-size: 19px;">Teléfono</label></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <input id="__input21" class="sapCpInput txt-input" type="tel" value="+569" required="required" maxlength="12"
                        data-sap-cp-validationmessage="El número de teléfono debe tener un símbolo de suma (+) y 5 o más dígitos." style="font-size: 19px;">
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-1W"
                data-sap-cp-key="1A1A2F91E0B5E511E30F36256F0A3CC083EA3EE9"
                class="sapCpWidget sapCRLWidget sapCpTextWidget" data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContentNoIndent sapCRLWidgetContentNoIndent">
                    <p style="text-align: left"><span><strong> <span class="instrucciones">Selecciona solo una opción para renovar</span></strong></span>
                    </p>
                </div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-2W"
                data-sap-cp-key="D74E95E1F9EC30710711C4D2ECA81D35BFDF71B2"
                class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetHidden sapCpCInteractionAttribute-YY1_RENOVACION1_MIA sapCpContactAttribute-"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    ><label id="__label45" class="sapCpLabel" for="__down14">Renovación</label></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <select id="__down14" class="sapCpDropDown">
                        <option label="Interesado" value="101" selected="selected">Interesado</option>
                        <option label=" " value=""> </option>
                    </select></div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-3W"
                data-sap-cp-key="FCE31ECF6825228F2A1987B1E58322C8E42639C7"
                class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetHidden sapCpCInteractionAttribute-YY1_RENOVACION1_MIA sapCpContactAttribute-"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    ><label id="__label46" class="sapCpLabel" for="__down15">No quiero
                        renovación</label></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <select id="__down15" class="sapCpDropDown">
                        <option label="No Interesado" value="102" selected="selected">No Interesado</option>
                        <option label=" " value=""> </option>
                    </select></div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-4W"
                data-sap-cp-key="BD7DDD369D56438A992A1E2EC503A0C5940CF026"
                class="sapCpWidget sapCRLWidget sapCpInteractionWidget sapCpCheckBoxElementWidget"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    ></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <div id="__box14" class="sapCpCheckBox"><input type="checkbox"class="radio" name="fooby[1][]" value="1"></div><label id="__label47"
                        class="sapCpLabel sapCpLabelRequiredBefore" style="font-size: 19px !important;">Me interesa renovar mi vehículo</label>
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-5W"
                data-sap-cp-key="65ADB1C153CCB72097446C54F01003A7EE016036"
                class="sapCpWidget sapCRLWidget sapCpInteractionWidget sapCpCheckBoxElementWidget"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    ></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <div id="__box15" class="sapCpCheckBox"><input type="checkbox"class="radio" name="fooby[1][]" value="1"></div><label id="__label48"
                        class="sapCpLabel sapCpLabelRequiredBefore" style="font-size: 19px !important;">No quiero la Renovación</label>
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-6W"
                data-sap-cp-key="66B738736CC16FBAD97C529608256BC5ADED0A5E"
                class="sapCpWidget sapCRLWidget sapCpButtonWidget" data-sap-cp-follow-up-action="02"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    ></div>
                <div class="sapCpWidgetContent sapCRLWidgetContent sapCRLWidgetContentLeft contenedor-btn">
                    <button id="__button46" class="sapCpButton btn-principal" type="button">Enviar</button><span id="__text435"
                        class="sapCpText sapCpButtonWidgetExtraText sapCpMissingMandatoryFieldText sapCpMissingMandatoryFieldLabel">Rellene
                        todos los campos correctamente.</span><span id="__text436"
                        class="sapCpText sapCpButtonWidgetExtraText sapCpErrorMessageText">Se ha producido un error
                        técnico.</span><span id="__text437"
                        class="sapCpText sapCpButtonWidgetExtraText sapCpSuccessMessageText sapCpSuccessMessageLabel">Gracias
                        por confirmar</span></div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
        </div>


        <div style="min-width: 100%;">
            <img src="assets/7dd2a8da-76a9-4a75-82ba-8fc990870f3c.png" style="width: 100%; object-fit: contain;">

            <div>
                <table class="container" width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="height:auto;max-width:600px;min-width:320px;background-color:#ffffff;">
                    <tbody>
                        <tr>
                            <td style="background-color:#ffffff;padding:3% 5%;" bgcolor="#ffffff">
                                <table class="container" width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="height:auto;max-width:600px;min-width:320px;">
                                    <tbody>
                                        <tr>
                                            <td align="left">
                                                <a href="https://www.facebook.com/Salfachile">
                                                <img src="./assets/1612227d-dd70-4b80-bf9b-a7874ea4f689.png" width="23" alt="Facebook"></a>
                                            </td>
                                            <td align="left">
                                                <a href="https://www.instagram.com/salfachile/">
                                                <img src="./assets/f91d82f8-8a65-46f3-aa5b-545abaf27ad3.png" width="23" alt="Instagram"></a>
                                            </td>
                                            <td align="left">
                                                <a href="https://www.youtube.com/user/SalfaChile">
                                                <img src="./assets/da008e5e-2941-4576-b9f7-8e2df5d0c2a8.png" width="23" alt="Youtube"></a>
                                            </td>

                                            <td width="50%" class="footerSpaceRrss">
                                                &nbsp;
                                            </td>
                                            <td align="right" width="30%">
                                                <img src="./assets/6cc0f022-1988-4738-90a4-4b11c10b2a8b.png" alt="Salfa" width="100" style="margin-right: 20px;">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color:#EDEDED;padding:3% 5%;" bgcolor="#EDEDED">
                                <table class="container" width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="height:auto;max-width:600px;min-width:320px;">
                                    <tbody>
                                        <tr>
                                            <td align="right" width="30%" style="font-family:Arial, Helvetica, sans-serif;font-size:12px;text-align:left;white-space: nowrap;">
                                                Revisa nuestras <br>sucursales: <br>
                                                <a href="https://www.salfa.cl/" style="text-decoration:none;color:#002E5A;">
                                                    <strong style="font-size:18px;">salfa.cl</strong>
                                                </a>
                                            </td>

                                            <td width="60%" class="footerSpace">
                                                &nbsp;
                                            </td>
                                            <td style="font-size:12px;">
                                                <div style="text-align: right; margin-right: 30px !important;">
                                                    <span>Contáctanos al:</span>
                                                </div>
                                                <a href="tel:6003606200" style="text-decoration:none;color:#002E5A;">
                                                    <strong style="font-size:18px; white-space: nowrap; margin-right: 30px;">600 360 6200</strong>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family:Arial, Helvetica, sans-serif;font-size:10px;color:#757575;text-align:center;padding-top:20px;padding-left:30px;padding-right:30px;">
                                <span style="text-transform: uppercase; font-size: 13px;"></span>
                                Copyright © 2021 Salfa, Todos los derechos reservados. <br>
                                Usted está recibiendo este correo electrónico como cliente Salfa. <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>


    </form>
</body>



<script>
    $("input:checkbox").on('click', function() {
      var $box = $(this);
      if ($box.is(":checked")) {
        var group = "input:checkbox[name='" + $box.attr("name") + "']";
        $(group).prop("checked", false);
        $box.prop("checked", true);
      } else {
        $box.prop("checked", false);
      }
    });
</script>



</html>
