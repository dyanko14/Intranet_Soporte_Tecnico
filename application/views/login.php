<style>
  body{
    background-color:#f5f5f5;
    background-image: url(<?= base_url()."assets/images/wallpaper/wallpaper.jpg" ?>);
  }
  .loginform{
     width:100%;
     max-width:400px;
     position:absolute;
     top:50%;
     left:50%;
     transform:translateX(-50%) translateY(-50%);
  }
  .section>p{
     opacity:0.5;
     text-align:center;
  }
  .section>h5{
     text-align:center;
  }
  .divider{
     border-bottom: 1px solid #0d313a;
  }
  .btn{
     width:100%;
     text-align: center;
     text-indent: 15%;
  }
  .btn>.material-icons{
     position: relative;
     top:0px;
     right: 25px;
  }
  .divider{
     margin-bottom: 30px;
  }
</style>

<div class="loginform">
  <div class="row">
    <div class="col s12 m12">
      <div class="card-panel white">
        <div class="row">
          <div class="section center-align">
            <img class="responsive-img" src="<?=base_url()?>assets/images/logos/login.png" class="responsive-img">
          </div>
          <form class="login-form" action="<?=base_url()?>login/validate" method="post">
          <div class="col s12">
            <label>Usuario</label>
            <input name="usuario" type="text" required>
          </div>
          <div class="col s12">
            <label>Contraseña</label>
            <input name="password" type="password" required>
            <br><br><br>
            <button class="btn waves-effect waves-light indigo" type="submit" name="action">
              Ingresar
              <i class="material-icons right">input</i>
            </button>
          </div>
          </form>
        </div>
      </div>
      </div>
    </div>
</div>
