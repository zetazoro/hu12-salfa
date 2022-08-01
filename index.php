<!DOCTYPE html>
<html class="sapCpRuntime" lang="es">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./assets/cropped-favsalfa-180x180.png">
    <link type="text/css" rel="stylesheet" href="./sapContentPage.css">
    <script src="./sapContentPage.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <style>
        #Table tr td {
            border: 1px solid black;
        }
        .sapCpWidget {
          text-align: left;
      }
      .sapCpWidget input[type=text],
      .sapCpWidget input[type=email],
      .sapCpWidget input[type=tel],
      .sapCpDropDown,
      .sapCpTextArea
      {
        border-radius: 0px;
        padding: 10px 10px 10px 10px;
        border-color: #ccc;
        border-width: 1px;
    }
    .sapCpWidget input[type=checkbox] {
        display: inline-block;
        border-radius: 0px;
    }
    .sapCpCheckBox {
        margin-top: 0px;
    }
    .sapCpWidget input:not([type=checkbox]):not([type=radio]) {
        display: block;
        width: 100%;
    }
    .sapCpWidget label {
        color: #636466;
        margin-bottom: 0;
        text-align: left;
        display: inline-block;
    }
    .sapCpCheckBoxWidget label{
        vertical-align:baseline;
    }
    .sapCpWidget label.error {
        display: block;
        width: 100%;
        text-align: right;
        font-size: 1em;
        font-weight: normal;
        padding-right: 0;
    }
    div.sapCRLWidgetContent.sapCRLWidgetContentRight.sapCpWidgetContent.sapCpWidgetContentRight{
        padding-left:0%!important;
    }
    div.sapCRLWidgetContent.sapCRLWidgetContentLeft.sapCpWidgetContent.sapCpWidgetContentLeft{
        float: none;
        text-align: inherit;
    }
    .sapCpButtonWidget .sapCRLWidgetContent.sapCRLWidgetContentLeft.sapCpWidgetContent.sapCpWidgetContentLeft{
        min-width:0%!important;
        width:0% !important;
    }
    .sapCpButtonWidget .sapCRLWidgetContent.sapCRLWidgetContentRight.sapCpWidgetContent.sapCpWidgetContentRight,
    .sapCpButtonWidget .sapCRLWidgetContentNoIndent
    {
        min-width:100%!important;
        width:100% !important;
    }
    .sapCpButtonWidget .sapCpWidgetContent, .sapCpButtonWidget .sapCpWidgetContentNoIndent {
        text-align: left;
        margin-top: 20px;
    }
    .sapCpButton {
      border-radius: 5px;
      border-style: solid;
      border-color: #d8d8d8;
      color: #000;
      border-width: 1px;
      background: #F0F0F0;
      padding-top: 8px;
      padding-bottom: 8px;
      padding-left: 20px;
      padding-right: 20px;
      width: auto;
  }
  .sapCpButton:hover {
      background: #F0F0F0;
  }
  .sapCpContentPage .sapCpWidget {
    display: flex;
    flex-flow: wrap;
    align-items: center;
    justify-content: flex-start;
}
.sapCpContentPage .sapCpWidget label {
    min-width: 1%;
    text-align: left;
    padding-right: 1em;
}
.sapCpContentPage .sapCpWidget input[type=text] {
    flex: 1;
}
</style>
<title>Accelerador de Ventas - MKT</title>
</head>

<body class="sapCpBody cuerpo" >
    <form id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage" data-sap-cp-key="836DEEA19A6CA5374908EECBF7C0EC52C37573C9" class="sapCpContentPage sapCRLPage sapCpContentPageEditable sapCRLPageEditable formulario" data-sap-cp-lpkey="A8DB05BCAE594A1023B7AFC761885B18FBF35C46" data-sap-cp-prefill-data="true" data-sap-cp-progres-enabled="true" data-sap-cp-progres-max="1" data-sap-cp-version="22.0.3">
      <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L" data-sap-cp-key="5F20B6AE82BFB6E7ECDA1F960390069DB5000686" class="sapCpLayout sapCRLLayout sapCRLLayoutVertical sapCRLLayoutEditable">
        <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-0W" data-sap-cp-key="9C81DCE11567F54857E5526FECC83FBAFE708635" class="sapCpWidget sapCRLWidget sapCpTextWidget sapCpWidgetEditable sapCRLWidgetEditable" data-sap-cp-wprogres-enabled="false">
          <div class="sapCpWidgetContentNoIndent sapCRLWidgetContentNoIndent">
            <p>
              <strong>Para asegurar que nuestro vendedor lo contacte a la brevedad, nos gustaría que nos confirme su teléfono: </strong>
          </p>
      </div>
  </div>
  <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-1W" data-sap-cp-key="E9A1AF1DA52030B9DA166E4B92246C4BF49445D3" class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetMandatory sapCpWidgetEditable sapCRLWidgetEditable sapCpContactAttribute-TELNR_LONG" data-sap-cp-wprogres-enabled="false">
      <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" style="width:20%">
        <label id="__label82" class="sapCpLabel sapCpLabelRequired" for="__input16">Teléfono</label>
    </div>
    <div class="sapCpWidgetContent sapCpWidgetContentRight sapCRLWidgetContent sapCRLWidgetContentRight" style="padding-left:20%">
        <input id="__input16" class="sapCpInput" type="tel" value="+569" required="required" maxlength="30" data-sap-cp-validationmessage="El número de teléfono debe tener un símbolo de suma (+) y 5 o más dígitos.">
    </div>
    <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
