<div class="container">

<!--/ breadcrumb section -->
<br>
<nav class="blue-grey darken-4">
  <div class="nav-wrapper">
    <div class="col s12 ">
      <a class="breadcrumb">&nbsp&nbsp Seleccione una Póliza</a>
    </div>
  </div>
</nav>

<table border="1" class="highlight responsive-table">
<tr>
  <th>ID</th>
  <th>Inicio</th>
  <th>Fin</th>
  <th>Clave SAP</th>
  <th>Cliente</th>
  <th>Logo</th>
  <th colspan="3">Operaciones</th>
</tr>
<?php foreach ($polizas as $poliza): ?>
<tr>
  <td><b><i><?=$poliza->id_poliza?></i></b></td>
  <td><?=$poliza->fecha_inicio?></td>
  <td><?=$poliza->fecha_fin?></td>
  <td><?=$poliza->clave_sap?></td>
  <td><?=$poliza->alias?></td>
  <td><img style="width: 65px;" src=<?= base_url()."assets/images/logos/".$poliza->id_cliente.".png" ?>></td>
  <td>
    <a href="<?=base_url()?>polizas/ver/<?=$poliza->id_poliza?>"
      <i class="large material-icons"><span class="blue-text">pageview</span></i>
    </a>
  </td>
  <td>
    <a href="<?=base_url()?>polizas/editar/<?=$poliza->id_poliza?>"
      <i class="material-icons"><span class="orange-text">edit</span></i>
    </a>
  </td>
  <td>
    <a href="<?=base_url()?>polizas/eliminar/<?=$poliza->id_poliza?>"
      <i class="material-icons"><span class="red-text">delete</span></i>
    </a>
  </td>
</tr>
<?php endforeach; ?>
</table>
</div>
