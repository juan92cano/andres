<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Login
        </title>
        <meta name="description" content="Login">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link id="vendorsbundle" rel="stylesheet" href="{{ asset('assets/css/vendors.bundle.css') }}">
        <link id="appbundle" rel="stylesheet" href="{{ asset('assets/css/app.bundle.css')}}">
        <link id="myskin" rel="stylesheet" href="{{ asset('assets/css/skin-master.css')}}">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{ asset('assets/css/fa-brands.css')}}">
        <script src="{{ asset('assets/js/my_js.js') }}"></script>
    </head>
    <div class="page-wrapper">
        <div class="page-inner">
            <!-- Begin Left Menu -->
            @include('includes/left_menu')
            <!-- End Left Menu -->
            <div class="page-content-wrapper">
                <!-- BEGIN Page Header -->
                <header class="page-header" role="banner">
                    <!-- we need this logo when user switches to nav-function-top -->
                    <div class="page-logo">
                        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="Proyecto" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">Proyecto</span>
                            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                        </a>
                    </div>
                    <!-- DOC: nav menu layout change shortcut -->
                    <div class="hidden-md-down dropdown-icon-menu position-relative">
                        <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden" title="Ocultar Menú">
                            <i class="ni ni-menu"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Solamente Iconos">
                                    <i class="ni ni-minify-nav"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Bloquear Menú">
                                    <i class="ni ni-lock-nav"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- DOC: mobile button appears during mobile width -->
                    <div class="hidden-lg-up">
                        <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                            <i class="ni ni-menu"></i>
                        </a>
                    </div>
                    <div class="search">
                        <form class="app-forms hidden-xs-down" role="search" action="page_search.html" autocomplete="off">
                            <input type="text" id="search-field" placeholder="Buscar en esta página" class="form-control" tabindex="1">
                            <a href="#" onclick="return false;" class="btn-danger btn-search-close js-waves-off d-none" data-action="toggle" data-class="mobile-search-on">
                                <i class="fal fa-times"></i>
                            </a>
                        </form>
                    </div>
                    <div class="ml-auto d-flex">
                        <!-- activate app search icon (mobile) -->
                        <div class="hidden-sm-up">
                            <a href="#" class="header-icon d-flex align-items-center justify-content-center ml-2" data-action="toggle" data-class="mobile-search-on" data-focus="search-field" title="Search">
                                <i class="fal fa-search"></i>
                            </a>
                        </div>
                        <!-- app settings -->
                        <div class="hidden-md-down">
                            <a href="#" class="header-icon d-flex align-items-center justify-content-center ml-2" data-toggle="modal" data-target=".js-modal-settings">
                                <i class="fal fa-cog"></i>
                            </a>
                        </div>
                        <!-- app shortcuts -->
                        <div>
                            <a href="#" class="header-icon d-flex align-items-center justify-content-center ml-2" data-toggle="dropdown" title="My Apps">
                                <i class="fal fa-cube"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated w-auto h-auto">
                                <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top">
                                    <h4 class="m-0 text-center color-white">
                                        Accesos Directos
                                        <small class="mb-0 opacity-80">Aplicaciones de Usuarios / Complementos</small>
                                    </h4>
                                </div>
                                <div class="custom-scroll h-100">
                                    <ul class="app-list">
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-2 icon-stack-3x color-primary-600"></i>
                                                    <i class="base-3 icon-stack-2x color-primary-700"></i>
                                                    <i class="ni ni-settings icon-stack-1x text-white fs-lg"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Servicios
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-2 icon-stack-3x color-primary-400"></i>
                                                    <i class="base-10 text-white icon-stack-1x"></i>
                                                    <i class="ni md-profile color-primary-800 icon-stack-2x"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Cuenta
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-9 icon-stack-3x color-success-400"></i>
                                                    <i class="base-2 icon-stack-2x color-success-500"></i>
                                                    <i class="ni ni-shield icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Seguridad
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-18 icon-stack-3x color-info-700"></i>
                                                    <span class="position-absolute pos-top pos-left pos-right color-white fs-md mt-2 fw-400">28</span>
                                                </span>
                                                <span class="app-list-name">
                                                    Calendario
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-7 icon-stack-3x color-info-500"></i>
                                                    <i class="base-7 icon-stack-2x color-info-700"></i>
                                                    <i class="ni ni-graph icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Estadisticas
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-4 icon-stack-3x color-danger-500"></i>
                                                    <i class="base-4 icon-stack-1x color-danger-400"></i>
                                                    <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Mensajes
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-4 icon-stack-3x color-fusion-400"></i>
                                                    <i class="base-5 icon-stack-2x color-fusion-200"></i>
                                                    <i class="base-5 icon-stack-1x color-fusion-100"></i>
                                                    <i class="fal fa-keyboard icon-stack-1x color-info-50"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Notas
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-16 icon-stack-3x color-fusion-500"></i>
                                                    <i class="base-10 icon-stack-1x color-primary-50 opacity-30"></i>
                                                    <i class="base-10 icon-stack-1x fs-xl color-primary-50 opacity-20"></i>
                                                    <i class="fal fa-dot-circle icon-stack-1x text-white opacity-85"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Fotos
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-19 icon-stack-3x color-primary-400"></i>
                                                    <i class="base-7 icon-stack-2x color-primary-300"></i>
                                                    <i class="base-7 icon-stack-1x fs-xxl color-primary-200"></i>
                                                    <i class="base-7 icon-stack-1x color-primary-500"></i>
                                                    <i class="fal fa-globe icon-stack-1x text-white opacity-85"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Mapa
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-5 icon-stack-3x color-success-700 opacity-80"></i>
                                                    <i class="base-12 icon-stack-2x color-success-700 opacity-30"></i>
                                                    <i class="fal fa-comment-alt icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Chats
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-5 icon-stack-3x color-warning-600"></i>
                                                    <i class="base-7 icon-stack-2x color-warning-800 opacity-50"></i>
                                                    <i class="fal fa-phone icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Agenda
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-6 icon-stack-3x color-danger-600"></i>
                                                    <i class="fal fa-chart-line icon-stack-1x text-white"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Proyectos
                                                </span>
                                            </a>
                                        </li>
                                        <li class="w-100">
                                            <a href="#" class="btn btn-default mt-4 mb-2 pr-5 pl-5"> Agregar más aplicaciones </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- app user menu -->
                        <div>
                            <a href="#" data-toggle="dropdown" title="Admin" class="header-icon d-flex align-items-center justify-content-center ml-2">
                                <img src="{{ asset('assets/img/avatar-admin.png') }}" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                                <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                    <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                        <span class="mr-2">
                                            <img src="{{ asset('assets/img/avatar-admin.png') }}" class="rounded-circle profile-image" alt="Admin">
                                        </span>
                                        <div class="info-card-text">
                                            <div class="fs-lg text-truncate text-truncate-lg">Admin</div>
                                            <span class="text-truncate text-truncate-md opacity-80">Admin@admin.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider m-0"></div>
                                <div class="dropdown-divider m-0"></div>
                                <a href="#" class="dropdown-item" data-action="app-fullscreen">
                                    <span data-i18n="drpdwn.fullscreen">Pantalla Completa</span>
                                    <i class="float-right text-muted fw-n">F11</i>
                                </a>
                                <a href="#" class="dropdown-item" data-action="app-print">
                                    <span data-i18n="drpdwn.print">Imprimir</span>
                                    <i class="float-right text-muted fw-n">Ctrl + P</i>
                                </a>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-item fw-500 pt-3 pb-3" href="{{ route('logout') }}">
                                    <span data-i18n="drpdwn.page-logout">Cerrar Sesión</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- END Page Header -->