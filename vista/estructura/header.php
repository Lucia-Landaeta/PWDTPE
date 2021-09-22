<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap/bootstrapValidator.min.css">
  <link rel="stylesheet" href="../css/fontawesome/all.min.css">
  <script src="../js/jquery/jquery-3.5.1.slim.min.js"></script>
  <script src="../js/popper/popper.min.js"></script>
  <script src="../js/bootstrap/bootstrap.min.js"></script>
  <script src="../js/bootstrap/bootstrapValidator.min.js"></script>
  <title><?php $Titulo ?></title>
  <style type="text/css">
    .sidebar li .submenu {
      list-style: none;
      margin: 0;
      padding: 0;
      padding-left: 1rem;
      padding-right: 1rem;
    }

    .sidebar .nav-link {
      font-weight: 500;
      color: var(--bs-dark);
    }

    .sidebar .nav-link:hover {
      color: var(--bs-primary);
    }

    small.help-block {
      color: #F44336 !important;
    }
    /* i.form-control-feedback{
      color: #F44336 !important;
    } */
  </style>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
      document.querySelectorAll('.sidebar .nav-link').forEach(function(element) {
        element.addEventListener('click', function(e) {
          let nextEl = element.nextElementSibling;
          let parentEl = element.parentElement;
          if (nextEl) {
            e.preventDefault();
            let mycollapse = new bootstrap.Collapse(nextEl);
            if (nextEl.classList.contains('show')) {
              mycollapse.hide();
            } else {
              mycollapse.show();
              var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
              if (opened_submenu) {
                new bootstrap.Collapse(opened_submenu);
              }
            }
          }
        });
      })
    });
  </script>
</head>

<body class="bg-light">
  <header class="section-header py-3">
    <div class="container-fluid">
      <h2>Programación Web Dinámica</h2>
    </div>
  </header>
  <div class="container-fluid">
    <section class="section-content py-3">
      <div class="row">
        <aside class="col-lg-3">
          <nav class="sidebar card py-2 mb-4">
            <ul class="nav flex-column" id="nav_accordion">
              <li class="nav-item">
                <a class="nav-link" href="../Inicio/index.php">Inicio</a>
              </li>
              <li class="nav-item has-submenu">
                <a class="nav-link" href="#">Trabajo Práctico 1 <i class="fas fa-caret-down"></i> </a>
                <ul class="submenu collapse">
                  <li><a class="nav-link" href="../TP1/EjercicioUno.php">Ejercicio 1</a></li>
                  <li><a class="nav-link" href="../TP1/EjercicioDos.php">Ejercicio 2</a></li>
                  <li><a class="nav-link" href="../TP1/EjercicioTresASeis.php">Ejercicio 3 a 6</a> </li>
                  <li><a class="nav-link" href="../TP1/EjercicioSiete.php">Ejercicio 7</a> </li>
                  <li><a class="nav-link" href="../TP1/EjercicioOcho.php">Ejercicio 8</a> </li>
                </ul>
              </li>
              <li class="nav-item has-submenu">
                <a class="nav-link" href="#">Trabajo Práctico 2 <i class="fas fa-caret-down"></i> </a>
                <ul class="submenu collapse">
                  <li><a class="nav-link" href="../TP2/EjercicioTres.php">Ejercicio 3</a></li>
                  <li><a class="nav-link" href="../TP2/EjercicioCuatro.php">Ejercicio 4</a></li>
                </ul>
              </li>
              <li class="nav-item has-submenu">
                <a class="nav-link" href="#">Trabajo Práctico 3 <i class="fas fa-caret-down"></i> </a>
                <ul class="submenu collapse">
                  <li><a class="nav-link" href="../TP3/EjercicioUno.php">Ejercicio 1</a></li>
                  <li><a class="nav-link" href="../TP3/EjercicioDos.php">Ejercicio 2</a></li>
                  <li><a class="nav-link" href="../TP3/EjercicioTres.php">Ejercicio 3</a></li>
                </ul>
              </li>
              <li class="nav-item has-submenu">
                <a class="nav-link" href="#">Trabajo Práctico 4 <i class="fas fa-caret-down"></i> </a>
                <ul class="submenu collapse">
                  <li><a class="nav-link" href="../TP4/verAuto.php">Ver autos</a></li>
                  <li><a class="nav-link" href="../TP4/buscarAuto.php">Buscar Auto</a></li>
                  <li><a class="nav-link" href="../TP4/listaPersonas.php">Listar Dueños</a></li>
                  <li><a class="nav-link" href="../TP4/nuevaPersona.php">Nueva Persona</a></li>
                  <li><a class="nav-link" href="../TP4/nuevoAuto.php">Nuevo Auto</a></li>
                  <li><a class="nav-link" href="../TP4/cambioDuenio.php">Cambio de dueño</a></li>
                  <li><a class="nav-link" href="../TP4/buscarpersona.php">Buscar Persona</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </aside>
        <main class="col-lg-9">