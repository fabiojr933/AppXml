<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mannat Themes">
    <meta name="keyword" content="">

    <title>APP XML | Desenvolvido por Fabio Pereira</title>



    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Sweet Alert css -->
    <link href="<?php echo URL_BASE ?>assets/plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php echo URL_BASE ?>assets/images/favicon.ico">
    <link href="<?php echo URL_BASE ?>assets/plugins/morris-chart/morris.css" rel="stylesheet">
    <link href="<?php echo URL_BASE ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL_BASE ?>assets/css/slidebars.min.css" rel="stylesheet">
    <link href="<?php echo URL_BASE ?>assets/css/icons.css" rel="stylesheet">
    <link href="<?php echo URL_BASE ?>assets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL_BASE ?>assets/css/style.css" rel="stylesheet">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/jquery-3.2.1.min.js"></script>

    <script>
        var base_url = "<?php echo URL_BASE ?>";
    </script>
</head>

<body class="sticky-header">
    <section>
        <?php include "menu.php" ?>
        <div class="body-content">
            <?php include "cabecalho.php" ?>
            <div class="container-fluid">
                <?php $this->load($view, $viewData); ?>
            </div>
            <?php include "rodape.php" ?>
        </div>

    </section>
    <!-- jQuery -->
  
    <script src="<?php echo URL_BASE ?>assets/js/popper.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/jquery-migrate.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/modernizr.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/slidebars.min.js"></script>
    <!--plugins js-->
    <script src="<?php echo URL_BASE ?>assets/plugins/counter/jquery.counterup.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/pages/jquery.sparkline.init.js"></script>
    <script src="<?php echo URL_BASE ?>assets/plugins/chart-js/Chart.bundle.js"></script>
    <script src="<?php echo URL_BASE ?>assets/plugins/morris-chart/raphael-min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/plugins/morris-chart/morris.js"></script>
    <script src="<?php echo URL_BASE ?>assets/pages/dashboard-init.js"></script>
    <!--app js-->
    <script src="<?php echo URL_BASE ?>assets/js/jquery.app.js"></script>

    <!-- Sweet Alert Js  -->
    <script src="<?php echo URL_BASE ?>assets/plugins/sweet-alert/sweetalert2.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/pages/jquery.sweet-alert.init.js"></script>




    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 100,
                time: 1200
            });
        });
    </script>
</body>

</html>