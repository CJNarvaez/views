<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Indicadores de Resultados</title>
    <?php include "inc/header_common.php" ?>	
    <style>
	body {
	    background-image: url('../../img/bg_home.png');
	}
	.tabla-opacity{
	    opacity: 0.3
	}
	.activo{
	    opacity: 1
	}
    </style>
  </head>
  <body>
<?php 
    //MENU
    $pagina->menu_genera('Evaluación','Menú Principal');
?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
	    <br /><br /><br />
          <div class="page-header">
            <h1>Indicadores de Resultados <small>Fuente: SIS, SAEH, SUAVE(Sistemas Paralelos)</small></h1>
          </div>
        </div>
      </div>
      <div class="row">
	<!-- Para menu mayor a sm  -->
        <div class="hidden-xs col-md-10">
	  <h3>Indicadores</h3>
	  <div class="btn-group btn-group-justified btn-group-xs">
            <a class="btn btn-success ind" role="button" data-nombre="nac_xCesarea">Nac x Cesarea</a> 
            <a class="btn btn-success ind" role="button" data-nombre="consPren">Cons Prenatales</a> 
            <a class="btn btn-success ind" role="button" data-nombre="usuAct">Usuarias Activas</a>
            <a class="btn btn-success ind" role="button" data-nombre="morbSida">Morbilidad por SIDA</a>
	    <a class="btn btn-success ind" role="button" data-nombre="nuevosTbTaesTerm">Nvos T.B. TAES Term</a>
	  </div>
	  <div class="btn-group btn-group-justified btn-group-xs">
	    <a class="btn btn-success ind" role="button" data-nombre="promConsMed">Consulta X Medico</a>
            <a class="btn btn-success ind" role="button" data-nombre="casosNuevosSifilis">Casos Nuevos Sifilis</a>
	    <a class="btn btn-success ind" role="button" data-nombre="morbTbPulmonar">Morbilidad T.B. Pulmonar</a>            
            <a class="btn btn-success ind" role="button" data-nombre="casosNuevosDM">Casos Nuevos Diabetes</a>
	    <a class="btn btn-success ind" role="button" data-nombre="morbGonorrea">Morbilidad por Gonorrea</a>	    
            
	  </div>
	  <div class="btn-group btn-group-justified btn-group-xs">
	      <a class="btn btn-success ind" role="button" data-nombre="porcOcuHosp">Ocupacion Hospitalaria</a>
	    <a class="btn btn-success ind" role="button" data-nombre="promDiasEst">Promedio Dias Estancia</a>
            <a class="btn btn-success ind" role="button" data-nombre="interQuir">Prom. Int. Quir. x Quirofano</a>
            <a class="btn btn-success ind" role="button" data-nombre="casosNuevosHA">Casos Nuevos Hipertension</a>
	  </div>
	</div>
	 <div class="hidden-xs col-md-2">
	  <h3>Meses</h3>
          <div class="btn-group btn-group-justified btn-group-xs" role="group">
            <a class="btn btn-danger meses" role="button" data-nombre="01">ENE</a> 
            <a class="btn btn-danger meses" role="button" data-nombre="02">FEB</a> 
            <a class="btn btn-danger meses" role="button" data-nombre="03">MAR</a> 
            <a class="btn btn-danger meses" role="button" data-nombre="04">ABR</a>
             
          </div>
	  <div class="btn-group btn-group-justified btn-group-xs" role="group">
	    <a class="btn btn-danger meses" role="button" data-nombre="05">MAY</a> 
            <a class="btn btn-danger meses" role="button" data-nombre="06">JUN</a>
            <a class="btn btn-danger meses" role="button" data-nombre="07">JUL</a> 
            <a class="btn btn-danger meses" role="button" data-nombre="08">AGO</a>
            
          </div>
	  <div class="btn-group btn-group-justified btn-group-xs" role="group">
	    <a class="btn btn-danger meses" role="button" data-nombre="09">SEP</a>
            <a class="btn btn-danger meses" role="button" data-nombre="10">OCT</a>
            <a class="btn btn-danger meses" role="button" data-nombre="11">NOV</a>
            <a class="btn btn-danger meses" role="button" data-nombre="12">DIC</a>
	  </div>
        </div>
	
	<!-- Para menu menor o igual a sm  -->
        <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
	  <h3>Indicadores</h3>
	  <div class="btn-group btn-group-vertical btn-group-xs btn-block" role="group">
	    <a class="btn btn-success ind" role="button" data-nombre="nac_xCesarea">Nac x Cesarea</a> 
            <a class="btn btn-success ind" role="button" data-nombre="consPren">Cons Prenatales</a> 
            <a class="btn btn-success ind" role="button" data-nombre="usuAct">Usuarias Activas</a>
            <a class="btn btn-success ind" role="button" data-nombre="morbSida">Morbilidad por SIDA</a>
	    <a class="btn btn-success ind" role="button" data-nombre="nuevosTbTaesTerm">Nvos T.B. TAES Term</a>
	    <a class="btn btn-success ind" role="button" data-nombre="promConsMed">Consulta X Medico</a>
            <a class="btn btn-success ind" role="button" data-nombre="casosNuevosSifilis">Casos Nuevos Sifilis</a>
	    <a class="btn btn-success ind" role="button" data-nombre="morbTbPulmonar">Morbilidad T.B. Pulmonar</a>            
            <a class="btn btn-success ind" role="button" data-nombre="casosNuevosDM">Casos Nuevos Diabetes</a>
	    <a class="btn btn-success ind" role="button" data-nombre="morbGonorrea">Morbilidad por Gonorrea</a>	    
	    <a class="btn btn-success ind" role="button" data-nombre="porcOcuHosp">Ocupacion Hospitalaria</a>
	    <a class="btn btn-success ind" role="button" data-nombre="promDiasEst">Promedio Dias Estancia</a>
            <a class="btn btn-success ind" role="button" data-nombre="interQuir">Prom. Int. Quir. x Quirofano</a>
            <a class="btn btn-success ind" role="button" data-nombre="casosNuevosHA">Casos Nuevos Hipertension</a>
	  </div>	  
	</div>
	<div class="col-xs-12 hidden-sm hidden-md hidden-lg">
	  <h3>Meses</h3>
          <div class="btn-group btn-group-vertical btn-group-xs btn-block" role="group">
            <a class="btn btn-danger meses" role="button" data-nombre="01">ENE</a> 
            <a class="btn btn-danger meses" role="button" data-nombre="02">FEB</a> 
            <a class="btn btn-danger meses" role="button" data-nombre="03">MAR</a> 
            <a class="btn btn-danger meses" role="button" data-nombre="04">ABR</a>
	    <a class="btn btn-danger meses" role="button" data-nombre="05">MAY</a> 
            <a class="btn btn-danger meses" role="button" data-nombre="06">JUN</a>
            <a class="btn btn-danger meses" role="button" data-nombre="07">JUL</a> 
            <a class="btn btn-danger meses" role="button" data-nombre="08">AGO</a>
	    <a class="btn btn-danger meses" role="button" data-nombre="09">SEP</a>
            <a class="btn btn-danger meses" role="button" data-nombre="10">OCT</a>
            <a class="btn btn-danger meses" role="button" data-nombre="11">NOV</a>
            <a class="btn btn-danger meses" role="button" data-nombre="12">DIC</a>
	  </div>
        </div>
	
      </div>
      <div class="row">
        
        <div id="resultado" class="col-xs-12"><br>
          <ul>
            <li>Selecciona un mes</li>
            <li>Selecciona un indicador</li>
          </ul>
        </div>
      </div>
      <br />
  <!--    <div class="row">
        <div class="col-xs-12">
          <div class="alert alert-dismissable alert-info">         
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Información</h4>Selecciona un mes
          </div>
        </div>
      </div> -->
    </div>

    <?php include "inc/footer_common.php" ?>
    
    <script src="../../js/ind_res.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/maps/modules/map.js"></script>
    <script src="http://code.highcharts.com/modules/drilldown.js"></script>
    <link href="../../css/principal.css" rel="stylesheet" type="text/css" />
  </body>
</html>