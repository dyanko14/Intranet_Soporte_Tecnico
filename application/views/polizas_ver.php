<div class="container">

<!--/ breadcrumb section -->
<br>
<nav class="grey darken-2">
  <div class="nav-wrapper">
    <div class="col s12 ">
      <a class="breadcrumb" href=<?=base_url()."polizas"?>>&nbsp&nbsp Pólizas</a>
      <a class="breadcrumb">Póliza</a>
    </div>
  </div>
</nav>

<!--/ Main section -->
<ul class="collection">
<?php foreach ($polizas as $poliza): ?>
  <li class="collection-item">
    <div class="row">
      <!--/ Logo section -->
      <div class="col l4 m4 s12 center-align">
        <img class="responsive-img"  src=<?= base_url()."assets/images/logos/".$poliza->id_cliente.".png" ?>>
      </div>
      <!--/ Info section -->
      <div class="col l4 m4 s12">
        <blockquote><h6><b><u>Información:</u></b></h6></blockquote>
        <p><b>ID Póliza:</b> <?=$poliza->id_poliza?></p>
        <p><b>Clave SAP:</b> <?=$poliza->clave_sap?></p>
        <p><b>Alias:</b> <?=$poliza->alias?></p>
      </div>
      <!--/ Fechas section -->
      <div class="col l4 m4 s12">
        <blockquote><h6><b><u>Fechas:</u></b></h6></blockquote>
        <p><b>Fecha de Inicio:</b> <?=$poliza->fecha_inicio?></p>
        <p><b>Fecha de Finalización:</b> <?=$poliza->fecha_fin?></p>
        <p><b>Días con póliza:</b> </p>
        <p><b>Días restantes:</b> </p>
      </div>
    </div>
  </li>
<?php endforeach; ?>

<!--/ Tab Navigation section -->
  <li class="collection-item">
    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s12 m2 l2"><a class="active" href="#test1">Resumen</a></li>
          <li class="tab col s12 m2 l2"><a href="#test2">Cobertura</a></li>
          <li class="tab col s12 m2 l2"><a href="#test3">Servicios</a></li>
          <li class="tab col s12 m2 l2"><a href="#test4">Mantenimientos</a></li>
          <li class="tab col s12 m2 l2"><a href="#test5">Garantías</a></li>
          <li class="tab col s12 m2 l2"><a href="#test6">Archivos</a></li>
        </ul>
      </div>
    </div>
  </li>

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
      <li class="collection-item">
        <blockquote><h6><b><u>Proyectos que ampara:</u></b></h6></blockquote>
        <table border="1" class="highlight responsive-table">
        <tr>
          <th>ID</th>
          <th>Estado</th>
          <th>Municipio</th>
          <th>Edificio</th>
          <th>Proyecto</th>
          <th>Instalación</th>
          <th colspan="3">Operaciones</th>
        </tr>
        <?php foreach ($polizas_proyectos as $cobertura): ?>
        <tr>
          <td><b><i><?=$cobertura->id_proyecto?></i></b></td>
          <td><?=$cobertura->estado?></td>
          <td><?=$cobertura->municipio?></td>
          <td><?=$cobertura->edificio?></td>
          <td><?=$cobertura->proyecto?></td>
          <td><?=$cobertura->fecha_inst?></td>
          <td>
            <a href="<?=base_url()?>polizas/proyecto/ver/<?=$poliza->id_poliza?>"
              <i class="material-icons"><span class="blue-text">pageview</span></i>
            </a>
          </td>
          <td>
            <a href="<?=base_url()?>polizas/proyecto/editar/<?=$poliza->id_poliza?>"
              <i class="material-icons"><span class="orange-text">edit</span></i>
            </a>
          </td>
          <td>
            <a href="<?=base_url()?>polizas/proyecto/eliminar/<?=$poliza->id_poliza?>"
              <i class="material-icons"><span class="red-text">delete</span></i>
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
        </table>
      </li>
  </div>

  <!--/ Servicios Section-->
  <div id="test3" class="col s12">
    <li class="collection-item teal darken-1 white-text">
      <h5>Servicios</h5>
    </li>
    <li class="collection-item">
    <?php foreach ($polizas_servicios as $servicio): ?>
      <p><b>ID:</b> <?=$servicio->id_servicio?>
         <b>fecha_fin:</b> <?=$servicio->fecha_fin?>
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

<!--/ End Main section -->
</ul>
<!--/ End container -->
</div>
