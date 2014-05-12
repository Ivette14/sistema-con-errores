<!DOCTYPE html>
<html>

<head>
    <base href="<?php echo base_url(); ?>">
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
   
        <!-- Bootstrap --> 
        <link href="css/bootstrap.min.css" rel="stylesheet"> 
        <!-- JQUERY UI --> 
        <link href="css/smoothness/jquery-ui-1.10.4.custom.css" rel="stylesheet"> 
        <link href="css/smoothness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet"> 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo base_url();  ?>">

    <title>Sistema de Activo Fijo</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url().'seteo/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'seteo/font-awesome/css/font-awesome.css'; ?>" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="<?php echo base_url().'seteo/css/plugins/morris/morris-0.4.3.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'seteo/css/plugins/timeline/timeline.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'seteo/css/plugins/dataTables/dataTables.bootstrap.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'seteo/media/css/jquery.dataTables.css'; ?>" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url().'seteo/css/sb-admin.css'; ?>" rel="stylesheet">

</head>

<body>
    <!-- DIALOGO --> 
        <div id="dialogo" style="display:none;"><div class="notify"></div></div> 
 
        <!-- ALERTA --> 
        <div class="col-md-4 col-md-offset-4" style="position:fixed;" id="msj"></div>


    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sistema de Control de Activo Fijo</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">


                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li><a href="<?php echo base_url().'direccion/hrefini'; ?>"><i class="fa fa-dashboard fa-fw"></i> Inicio</a></li>
                        <li><a href="<?php echo base_url().'crud_activo'; ?>"><i class="fa fa-edit fa-fw"></i> Activo Fijo</a></li>
                        <li><a href="<?php echo base_url().'crud_baja'; ?>"><i class="fa fa-edit fa-fw"></i> Baja de Activo</a></li>
                        <li><a href="<?php echo base_url().'direccion/hrefemplea'; ?>"><i class="fa fa-edit fa-fw"></i> Empleados</a></li>
                        <li><a href="<?php echo base_url().'crud_proveedor'; ?>"><i class="fa fa-edit fa-fw"></i> Proveedores</a></li>
                        <li><a href="<?php echo base_url().'direccion/hrefdepre'; ?>"><i class="fa fa-edit fa-fw"></i> Depreciacion</a></li>
                        <li><a href="<?php echo base_url().'crud_cuenta'; ?>"><i class="fa fa-edit fa-fw"></i> Cuentas</a></li>
                        <li><a href="<?php echo base_url().'crud/index'; ?>"><i class="fa fa-edit fa-fw"></i> Sucursales</a></li>
                        <li><a href="<?php echo base_url().'direccion/hrefarea'; ?>"><i class="fa fa-edit fa-fw"></i> Areas</a></li>
                        <li><a href="<?php echo base_url().'direccion/hreftrasla'; ?>"><i class="fa fa-edit fa-fw"></i> Traslado de Activo</a></li>
                        <li><a href="<?php echo base_url().'usuarios'; ?>"><i class="fa fa-edit fa-fw"></i> Usuario</a></li>
                        <li><a href="#"><i class="fa fa-wrench fa-fw"></i> Setting</a></li>

                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">