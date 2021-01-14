<div class="container">
<blockquote><h3>Mi Cuenta</h3></blockquote>

<div class="row">
  <!--/ Account photo section -->
  <div class="col l6 m6 s12">
    <img class="circle" src=<?=base_url()."assets/images/fotos_usuarios/".$this->session->userdata('id').".jpg"?>>
    <h5><b><u>Información</u></b></h5>
    <p><b>Usuario: &nbsp</b><?= $this->session->userdata('username'); ?></p>
    <p><b>Correo: &nbsp</b>admin@grupoact.com</p>
  </div>

  <!--/ Account Password section -->
  <div class="col l6 m6 s12">
    <ul class="collection">
    <form class="col s12" method="post" accept-charset="utf-8" action=<?=base_url()."cuenta/update/";?>>
      <h5><b><u>Actualización de Password</u></b></h5>
      <input value=<?= $this->session->userdata('id'); ?> id="disabled" type="hidden" class="validate" name="id_usuario">

      <input disabled value=<?= $this->session->userdata('username'); ?> id="disabled" type="hidden" class="validate">

      <label for="password">Último password</label>
      <input type="password" class="validate" name="password_old" required><br><br>

      <label for="password">Nuevo password</label>
      <input type="password" class="validate" name="password_new" required><br><br>

      <label for="password">Confirmar nuevo password</label>
      <input type="password" class="validate" name="password_re" required>

      <div class="row right-align">
      <button class="btn waves-effect waves-light" type="submit">Actualizar
        <i class="material-icons right">send</i>
      </button>&nbsp&nbsp&nbsp&nbsp
      </div>
  </form>
  </ul>
  </div>
</div>
