<div class="container">

<!--/ breadcrumb section -->
<br>
<nav class="blue-grey darken-4">
  <div class="nav-wrapper">
    <div class="col s12 ">
      <a class="breadcrumb" href=<?=base_url()."polizas"?>>&nbsp&nbsp Pólizas</a>
      <a class="breadcrumb">Póliza</a>
    </div>
  </div>
</nav>


<!--/ Main section -->
<ul class="collection">
  <div class="row">

  <!--/ Left Poliza section -->
  <div class="col l3 m12 s12">
    <?php foreach ($polizas as $poliza): ?>
      <!--/ Logo section -->
      <li class="collection-item center-align">
        <img class="responsive-img" style="height: 120px" src=<?= base_url()."assets/images/logos/".$poliza->id_cliente.".png" ?>>
      </li>
      <!--/ Info section -->
      <li class="collection-item">
        <blockquote><h6><b><u>Información:</u></b></h6></blockquote>
        <p><b>ID Póliza:</b> <?=$poliza->id_poliza?> </p>
        <p><b>Clave SAP:</b> <?=$poliza->clave_sap?> </p>
        <p><b>Alias:</b> <?=$poliza->alias?> </p>
      </li>
      <!--/ Fechas section -->
      <li class="collection-item">
        <blockquote><h6><b><u>Fechas:</u></b></h6></blockquote>
        <p><span class="material-icons">event_available</span> <b>Inicia:</b> <?=$poliza->fecha_inicio?></p>
        <p><span class="material-icons">event_busy</span> <b>Fin:</b> <?=$poliza->fecha_fin?></p>
        <p><b>Días con póliza:</b> </p>
        <p><b>Días restantes:</b> </p>
      </li>
    <?php endforeach; ?>
  </div> <!--/ End Left Poliza section -->

  <div class="col l9 m12 s12">
  <!--/ Center Poliza Data section -->
  <!--/ Tab Navigation section -->
      <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col s12 m2 l2"><a class="active" href="#test1">&nbsp Info</a></li>
            <li class="tab col s12 m2 l2"><a href="#test2">Cobertura</a></li>
            <li class="tab col s12 m2 l2"><a href="#test3">Servicios</a></li>
            <li class="tab col s12 m2 l2"><a href="#test4">Mantenimientos</a></li>
            <li class="tab col s12 m2 l2"><a href="#test5">Garantías</a></li>
            <li class="tab col s12 m2 l2"><a href="#test6">Archivos</a></li>
          </ul>
        </div>
      </div>

    <!--/ Resumen Section-->
    <div id="test1" class="col s12">
        <li class="collection-item teal darken-1 white-text">
          <h5>Datos Generales</h5>
        </li>
      <?php foreach ($polizas as $poliza): ?>
        <li class="collection-item">
          <blockquote><h6><b><u>Venta:</u></b></h6></blockquote>
          <p><b>Vendedor:</b> <?=$poliza->vendedor?></p>
          <p><b>Venta:</b> <?=$poliza->venta ." ". $poliza->moneda?></p>
          <p><b>Gasto en Servicios:</b> </p>
          <p><b>Gasto en Mantenimientos:</b> </p>
          <p><b>Diferencia:</b> </p>
        </li>
      <?php endforeach; ?>
    </div>
    <!--/ Cobertura Section-->
    <div id="test2" class="col s12">
        <li class="collection-item teal darken-1 white-text">
          <h5>Cobertura</h5>
        </li>
        <blockquote><h6><b><u>Proyectos que ampara:</u></b></h6></blockquote>
          <ul class="collapsible">
            <?php foreach ($polizas_proyectos as $cobertura): ?>
            <li>
              <div class="collapsible-header"><i class="material-icons">domain</i>

                <b>ID: <?=$cobertura->id_proyecto?> <?=$cobertura->estado?> / <?=$cobertura->municipio?> / <?=$cobertura->edificio?> / <?=$cobertura->proyecto?> <?=$cobertura->num?></b>

              </div>
              <div class="collapsible-body">

              </div>
            </li>
            <?php endforeach; ?>
          </ul>



    </div>

    <!--/ Servicios Section-->
    <div id="test3" class="col s12">
      <li class="collection-item teal darken-1 white-text">
        <h5>Servicios</h5>
      </li>
      <li class="collection-item">
      <?php foreach ($polizas_servicios as $servicio): ?>
        <p><b>ID:</b> <?=$servicio->id_servicio?>
          <span class="material-icons">
event_available
</span> <?=$servicio->fecha_fin?>
           <b>Falla:</b> <?=$servicio->falla?></p>
        <p><b>Acciones:</b> <?=$servicio->acciones?></p><hr>
      <?php endforeach; ?><br>
      </li>
    </div>

    <!--/ Mantenimientos Section-->
    <div id="test4" class="col s12">
      <li class="collection-item teal darken-1 white-text">
        <h5>Mantenimientos</h5>
      </li>
      <li class="collection-item">
      </li>
    </div>

    <!--/ Garantías Section-->
    <div id="test5" class="col s12">
      <li class="collection-item teal darken-1 white-text">
        <h5>Garantías</h5>
      </li>
      <li class="collection-item">
      </li>
    </div>

    <!--/ Archivos Section-->
    <div id="test6" class="col s12">
      <li class="collection-item teal darken-1 white-text">
        <h5>Archivos</h5>
      </li>
      <li class="collection-item">
      </li>
    </div>


  <!--/ End Center Poliza Data section -->
  </div>

  </div>
<!--/ End Main section -->
</ul>
