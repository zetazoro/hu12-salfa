<!DOCTYPE html>
<html class="sapCpRuntime" lang="es">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="./sapContentPage.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./sapContentPage.js"></script>
<title>Formulario LP Extendido</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap');
	body, html {
  height: 100%;
		width: 100%;
		margin: 0px;
		font-family:'Open Sans', Helvetica, Arial, sans-serif;
}

.bg {
  /* The image used */
  background: url('https://smc-content.s4hana.ondemand.com/smd-b40b51bea.us1/public/dl?shr=dWkcBAreIZ1FO3QCjK-i5_UoVwM1AolK7f-PmZMmoRI&obj=H2vfUWHt6h07NSA-CFoknDkHKq9P4tl3tVMq-TuSFy4')no-repeat top center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	height: 100%;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.myBackground.jpg', sizingMethod='scale');
-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='myBackground.jpg', sizingMethod='scale')";

}
		.opaco{
			background-color: rgba(0,0,0,.51);
			height: 100%;
			text-align: center;
			display: block;
			padding: 15px;
			width: 100%;
		}
		.formulario-especial{
			margin: auto;
			width: auto;
			display: block;
			color: #FFF;
			border: 1px solid #ffffff40;
			border-radius: 5px;
			max-width: 450px;
			
		}
		.alinear{
			padding: 15px;
		}
		.alinear>div{
			display: flex;
			justify-content: center;
			margin-bottom: 10px;
		}
		img.cabecera-form{
			max-width: 285px;
			height: auto;
			display: block;
			margin: auto;
			
		}
		p{
			font-size: 18px;
			font-weight: 600;
			text-align: center;
			color: #fff;
		}
		.top-form{
			max-width: 720px;
			padding: 30px;
			margin: auto;
			display: block;
		}
		input[type=text], input[type=tel], input[type=email], select{
		padding: 5px;
		}
		.border-removed-input {
  border: 0;
}
		button {

  /* remove default behavior */
  appearance:none;
  -webkit-appearance:none;

  /* usual styles */
  padding:25px 25pxs;
  border:none;
  background-color:#ffffff;
  color:#606060;
  font-weight:600;
  border-radius:5px;
  width:80px;
			display: block;
			margin: 20px auto;
			height: 30px;

}
		
		@media only screen and (max-width:759px){
			.opaco{
				display: inline-table;
				padding: 0px;
				text-align: unset;
			}
			.formulario-especial{
				padding: 10px;
				display: block;
				margin: auto;
			}
			.alinear{
				padding: 0px;
			}
		.alinear>div {
    display: block;
			width:auto; 
}
			.formulario-especial>div>div>div:first-child{
				width: 100%!important;
				text-align: left!important;
			}
			input[type=text], input[type=tel], input[type=email], select{
		width: 90%;
		}
			.top-form{
				padding: 10px;
				max-width: min-content;
			}
		}
	</style>
</head>
<body class="sapCpBody bg">
	<div class="opaco">
		<div class="top-form">
		<img src="https://salfablobshare.file.core.windows.net/marketing/MKT_Cloud/Logo_Salfa_blanco.png?sv=2020-08-04&ss=bf&srt=sco&sp=rwdlacitfx&se=2027-02-16T02:31:40Z&st=2022-02-15T18:31:40Z&spr=https&sig=VpAf5Jxupy9gI6TrvCTkCGcE7uip8JAkvPAmANofdzA%3D" class="cabecera-form">
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
		</div>
