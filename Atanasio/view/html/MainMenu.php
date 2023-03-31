<html>
<script src="https://kit.fontawesome.com/6a498da694.js" crossorigin="anonymous"></script>
<style>
  .br-logo img{
    width: 45px;
    margin: auto;
    transition: all .5s ease;
    cursor: pointer;
  }

  .br-logo img:hover {
    transform: scale(1.1);
  }

  .br-sideleft {
    background-color:#60d479;
}

.br-menu-item {
  color: white;
}

.br-logo {
  background-color: black;
}

.br-header {
  background-color: black;
}

.br-header::before {
  background-color: black;
}
 
.navicon-left a {
  color: white;
}

.navicon-left a:hover{
  color: #12B62B;
}

.br-header-right a {
  color:#12B62B;
}

.br-header-right a:hover{
  color: #12B62B;
}

.dropdown-menu {
  background-color: black;
}

.dropdown-menu-header::before{
  background-color:black;
}

.sidebar-label{
  color:white;
  font-size: 20px;
  text-decoration: underline;
  font-family: monospace;
}

.br-pageheader{
  background-color: white;
}
body{
  background-color: white;
}

.pd-25 {
  background-color: #60d479;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.current:focus{
  background-color: #60d479;
}

.btn-info{
  background-color: #60d479;
}
</style>
<link rel="stylesheet" href="../../css/edit.css">
<div class="br-logo"><img src="../../Images/escudo.png" alt="Escudo de la institución educativa Atanasio Girardot"></div>

<div class="br-sideleft overflow-y-auto">
  <label class="sidebar-label pd-x-15 mg-t-20">MENÚ</label>
  <div class="br-sideleft-menu">

    <a href="../UsuHome/" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
        <span class="menu-item-label">Inicio</span>
      </div>
    </a>

    <?php
      if($_SESSION["rol_id"]==1){
        ?>
          <a href="../UsuCurso/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Certificado Academico</span>
            </div>
          </a>

          <a href="../Noticias/public_noticias.php" class="br-menu-link" target="_blank">
            <div class="br-menu-item">
            <i class="fa-regular fa-newspaper"></i>
              <span class="menu-item-label">Blog Noticias</span>
            </div>
          </a>

          <a href="#" class="br-menu-link">
            <div class="br-menu-item">
            <i class="fa-solid fa-person-chalkboard"></i>
              <span class="menu-item-label">Profesores</span>
            </div>
          </a>

          <a href="../Cronograma/index.php" class="br-menu-link" target="_blank">
            <div class="br-menu-item">
            <i class="fa-regular fa-calendar-days"></i>
              <span class="menu-item-label">Cronograma</span>
            </div>
          </a>

          <a href="https://manizales.ciudaddigitaleneducacion.com/Account/Login?ReturnUrl=%2F" class="br-menu-link" target="_blank">
            <div class="br-menu-item">
            <i class="fa-solid fa-person-circle-check"></i>
              <span class="menu-item-label">Notas</span>
            </div>
          </a>

          <a href="https://forms.gle/Wh4sfBJjTrats4bC7" class="br-menu-link" target="_blank">
            <div class="br-menu-item">
            <i class="fa-solid fa-envelopes-bulk"></i>
              <span class="menu-item-label">Solicitud Rectoría</span>
            </div>
          </a>

          <a href="https://forms.gle/QhudJ8hKsrRuHLnv9" class="br-menu-link" target="_blank">
            <div class="br-menu-item">
            <i class="fa-solid fa-envelopes-bulk"></i>
              <span class="menu-item-label">Solicitud Psicología</span>
            </div>
          </a>
        <?php
      }else{
        ?>
          <a href="../AdminMntUsuario/" class="br-menu-link">
            <div class="br-menu-item">
            <i class="fa-solid fa-graduation-cap"></i>
              <span class="menu-item-label">Estudiantes</span>
            </div>
          </a>

          <a href="../AdminMntCurso/" class="br-menu-link">
            <div class="br-menu-item">
            <i class="fa-solid fa-school-circle-check"></i>
              <span class="menu-item-label">Grados</span>
            </div>
          </a>

          <a href="../AdminMntInstructor/" class="br-menu-link">
            <div class="br-menu-item">
            <i class="fa-solid fa-person-chalkboard"></i>
              <span class="menu-item-label">Docentes</span>
            </div>
          </a>

          <a href="../Noticias/" class="br-menu-link" target="_blank">
            <div class="br-menu-item">
            <i class="fa-regular fa-newspaper"></i>
              <span class="menu-item-label">Subir Noticias</span>
            </div>
          </a>

          <a href="../AdminMntCategoria/" class="br-menu-link">
            <div class="br-menu-item">
            <i class="fa-solid fa-users-rays"></i>
              <span class="menu-item-label">Aulas de clase</span>
            </div>
          </a>

          <a href="../AdminDetalleCertificado/" class="br-menu-link">
            <div class="br-menu-item">
            <i class="fa-solid fa-certificate"></i>
              <span class="menu-item-label">Detalle Certificado</span>
            </div>
          </a>
        <?php
      }
    ?>


    <a href="../UsuPerfil/" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-gear-outline tx-20"></i>
        <span class="menu-item-label">Perfil</span>
      </div>
    </a>

    <a href="../html/Logout.php" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-power tx-20"></i>
        <span class="menu-item-label">Cerrar Sesion</span>
      </div>
    </a>

  </div>
</div>
</html>