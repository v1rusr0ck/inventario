<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INVETARIO</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/freelancer.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/jquery-ui.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/jquery-ui.theme.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
	 <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>">InvetAPP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll dropdown">
                        <a class="dropdown-toggle" href="#portfolio" data-toggle="dropdown">Compra<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        	<li>
                        		<a href="<?php echo base_url();?>orden/crearorden">Orden de Compra</a>
                        	</li>
                        </ul>
                    </li>
                    <!-- separador de menú-->
                    <li class="page-scroll dropdown">
                        <a class="dropdown-toggle" href="#portfolio" data-toggle="dropdown">Almacen<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        	<li>
                        		<a href="<?php echo base_url();?>inventario">Inventario</a>
                        	</li>
                        </ul>
                    </li>
                    <!-- separador de menú-->
                    <li class="page-scroll dropdown">
                        <a class="dropdown-toggle" href="#portfolio" data-toggle="dropdown">Administración<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        	<li>
                        		<a href="">Usuarios</a>
                        	</li>
                        	<li>
                        		<a href="<?php echo base_url();?>proveedor">Proveedores</a>
                        	</li>
                        	<li>
                        		<a href="<?php echo base_url();?>producto">Productos</a>
                        	</li>
                        	<li>
                        		<a href="<?php echo base_url();?>empresa">Empresa</a>
                        	</li>
                        </ul>
                    </li>
                    <li class="page-scroll dropdown">
                        <a href="<?php echo base_url();?>auth/logout">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
