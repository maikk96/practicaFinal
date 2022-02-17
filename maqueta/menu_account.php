<div class="container p-4">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="account.php"><img src="img/logo3.png"> Concesionario Nuevo Motor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="account.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nosotros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Modelos de Vehículos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="autos.php">Autos</a>
            <a class="dropdown-item" href="camionetas.php">Camionetas</a>
            <a class="dropdown-item" href="deportivos.php">Deportivos</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php">Ver todos</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tasacion.php">Tasación</a>
        </li>
      </ul>
      <div class=" container-form btn-toolbar">
        <?php
        include_once 'model/conexion.php';
        session_start();
        $name = $_SESSION['usuario'];
        echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hola,</span> <a href="account.php" class="log log1">'.$name.'</a>&nbsp;|
        <a href="logout.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>Cerrar Sesión</button></a></span>';
        ?>
      </div>
        <div class=" container-form btn-toolbar">
        <form class="form-inline my-2 my-lg-0">
          <a class="btn btn-outline-danger my-2 my-sm-0   mr-3" href="vender.php">Vende tu coche</a>
        </form>
      </div>
    </div>
  </nav>
</div>