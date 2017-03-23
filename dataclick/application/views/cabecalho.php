<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>DataClick -
        <?php echo $titulo; ?>
    </title>
    <!-- BOOTSTRAP CSS -->
    <link href="<?php echo base_url(); ?>includes/css/bootstrap.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script src="<?php echo base_url(); ?>includes/js/jquery-3.1.1.min.js"></script>
    <!-- BOOTSTRAP JavaScript -->
    <script src="<?php echo base_url(); ?>includes/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="#">AdemarPerin</a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url("clubes"); ?>"> Clubes <span class="sr-only">(current)</span></a></li>
                    <li><a href="<?php echo site_url("socios"); ?>"> Sócios</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
        
    <h2>
        <?php
            echo $titulo;
        ?>
    </h2>