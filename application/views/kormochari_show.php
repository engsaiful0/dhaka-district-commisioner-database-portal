<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">-->
        <!--external css-->
        <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/zabuto_calendar.css">
        <!--<link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/lineicons/style.css">    

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet">

        <script src="<?php echo base_url() ?>assets/js/chart-master/Chart.js"></script>
        <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        <?php foreach ($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
        <style type='text/css'>
            body
            {
                font-family: Arial;
                font-size: 14px;
            }
            a {
                color: blue;
                text-decoration: none;
                font-size: 14px;
            }
            a:hover
            {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div>
            <h1>সকল কর্মচারীর তালিকা</h1>
        </div>
        <div>
            <?php echo $output; ?>
        </div>
    </body>
</html>