<form id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage" data-sap-cp-key="016E1980D91FFAB58E1DFB4A8317E617271F9E38" class="sapCpContentPage sapCRLPage sapCpContentPageLoading formulario-especial" data-sap-cp-lpkey="" data-sap-cp-prefill-data="true" data-sap-cp-progres-enabled="false" data-sap-cp-version="23.0.3">
  <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L" data-sap-cp-key="DED10E3BD9669B59D80675617BF202E8DD39AF41" class="sapCpLayout sapCRLLayout sapCRLLayoutVertical alinear">
    <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-0W" data-sap-cp-key="9379C5F68E52EA4CAE3DBA7B7791945DAF7B54ED" class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpContactAttribute-NAME_FIRST" data-sap-cp-wprogres-enabled="false">
      <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" style="width: 40%;text-align: right;margin-right: 20px;">
        <label id="__label76" class="sapCpLabel" for="__input63">Nombre</label>
      </div>
      <div class="sapCpWidgetContent sapCpWidgetContentRight sapCRLWidgetContent sapCRLWidgetContentRight" style="padding-left:20%">
        <input id="__input63" class="sapCpInput" type="text" maxlength="40">
      </div>
      <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
    </div>
    <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-1W" data-sap-cp-key="979EC2EA31F93C6C0C245B4502E3235D365DA965" class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpContactAttribute-NAME_LAST" data-sap-cp-wprogres-enabled="false">
      <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" style="width: 40%;text-align: right;margin-right: 20px;">
        <label id="__label77" class="sapCpLabel" for="__input64">Apellido</label>
      </div>
      <div class="sapCpWidgetContent sapCpWidgetContentRight sapCRLWidgetContent sapCRLWidgetContentRight" style="padding-left:20%">
        <input id="__input64" class="sapCpInput" type="text" maxlength="40">
      </div>
      <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
    </div>
    <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-2W" data-sap-cp-key="1AC5770F354A373CCA9ED9B5A17596122CEB0867" class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpContactAttribute-COMPANY_NAME" data-sap-cp-wprogres-enabled="false">
      <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" style="width: 40%;text-align: right;margin-right: 20px;">
        <label id="__label78" class="sapCpLabel" for="__input65">Nombre de empresa</label>
      </div>
      <div class="sapCpWidgetContent sapCpWidgetContentRight sapCRLWidgetContent sapCRLWidgetContentRight" style="padding-left:20%">
        <input id="__input65" class="sapCpInput" type="text" maxlength="40">
      </div>
      <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
    </div>
    <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-3W" data-sap-cp-key="D2D2BEBEE88B12E659CD3D98B7A3E4569F6936CA" class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpContactAttribute-YY1_RUT_ENH" data-sap-cp-wprogres-enabled="false">
      <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" style="width: 40%;text-align: right;margin-right: 20px;">
        <label id="__label79" class="sapCpLabel" for="__input66">RUT</label>
      </div>
      <div class="sapCpWidgetContent sapCpWidgetContentRight sapCRLWidgetContent sapCRLWidgetContentRight" style="padding-left:20%">
        <input id="__input66" class="sapCpInput" type="text" maxlength="10">
      </div>
      <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
    </div>
    <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-4W" data-sap-cp-key="E71221250AD2CF457477C414D76952372B01EF56" class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpContactAttribute-TELNR_MOBILE" data-sap-cp-wprogres-enabled="false">
      <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" style="width: 40%;text-align: right;margin-right: 20px;">
        <label id="__label80" class="sapCpLabel" for="__input67">Teléfono </label>
      </div>
      <div class="sapCpWidgetContent sapCpWidgetContentRight sapCRLWidgetContent sapCRLWidgetContentRight" style="padding-left:20%">
        <input id="__input67" class="sapCpInput" type="tel" maxlength="30" data-sap-cp-validationmessage="El número de teléfono debe tener un símbolo de suma (+) y 5 o más dígitos.">
      </div>
      <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
    </div>
    <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-5W" data-sap-cp-key="F5920FB7FAF35237CFEEDE6D37518ACDD2D5B8A1" class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpContactAttribute-SMTP_ADDR" data-sap-cp-wprogres-enabled="false">
      <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" style="width: 40%;text-align: right;margin-right: 20px;">
        <label id="__label81" class="sapCpLabel" for="__input68">Correo</label>
      </div>
      <div class="sapCpWidgetContent sapCpWidgetContentRight sapCRLWidgetContent sapCRLWidgetContentRight" style="padding-left:20%">
        <input id="__input68" class="sapCpInput" type="email" maxlength="241" data-sap-cp-validationmessage="La dirección de correo electrónico debe tener @ y un punto, por ejemplo: usuario@ejemplo.com">
      </div>
      <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
    </div>
    <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-6W" data-sap-cp-key="22A24777F16D38899432A7C59F0A6D0BD4DAF3BA" class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpContactAttribute-YY1_COMUNA_ENH" data-sap-cp-wprogres-enabled="false">
      <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" style="width: 40%;text-align: right;margin-right: 0px;">
        <label id="__label82" class="sapCpLabel" for="__down9">Comuna </label>
      </div>
      <div class="sapCpWidgetContent sapCpWidgetContentRight sapCRLWidgetContent sapCRLWidgetContentRight" style="padding-left:20%">
        <select id="__down9" class="sapCpDropDown">
          <option label=" " value="" selected="selected"> </option>
          <option label="Algarrobo" value="00579">Algarrobo</option>
          <option label="Alhué" value="13336">Alhué</option>
          <option label="Alto Bío-Bío" value="08346">Alto Bío-Bío</option>
          <option label="Alto del Carmen" value="00328">Alto del Carmen</option>
          <option label="Alto Hospicio" value="01343">Alto Hospicio</option>
          <option label="Ancud" value="10257">Ancud</option>
          <option label="Andacollo" value="00432">Andacollo</option>
          <option label="Angol" value="09197">Angol</option>
          <option label="Antártica" value="12290">Antártica</option>
          <option label="Antofagasta" value="00216">Antofagasta</option>
          <option label="Antuco" value="08169">Antuco</option>
          <option label="Arauco" value="08191">Arauco</option>
          <option label="Arica" value="00151">Arica</option>
          <option label="Aysén" value="11272">Aysén</option>
          <option label="Buin" value="13330">Buin</option>
          <option label="Bulnes" value="16373">Bulnes</option>
          <option label="Cabildo" value="00546">Cabildo</option>
          <option label="Cabo de Hornos" value="12291">Cabo de Hornos</option>
          <option label="Cabrero" value="08167">Cabrero</option>
          <option label="Calama" value="00213">Calama</option>
          <option label="Calbuco" value="10250">Calbuco</option>
          <option label="Caldera" value="00323">Caldera</option>
          <option label="Calera" value="00561">Calera</option>
          <option label="Calera de Tango" value="13332">Calera de Tango</option>
          <option label="Calle Larga" value="00551">Calle Larga</option>
          <option label="Camarones" value="00152">Camarones</option>
          <option label="Camiña" value="00017">Camiña</option>
          <option label="Canela o Mincha" value="00443">Canela o Mincha</option>
          <option label="Cañete" value="08194">Cañete</option>
          <option label="Carahue" value="09224">Carahue</option>
          <option label="Cartagena" value="00576">Cartagena</option>
          <option label="Casablanca" value="00572">Casablanca</option>
          <option label="Castro" value="10256">Castro</option>
          <option label="Catemu" value="00558">Catemu</option>
          <option label="Cauquenes" value="07142">Cauquenes</option>
          <option label="Cerrillos" value="13315">Cerrillos</option>
          <option label="Cerro Navia" value="13320">Cerro Navia</option>
          <option label="Chaitén" value="10266">Chaitén</option>
          <option label="Chanco" value="07144">Chanco</option>
          <option label="Chañaral" value="00320">Chañaral</option>
          <option label="Chépica" value="06103">Chépica</option>
          <option label="Chiguayante" value="08189">Chiguayante</option>
          <option label="Chile Chico" value="11275">Chile Chico</option>
          <option label="Chillán" value="16374">Chillán</option>
          <option label="Chillán Viejo" value="16375">Chillán Viejo</option>
          <option label="Chimbarongo" value="06100">Chimbarongo</option>
          <option label="Chiu Chiu" value="02365">Chiu Chiu</option>
          <option label="Chol-Chol" value="09363">Chol-Chol</option>
          <option label="Chonchi" value="10263">Chonchi</option>
          <option label="Cisnes" value="11273">Cisnes</option>
          <option label="Cobquecura" value="16366">Cobquecura</option>
          <option label="Cochamó" value="10249">Cochamó</option>
          <option label="Cochrane" value="11277">Cochrane</option>
          <option label="Codegua" value="00685">Codegua</option>
          <option label="Coelemu" value="16367">Coelemu</option>
          <option label="Coihueco" value="16382">Coihueco</option>
          <option label="Coinco" value="00696">Coinco</option>
          <option label="Colbún" value="07136">Colbún</option>
          <option label="Colchane" value="00018">Colchane</option>
          <option label="Colina" value="13323">Colina</option>
          <option label="Collipulli" value="09199">Collipulli</option>
          <option label="Coltauco" value="00695">Coltauco</option>
          <option label="Combarbalá" value="00438">Combarbalá</option>
          <option label="Concepción" value="08179">Concepción</option>
          <option label="Conchalí" value="13293">Conchalí</option>
          <option label="Concon" value="00573">Concon</option>
          <option label="Constitución" value="07132">Constitución</option>
          <option label="Contulmo" value="08195">Contulmo</option>
          <option label="Copiapó" value="00322">Copiapó</option>
          <option label="Coquimbo" value="00431">Coquimbo</option>
          <option label="Coronel" value="08347">Coronel</option>
          <option label="Corral" value="14233">Corral</option>
          <option label="Coyhaique" value="11270">Coyhaique</option>
          <option label="Cunco" value="09212">Cunco</option>
          <option label="Curacautín" value="09201">Curacautín</option>
          <option label="Curacaví" value="13335">Curacaví</option>
          <option label="Curaco de Vélez" value="10260">Curaco de Vélez</option>
          <option label="Curanilahue" value="08192">Curanilahue</option>
          <option label="Curarrehue" value="09214">Curarrehue</option>
          <option label="Curepto" value="07133">Curepto</option>
          <option label="Curicó" value="07115">Curicó</option>
          <option label="Dalcahue" value="10259">Dalcahue</option>
          <option label="Diego de Almagro" value="0321">Diego de Almagro</option>
          <option label="Doñihue" value="00697">Doñihue</option>
          <option label="El Bosque" value="13311">El Bosque</option>
          <option label="El Carmen" value="16376">El Carmen</option>
          <option label="El Monte" value="13341">El Monte</option>
          <option label="El Quisco" value="00578">El Quisco</option>
          <option label="El Tabo" value="00577">El Tabo</option>
          <option label="Empedrado" value="07130">Empedrado</option>
          <option label="Ercilla" value="09202">Ercilla</option>
          <option label="Estacion Central" value="13314">Estacion Central</option>
          <option label="Florida" value="08183">Florida</option>
          <option label="Freire" value="09217">Freire</option>
          <option label="Freirina" value="00326">Freirina</option>
          <option label="Fresia" value="10253">Fresia</option>
          <option label="Frutillar" value="10255">Frutillar</option>
          <option label="Futaleufú" value="10268">Futaleufú</option>
          <option label="Futrono" value="14232">Futrono</option>
          <option label="Galvarino" value="09226">Galvarino</option>
          <option label="General Lagos" value="00154">General Lagos</option>
          <option label="Gorbea" value="09219">Gorbea</option>
          <option label="Graneros" value="00683">Graneros</option>
          <option label="Guaitecas" value="11274">Guaitecas</option>
          <option label="Hijuelas" value="00563">Hijuelas</option>
          <option label="Hualaihue" value="10267">Hualaihue</option>
          <option label="Hualañé" value="07120">Hualañé</option>
          <option label="Hualpén" value="08344">Hualpén</option>
          <option label="Hualqui" value="08184">Hualqui</option>
          <option label="Huara" value="00016">Huara</option>
          <option label="Huasco" value="00327">Huasco</option>
          <option label="Huechuraba" value="13294">Huechuraba</option>
          <option label="Illapel" value="00440">Illapel</option>
          <option label="Independencia" value="13292">Independencia</option>
          <option label="Iquique" value="00015">Iquique</option>
          <option label="Isla de Maipo" value="13340">Isla de Maipo</option>
          <option label="Isla de Pascua" value="00581">Isla de Pascua</option>
          <option label="Juan Fernánd0ez" value="00574">Juan Fernánd0ez</option>
          <option label="La Cisterna" value="13310">La Cisterna</option>
          <option label="La Cruz" value="00560">La Cruz</option>
          <option label="La Estrella" value="06112">La Estrella</option>
          <option label="La Florida" value="13304">La Florida</option>
          <option label="La Granja" value="13306">La Granja</option>
          <option label="La Higuera" value="00430">La Higuera</option>
          <option label="La Ligua" value="00544">La Ligua</option>
          <option label="La Pintana" value="13307">La Pintana</option>
          <option label="La Reina" value="13301">La Reina</option>
          <option label="La Serena" value="00429">La Serena</option>
          <option label="La Unión" value="14236">La Unión</option>
          <option label="Lago Ranco" value="14239">Lago Ranco</option>
          <option label="Lago Verde" value="11271">Lago Verde</option>
          <option label="Laguna Blanca" value="12284">Laguna Blanca</option>
          <option label="Laja" value="08176">Laja</option>
          <option label="Lampa" value="13324">Lampa</option>
          <option label="Lanco" value="14230">Lanco</option>
          <option label="Las Cabras" value="00698">Las Cabras</option>
          <option label="Las Condes" value="13299">Las Condes</option>
          <option label="Lautaro" value="09209">Lautaro</option>
          <option label="Lebu" value="08190">Lebu</option>
          <option label="Licantén" value="07121">Licantén</option>
          <option label="Limache" value="00564">Limache</option>
          <option label="Linares" value="07134">Linares</option>
          <option label="Litueche" value="06111">Litueche</option>
          <option label="Llanquihue" value="10254">Llanquihue</option>
          <option label="Llayllay" value="00557">Llayllay</option>
          <option label="Lo Barnechea" value="13298">Lo Barnechea</option>
          <option label="Lo Espejo" value="13313">Lo Espejo</option>
          <option label="Lo Prado" value="13318">Lo Prado</option>
          <option label="Lolol" value="06105">Lolol</option>
          <option label="Loncoche" value="09220">Loncoche</option>
          <option label="Longaví" value="07137">Longaví</option>
          <option label="Lonquimay" value="09200">Lonquimay</option>
          <option label="Los Alamos" value="08193">Los Alamos</option>
          <option label="Los Andes" value="00549">Los Andes</option>
          <option label="Los Angeles" value="08166">Los Angeles</option>
          <option label="Los Lagos" value="14231">Los Lagos</option>
          <option label="Los Muermos" value="10252">Los Muermos</option>
          <option label="Los Sauces" value="09207">Los Sauces</option>
          <option label="Los Vilos" value="00442">Los Vilos</option>
          <option label="Lota" value="08186">Lota</option>
          <option label="Lumaco" value="09205">Lumaco</option>
          <option label="Machalí" value="00686">Machalí</option>
          <option label="Macul" value="13302">Macul</option>
          <option label="Máfil" value="14234">Máfil</option>
          <option label="Maipú" value="13316">Maipú</option>
          <option label="Malloa" value="00690">Malloa</option>
          <option label="Marchigue" value="06113">Marchigue</option>
          <option label="María Elena" value="00212">María Elena</option>
          <option label="María Pinto" value="13334">María Pinto</option>
          <option label="Mariquina" value="14229">Mariquina</option>
          <option label="Maule" value="07128">Maule</option>
          <option label="Maullín" value="10251">Maullín</option>
          <option label="Mejillones" value="00217">Mejillones</option>
          <option label="Melipeuco" value="09213">Melipeuco</option>
          <option label="Melipilla" value="13333">Melipilla</option>
          <option label="Molina" value="07118">Molina</option>
          <option label="Monte Patria" value="00437">Monte Patria</option>
          <option label="Mostazal" value="00684">Mostazal</option>
          <option label="Mulchén" value="08173">Mulchén</option>
          <option label="Nacimiento" value="08175">Nacimiento</option>
          <option label="Nancagua" value="06102">Nancagua</option>
          <option label="Natales" value="12280">Natales</option>
          <option label="Navarino" value="12289">Navarino</option>
          <option label="Navidad" value="06110">Navidad</option>
          <option label="Negrete" value="08174">Negrete</option>
          <option label="Ninhue" value="16368">Ninhue</option>
          <option label="Nogales" value="00562">Nogales</option>
          <option label="Nueva Imperial" value="09225">Nueva Imperial</option>
          <option label="Ñiquén" value="16383">Ñiquén</option>
          <option label="Ñuñoa" value="13300">Ñuñoa</option>
          <option label="O''Higgins" value="11278">O''Higgins</option>
          <option label="Olivar" value="00687">Olivar</option>
          <option label="Ollagüe" value="00214">Ollagüe</option>
          <option label="Olmué" value="00565">Olmué</option>
          <option label="Osorno" value="10240">Osorno</option>
          <option label="Ovalle" value="00435">Ovalle</option>
          <option label="Padre Hurtado" value="13342">Padre Hurtado</option>
          <option label="Padre las Casas" value="09227">Padre las Casas</option>
          <option label="Paihuano" value="00434">Paihuano</option>
          <option label="Paillaco" value="14237">Paillaco</option>
          <option label="Paine" value="13331">Paine</option>
          <option label="Palena" value="10269">Palena</option>
          <option label="Palmilla" value="06107">Palmilla</option>
          <option label="Panguipulli" value="14235">Panguipulli</option>
          <option label="Panquehue" value="00556">Panquehue</option>
          <option label="Papudo" value="00548">Papudo</option>
          <option label="Paredones" value="06114">Paredones</option>
          <option label="Parral" value="07138">Parral</option>
          <option label="Pedro Aguirre Cerda" value="13312">Pedro Aguirre Cerda</option>
          <option label="Pelarco" value="07125">Pelarco</option>
          <option label="Pelluhue" value="07143">Pelluhue</option>
          <option label="Pemuco" value="16377">Pemuco</option>
          <option label="Pencahue" value="07131">Pencahue</option>
          <option label="Penco" value="08181">Penco</option>
          <option label="Peñaflor" value="13339">Peñaflor</option>
          <option label="Peñalolén" value="13303">Peñalolén</option>
          <option label="Peralillo" value="06108">Peralillo</option>
          <option label="Perquenco" value="09210">Perquenco</option>
          <option label="Petorca" value="00545">Petorca</option>
          <option label="Peumo" value="00694">Peumo</option>
          <option label="Pica" value="00019">Pica</option>
          <option label="Pichidegua" value="00693">Pichidegua</option>
          <option label="Pichilemu" value="06109">Pichilemu</option>
          <option label="Pinto" value="16378">Pinto</option>
          <option label="Pirque" value="13328">Pirque</option>
          <option label="Pitrufquén" value="09218">Pitrufquén</option>
          <option label="Placilla" value="06101">Placilla</option>
          <option label="Portezuelo" value="16369">Portezuelo</option>
          <option label="Porvenir" value="12286">Porvenir</option>
          <option label="Pozo Almonte" value="00110">Pozo Almonte</option>
          <option label="Primavera" value="12287">Primavera</option>
          <option label="Providencia" value="13296">Providencia</option>
          <option label="Puchuncaví" value="00569">Puchuncaví</option>
          <option label="Pucón" value="09215">Pucón</option>
          <option label="Pudahuel" value="13319">Pudahuel</option>
          <option label="Puente Alto" value="13326">Puente Alto</option>
          <option label="Puerto Montt" value="10247">Puerto Montt</option>
          <option label="Puerto Octay" value="10243">Puerto Octay</option>
          <option label="Puerto Varas" value="10248">Puerto Varas</option>
          <option label="Pumanque" value="06106">Pumanque</option>
          <option label="Punitaqui" value="00439">Punitaqui</option>
          <option label="Punta Arenas" value="12282">Punta Arenas</option>
          <option label="Puqueldón" value="10262">Puqueldón</option>
          <option label="Purén" value="09206">Purén</option>
          <option label="Purranque" value="10244">Purranque</option>
          <option label="Putaendo" value="00554">Putaendo</option>
          <option label="Putre" value="00153">Putre</option>
          <option label="Puyehue" value="10242">Puyehue</option>
          <option label="Queilén" value="10264">Queilén</option>
          <option label="Quellón" value="10265">Quellón</option>
          <option label="Quemchi" value="10258">Quemchi</option>
          <option label="Quilaco" value="08172">Quilaco</option>
          <option label="Quilicura" value="13322">Quilicura</option>
          <option label="Quilleco" value="08170">Quilleco</option>
          <option label="Quillón" value="16379">Quillón</option>
          <option label="Quillota" value="00559">Quillota</option>
          <option label="Quilpué" value="00570">Quilpué</option>
          <option label="Quinchao" value="10261">Quinchao</option>
          <option label="Quinta de Tilcoco" value="00691">Quinta de Tilcoco</option>
          <option label="Quinta Normal" value="13317">Quinta Normal</option>
          <option label="Quintero" value="00568">Quintero</option>
          <option label="Quirihue" value="16370">Quirihue</option>
          <option label="Rancagua" value="00682">Rancagua</option>
          <option label="Ranquil" value="08157">Ranquil</option>
          <option label="Ránquil" value="16371">Ránquil</option>
          <option label="Rauco" value="07123">Rauco</option>
          <option label="Recoleta" value="13295">Recoleta</option>
          <option label="Renaico" value="09198">Renaico</option>
          <option label="Renca" value="13321">Renca</option>
          <option label="Rengo" value="00689">Rengo</option>
          <option label="Requinoa" value="00688">Requinoa</option>
          <option label="Retiro" value="07139">Retiro</option>
          <option label="Rinconada" value="00552">Rinconada</option>
          <option label="Río Bueno" value="14238">Río Bueno</option>
          <option label="Río Claro" value="07126">Río Claro</option>
          <option label="Río Hurtado" value="00436">Río Hurtado</option>
          <option label="Río Ibánez" value="11276">Río Ibánez</option>
          <option label="Río Negro" value="10245">Río Negro</option>
          <option label="Rio Verde" value="12283">Rio Verde</option>
          <option label="Romeral" value="07117">Romeral</option>
          <option label="Saavedra" value="09223">Saavedra</option>
          <option label="Sagrada Familia" value="07119">Sagrada Familia</option>
          <option label="Salamanca" value="00441">Salamanca</option>
          <option label="San Antonio" value="00575">San Antonio</option>
          <option label="San Bernardo" value="13329">San Bernardo</option>
          <option label="San Carlos" value="16384">San Carlos</option>
          <option label="San Clemente" value="07127">San Clemente</option>
          <option label="San Esteban" value="00550">San Esteban</option>
          <option label="San Fabián" value="16385">San Fabián</option>
          <option label="San Felipe" value="00553">San Felipe</option>
          <option label="San Fernando" value="00699">San Fernando</option>
          <option label="San Gregorio" value="12285">San Gregorio</option>
          <option label="San Ignacio" value="16380">San Ignacio</option>
          <option label="San Javier" value="07141">San Javier</option>
          <option label="San Joaquín" value="13305">San Joaquín</option>
          <option label="San José de Maipo" value="13327">San José de Maipo</option>
          <option label="San Juan de la Costa" value="10246">San Juan de la Costa</option>
          <option label="San Miguel" value="13309">San Miguel</option>
          <option label="San Nicolás" value="16386">San Nicolás</option>
          <option label="San Pablo" value="10241">San Pablo</option>
          <option label="San Pedro" value="13337">San Pedro</option>
          <option label="San Pedro de Atacama" value="00215">San Pedro de Atacama</option>
          <option label="San Pedro de la Paz" value="08188">San Pedro de la Paz</option>
          <option label="San Rafael" value="07129">San Rafael</option>
          <option label="San Ramón" value="13308">San Ramón</option>
          <option label="San Rosendo" value="08177">San Rosendo</option>
          <option label="San Vicente Tagua" value="00692">San Vicente Tagua</option>
          <option label="Santa Bárbara" value="08171">Santa Bárbara</option>
          <option label="Santa Cruz" value="06104">Santa Cruz</option>
          <option label="Santa Juana" value="08185">Santa Juana</option>
          <option label="Santa María" value="00555">Santa María</option>
          <option label="Santiago" value="13291">Santiago</option>
          <option label="Santo Domingo" value="00580">Santo Domingo</option>
          <option label="Sierra Gorda" value="00218">Sierra Gorda</option>
          <option label="Talagante" value="13338">Talagante</option>
          <option label="Talca" value="07124">Talca</option>
          <option label="Talcahuano" value="08180">Talcahuano</option>
          <option label="Taltal" value="00219">Taltal</option>
          <option label="Temuco" value="09208">Temuco</option>
          <option label="Teno" value="07116">Teno</option>
          <option label="Teodoro Schmidt" value="09222">Teodoro Schmidt</option>
          <option label="Tierra Amarilla" value="00324">Tierra Amarilla</option>
          <option label="Tiltil" value="13325">Tiltil</option>
          <option label="Timaukel" value="12288">Timaukel</option>
          <option label="Tirua" value="08196">Tirua</option>
          <option label="Tocopilla" value="00211">Tocopilla</option>
          <option label="Toltén" value="09221">Toltén</option>
          <option label="Tomé" value="08182">Tomé</option>
          <option label="Torres del Paine" value="12281">Torres del Paine</option>
          <option label="Tortel" value="11279">Tortel</option>
          <option label="Traiguén" value="09204">Traiguén</option>
          <option label="Treguaco" value="16372">Treguaco</option>
          <option label="Trehuaco" value="08160">Trehuaco</option>
          <option label="Tucapel" value="08168">Tucapel</option>
          <option label="Valdivia" value="14228">Valdivia</option>
          <option label="Vallenar" value="00329">Vallenar</option>
          <option label="Valparaíso" value="00566">Valparaíso</option>
          <option label="Vichuquén" value="07122">Vichuquén</option>
          <option label="Victoria" value="09203">Victoria</option>
          <option label="Vicuña" value="00433">Vicuña</option>
          <option label="Vilcún" value="09211">Vilcún</option>
          <option label="Villa Alegre" value="07140">Villa Alegre</option>
          <option label="Villa Alemana" value="00571">Villa Alemana</option>
          <option label="Villarrica" value="09216">Villarrica</option>
          <option label="Viña del Mar" value="00567">Viña del Mar</option>
          <option label="Vitacura" value="13297">Vitacura</option>
          <option label="Yerbas Buenas" value="07135">Yerbas Buenas</option>
          <option label="Yumbel" value="08178">Yumbel</option>
          <option label="Yungay" value="16381">Yungay</option>
          <option label="Zapallar" value="00547">Zapallar</option>
        </select>
      </div>
      <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
    </div>
    <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-7W" data-sap-cp-key="E450FB49BB0EA1B77B174AF8032F30017C0E13D9" class="sapCpWidget sapCRLWidget sapCpButtonWidget" data-sap-cp-follow-up-action="01" data-sap-cp-wprogres-enabled="false">
      <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft" style="width:auto!important;"></div>
      <div class="sapCpWidgetContent sapCpWidgetContentRight sapCRLWidgetContent sapCRLWidgetContentRight" >
        <button id="__button57" class="sapCpButton" type="button" style="color:#858080">Enviar</button>
        <button id="buttonc4c" type="button" style="color:#858080;display:none">Enviar</button>
        <span id="__text466" class="sapCpText sapCpButtonWidgetExtraText sapCpMissingMandatoryFieldText sapCpMissingMandatoryFieldLabel">Rellene todos los campos correctamente.</span><span id="__text467" class="sapCpText sapCpButtonWidgetExtraText sapCpErrorMessageText">Se ha producido un error técnico.</span><span id="__text468" class="sapCpText sapCpButtonWidgetExtraText sapCpSuccessMessageText sapCpSuccessMessageLabel">Gracias por su envío.</span></div>
      <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
    </div>
  </div>
