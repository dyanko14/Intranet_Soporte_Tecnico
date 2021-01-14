<nav class="blue-grey darken-4">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Grupo ACT</a>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href=<?=base_url()."dashboard/"?>><i class="material-icons left">dashboard</i>Dashboard</a></li>
      <li><a href=<?=base_url()."polizas/"?>><i class="material-icons left">assignment</i>Pólizas</a></li>
      <li><a class='dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons left">account_box</i><?= $this->session->userdata('username'); ?></a></li>
      <!-- Dropdown Structure -->
      <ul id='dropdown1' class='dropdown-content'>
        <li><a href=<?=base_url()."cuenta/"?>><i class="material-icons">account_box</i>info</a></li>
        <li class="divider" tabindex="-1"></li>
        <li><a href=<?=base_url()."close/"?>><i class="material-icons">exit_to_app</i>Salir</a></li>
      </ul>
    </ul>
  </div>
</nav>



<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src=<?=base_url()."assets/images/wallpaper/wallpaper_navbar_menu.jpg"?>>
      </div>
      <a href="#user"><img class="circle" src=<?=base_url()."assets/images/fotos_usuarios/".$this->session->userdata('id').".jpg"?>></a>
      <a href="#name"><span class="white-text name"><?= $this->session->userdata('username'); ?></span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href=<?=base_url()."dashboard/"?>><i class="material-icons">dashboard</i>Dashboard</a></li>
    <li><a href=<?=base_url()."polizas/"?>><i class="material-icons">assignment</i>Pólizas</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Mi Cuenta</a></li>
    <li><a href=<?=base_url()."cuenta/"?>><i class="material-icons">account_box</i>Info</a></li>
    <li><a href=<?=base_url()."close/"?>><i class="material-icons">exit_to_app</i>Salir</a></li>
  </ul>
