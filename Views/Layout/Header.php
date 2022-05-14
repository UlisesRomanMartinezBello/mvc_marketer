<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard S&S Comercializadora Godo S.A. de C.V. - <?= $pageData['page_title']; ?></title>
    <link rel="stylesheet" href="<?= urlPrefix('Assets/css/font.css'); ?>">
    <link rel="stylesheet" href="<?= urlPrefix('Assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= urlPrefix('Assets/css/theme.css'); ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.3/datatables.min.css">
</head>

<body>
    <div class="d-flex content-wrapper text-light" id="content-wrapper">
        <!-- Sidebar -->
        <div class="bg-primary sidebar-container">
            <div class="py-3 text-center pb-4">
                <a href="<?= urlPrefix('Home'); ?>">
                    <img src="<?= urlPrefix('Assets/images/system/logo-white.png'); ?>" alt="" class="img-fluid" width="120">
                </a>
            </div>
            <div class="list-group-flush menu">
                <!-- Home -->
                <a href="<?= urlPrefix('Home') ?>" class="list-group-item list-group-item-primary border-0 text-light pb-1">
                    <i class="fas fa-home px-2 h5"></i>
                    Inicio
                </a>
                <!-- Providers -->
                <a href="<?= urlPrefix('Providers') ?>" class="list-group-item list-group-item-primary border-0 text-light pb-1">
                    <i class="fas fa-handshake px-2 h5"></i>
                    Proveedores
                </a>
                <!-- Mail -->
                <a href="https://comercializadoragodo.com:2096/" class="list-group-item list-group-item-primary border-0 text-light pb-1" target="_blank">
                    <i class="fas fa-envelope px-2 h5"></i>
                    Correo
                </a>
                <!-- Documents -->
                <a href="<?= urlPrefix('Documents') ?>" class="list-group-item list-group-item-primary border-0 text-light pb-1">
                    <i class="fas fa-file-upload px-2 h5"></i>
                    Documentos
                </a>
                <!-- Reports -->
                <a href="<?= urlPrefix('Reports') ?>" class="list-group-item list-group-item-primary border-0 text-light pb-1">
                    <i class="fas fa-bullhorn px-2 h5"></i>
                    Reportes
                </a>
                <!-- Users -->
                <a href="<?= urlPrefix('Users') ?>" class="list-group-item list-group-item-primary border-0 text-light pb-1">
                    <i class="fas fa-users px-2 h5"></i>
                    Usuarios
                </a>
                <!-- Statistics -->
                <!-- <a href="#" class="list-group-item list-group-item-primary border-0 text-light pb-1">
                    <i class="fas fa-chart-line px-2 h4"></i>
                    Estadísticas
                </a> -->
                <!-- References -->
                <a href="<?= urlPrefix('References') ?>" class="list-group-item list-group-item-primary border-0 text-light pb-1">
                    <i class="fas fa-network-wired px-2 h5"></i>
                    Referencias
                </a>
                <!-- Quotes -->
                <!-- <a href="#" class="list-group-item list-group-item-primary border-0 text-light pb-1">
                    <i class="fas fa-file-contract px-2 h4"></i>
                    Cotizaciones
                </a> -->
                <!-- Calendar -->
                <!-- <a href="#" class="list-group-item list-group-item-primary border-0 text-light pb-1">
                    <i class="fas fa-calendar-alt px-2 h4"></i>
                    Calendario
                </a> -->
                <!-- Tasks -->
                <!-- <a href="#" class="list-group-item list-group-item-primary border-0 text-light pb-1">
                    <i class="fas fa-tasks px-2 h4"></i>
                    Tareas
                </a> -->
                <!-- Support -->
                <a href="<?= urlPrefix('Support') ?>" class="list-group-item list-group-item-primary border-0 text-light pb-1">
                    <i class="fas fa-question-circle px-2 h5"></i>
                    Soporte
                </a>
                <!-- Settings -->
                <a href="<?= urlPrefix('Settings') ?>" class="list-group-item list-group-item-primary border-0 text-light pb-1">
                    <i class="fas fa-cog px-2 h5"></i>
                    Configuración
                </a>
                <!-- Sign Out -->
            </div>
        </div>
        <!-- Content -->
        <div class="w-100 page-content-wrapper content">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid d-flex justify-content-around gap-2 flex-nowrap">
                    <!-- Toggle -->
                    <button class="btn bg-primary text-light toggle" id="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <!-- Search -->
                    <div class="input-group justify-content-start">
                        <input type="text" class="bg-primary p-2 border-0 text-light search" placeholder="&#xf002   Buscar...">
                    </div>
                    <!-- Avatar -->
                    <div class="navbar navbar-expand-lg d-none d-lg-inline">
                        <div class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" role="button" id="dropdown-avatar" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= urlPrefix('Assets/images/profile/profile-user.png'); ?>" alt="user-image" class="img-fluid avatar">
                                    <div class="mx-1 d-none d-lg-inline text-light">
                                        Ulises Martínez
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown-avatar">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-chart-line px-1"></i> Estadísticas
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cog px-1"></i> Configuración</a>

                                    <a class="dropdown-item" href="#" id="theme">
                                        <i class="fas fa-moon px-1"></i>Tema oscuro
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                                    </a>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>
            </nav>