</div>


<div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-8W" data-sap-cp-key="E9A1AF1DA52030B9DA166E4B92246C4BF49445D3" class="sapCpWidget sapCRLWidget sapCpButtonWidget" data-sap-cp-follow-up-action="01" data-sap-cp-wprogres-enabled="false">
    <div class="sapCpWidgetContent sapCRLWidgetContent "  ></div>
    <div class="sapCpWidgetContent sapCRLWidgetContent contenedor-btn">
        <div class="btn-center">
            <button id="__button162" class="sapCpButton btn-principal" type="button">Enviar</button>
        </div>
        <span id="__text366" class="sapCpText sapCpButtonWidgetExtraText sapCpMissingMandatoryFieldText sapCpMissingMandatoryFieldLabel">Rellene todos los campos correctamente.</span>
        <span id="__text367" class="sapCpText sapCpButtonWidgetExtraText sapCpErrorMessageText">Se ha producido un error técnico.</span>
        <span id="__text368" class="sapCpText sapCpButtonWidgetExtraText sapCpSuccessMessageText sapCpSuccessMessageLabel">Gracias por su envío.</span>
    </div>
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
    //alert("PUREBA");
    $("#__button162").click(function() {
        var url = window.location.href;
        var dataString = {"url":url};
        $.ajax({
            url: 'integracionC4C.php',
            type: "POST",
            data: dataString,
            asycn:false,

            success: function(data) {
                //document.getElementById('respuesta').innerHTML = data;

            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    });


    function checkRut(rut) {
        // Despejar Puntos
        var valor = rut.value.replace('.', '');
        // Despejar Guión
        valor = valor.replace('-', '');

        // Aislar Cuerpo y Dígito Verificador
        cuerpo = valor.slice(0, -1);
        dv = valor.slice(-1).toUpperCase();

        // Formatear RUN
        rut.value = cuerpo + '-' + dv

        // Si no cumple con el mínimo ej. (n.nnn.nnn)
        if (cuerpo.length < 7) {
            rut.setCustomValidity("RUT Incompleto");
            return false;
        }

        // Calcular Dígito Verificador
        suma = 0;
        multiplo = 2;

        // Para cada dígito del Cuerpo
        for (i = 1; i <= cuerpo.length; i++) {

            // Obtener su Producto con el Múltiplo Correspondiente
            index = multiplo * valor.charAt(cuerpo.length - i);

            // Sumar al Contador General
            suma = suma + index;

            // Consolidar Múltiplo dentro del rango [2,7]
            if (multiplo < 7) {
                multiplo = multiplo + 1;
            } else {
                multiplo = 2;
            }

        }

        // Calcular Dígito Verificador en base al Módulo 11
        dvEsperado = 11 - (suma % 11);

        // Casos Especiales (0 y K)
        dv = (dv == 'K') ? 10 : dv;
        dv = (dv == 0) ? 11 : dv;

        // Validar que el Cuerpo coincide con su Dígito Verificador
        if (dvEsperado != dv) {
            rut.setCustomValidity("RUT Inválido");
            return false;
        }

        // Si todo sale bien, eliminar errores (decretar que es válido)
        rut.setCustomValidity('');
    }

    $(function() {
        var requiredCheckboxes = $('input:checkbox[required]');
        requiredCheckboxes.change(function() {
            if (requiredCheckboxes.is(':checked')) {
                requiredCheckboxes.removeAttr('required');
            } else {

                requiredCheckboxes.attr('required', 'required');
            }
        });
    });

    var checkedInut = "";
    $("input:checkbox").on('click', function() {
        var $box = $(this);
        if ($box.is(":checked")) {

            checkedInut = $box.attr("data-description");
        }
    });

    function getDescription() {
        var checked = "Nota";
        var $box = $(this);
        if ($box.is(":checked")) {
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            return $(group).atrr("data-description");
        }

    }

</script>



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
