<header>

  <nav class="navbar navbar-expand-sm navbar-light m-3 justify-content-between">
    <a href="index.php" class="navbar-brand ps-4" id="tituloBargo">Bargo</a>

    <!-- Botón que se muestra cuando la barra de navegación de colapsa -->
    <button type="button" class="navbar-toggler rounded-pill border-0 me-3" data-bs-toggle="offcanvas"
      href="#panelDesplegable">
      <img src="imgs/iconos/menus/three-dots.svg" alt="Bootstrap" width="50" height="50">
    </button>

    <div class="offcanvas offcanvas-top d-xs-block d-sm-none h-50" tabindex="-1" id="panelDesplegable">

      <div class="offcanvas-header">
        <h5 class="offcanvas-title ps-3"id="tituloBargo">Menu</h5>
        <button type="button" class="btn-close pe-3" data-bs-dismiss="offcanvas"></button>
      </div>

      <div class="offcanvas-body ps-3 d-flex justify-content-center align-items-center flex-column">
        <a href="index.php" id="tituloOpcionesPrincipales" class="my-1">Inicio</a>
        <a href="#panelSobre" id="tituloOpcionesPrincipales" class="my-1">Sobre</a>
        <a href="requieres/cuentas/crear_cuenta.php"><button type="button" class="btn btn-outline-secondary my-2">Crear cuenta</button></a>
        <a href="requieres/cuentas/iniciar_sesion.php"><button type="button" class="btn btn-warning">Iniciar sesión</button></a>
      </div>

    </div>

    <div class="collapse navbar-collapse justify-content-end" id="navbarContenido">
      <a href="index.php" id="tituloOpcionesPrincipales" class="mx-1">Inicio</a>
      <a href="#" id="tituloOpcionesPrincipales" class="mx-1">Nosotros</a>
      <a href="requieres/cuentas/crear_cuenta.php"><button type="button" class="btn btn-outline-secondary">Crear cuenta</button></a>
      <button type="button" class="btn btn-warning text-white" style="background-color: #fc7d28;">Iniciar sesión</button>
    </div>

  </nav>

</header>