</form>
	</div>
</body>
	  <script>
	   $("#buttonc4c").click(function (e){
		   	var Url = window.location.href;
            var Nombre = $("#__input63").val();
            var Apellido = $("#__input64").val();
            var NombreEmpresa = $("#__input65").val();
            var Rut = $("#__input66").val();
            var Email = $("#__input68").val();
            var Telefono = $("#__input67").val();
            var Comuna = $("#__down9").val();
	        var dataString = 
	        {
	            "Nombre":Nombre,
	            "Apellido":Apellido,
	            "NombreEmpresa":NombreEmpresa,
	            "Rut":Rut,
	            "Email":Email,
	            "Telefono":Telefono,
	            "Comuna":Comuna,
	            "Url":Url
	        };
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
	    $("#__input66").blur(function (e){
	    	
	    	var valor = this.value.replace('.', '');
	        valor = valor.replace('-', '');
	    	if(valor.length > 7){
				//checkRut(this);
	    	}	
	    });
	    $("#__input66").bind("keyup keydown change", function(){
	    	var valor = this.value;
	    	if(valor.length > 1){
	    		valor = valor.replace('.', '');
	        	valor = valor.replace('-', '');
    			cuerpo = valor.slice(0, -1);
	        	dv = valor.slice(-1).toUpperCase();
	        	this.value = cuerpo + '-' + dv;
	    	}
	    	if(valor.includes(".")){
	    		this.value = valor.replace(".","");
	    	}
	    });

	  </script>
</html>