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
  <th>Estatus</th>
  <th>Inicio</th>
  <th>Fin</th>
  <th>Clave SAP</th>
  <th>Cliente</th>
  <th>Póliza</th>
  <th>Logo</th>
  <th>Ver</th>
</tr>
<?php foreach ($polizas as $poliza): ?>
  <td><b><i><?=$poliza->id_poliza?></i></b></td>
  <td>
    <?php
      if($poliza->dias_restantes <= 0)
      {
        echo "<i class='tiny material-icons red-text'>cancel_outline</i>";
      }
      else {
        echo "<i class='tiny material-icons green-text'>check_circle</i>";
      }
    ?>
  </td>
  <td><?=$poliza->fecha_inicio?></td>
  <td><?=$poliza->fecha_fin?></td>
  <td><?=$poliza->clave_sap?></td>
  <td><?=$poliza->alias?></td>
  <td><?=$poliza->poliza_alias?></td>
  <td><img style="width: 65px;" src=<?= base_url()."assets/images/logos/".$poliza->id_cliente.".png" ?>></td>
  <td>
    <a href="<?=base_url()?>polizas/ver/<?=$poliza->id_poliza?>"
      <i class="large material-icons blue-text">arrow_forward_ios</i>
    </a>
  </td>
</tr>
<?php endforeach; ?>
</table>
</div>
