<?php

//session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Sistem Examen
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="http://localhost/Proyecto-de-Grado-Ensec-main/public/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="http://localhost/Proyecto-de-Grado-Ensec-main/public/css/bootstrap.min.css" rel="stylesheet" />
  <link href="http://localhost/Proyecto-de-Grado-Ensec-main/public/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
<!-- swit alert -->
<script src="http://localhost/Proyecto-de-Grado-Ensec-main/public/js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="http://localhost/Proyecto-de-Grado-Ensec-main/public/js/plugins/sweetalert2/sweetalert2.all.js"></script>


</head>

<?php

echo '<body class=" ">';

echo '<div class="wrapper">';

include COMPONENTS_DIR . "/leftMenu.php";
echo '<div class="main-panel ps">';
include COMPONENTS_DIR . "/navbar.php";

$ruta = $_GET['ruta'];
if ($ruta === 'postulantes') {

  include COMPONENTS_DIR . "/postulantes.php";
}

echo '</div>';

echo '</div>';



?>

<!--   Core JS Files //  simplificar la manipulación del DOM  -->
<script src="http://localhost/Proyecto-de-Grado-Ensec-main/public/js/core/jquery.min.js"></script>
<!--   Core JS Files //  utilizada para gestionar el posicionamiento de elementos emergentes y desplegables.  -->
<script src="http://localhost/Proyecto-de-Grado-Ensec-main/public/js/core/popper.min.js"></script>
<script src="http://localhost/Proyecto-de-Grado-Ensec-main/public/js/core/bootstrap.min.js"></script>
<!-- Perfect Scrollbar, que mejora la funcionalidad de desplazamiento en contenedores. -->
<script src="http://localhost/Proyecto-de-Grado-Ensec-main/public/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin     -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS // crear gráficos y visualizaciones interactivas en la página. -->
<script src="http://localhost/Proyecto-de-Grado-Ensec-main/public/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin // permite mostrar notificaciones emergentes   -->
<script src="http://localhost/Proyecto-de-Grado-Ensec-main/public/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
<script src="http://localhost/Proyecto-de-Grado-Ensec-main/public/js/black-dashboard.min.js?v=1.0.0" type="text/javascript"></script>

<script>
      $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

      });
    </script>
</body>


</html>