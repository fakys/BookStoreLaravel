<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="{{asset('assets/css/admin/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/admin/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/admin/base.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('assets/img/blue-logo.png')}}" alt="AdminLTELogo" width="200">
    </div>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <div class="nav-link pushmenu" data-widget="pushmenu" role="button">
                    <i class="fas fa-bars"></i>
                </div>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Главная</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Поиск" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="far fa-comments"></i>
                    <!--          !!!!-->
                    <span class="badge badge-danger navbar-badge">5</span>
                    <!--          !!!!-->
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">
                    <i class="far fa-bell"></i>
                    <!--          !!!!-->
                    <span class="badge badge-warning navbar-badge">15</span>
                    <!--          !!!!-->
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" role="button">
                    <i class="fa fa-window-restore" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </nav>

    {{--!!!!! user ava--}}
    <aside class="main-sidebar sidebar-primary elevation-4">
        <div class="brand-link-container">
            <a href="#" class="brand-link-logo">
                <img src="{{asset('assets/img/white-logo.png')}}" class="site-logo">
            </a>
        </div>
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="#" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">###</a>
                </div>
            </div>
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar sidebar-search-input" type="search" placeholder="Поиск" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar btn-white">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div>
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    {{--                    !!!FOR--}}
                    <li class="nav-item">
                        <a href="#" class="nav-link admin-nav-link">
                            <i class="nav-icon fas fa-address-book"></i>
                            <p>
                                Gallery
                            </p>
                        </a>
                    </li>
                    {{--                    !!!ENDFOR--}}
                </ul>
            </div>
        </div>
    </aside>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Title</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Главная</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">

        </section>
    </div>
    <footer class="main-footer">
        <strong>BookStore &copy; 2014-2024.</strong>
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
        </div>
    </footer>
</div>


<!-- jQuery -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/js/adminlte.js')}}"></script>
</body>
</html>
