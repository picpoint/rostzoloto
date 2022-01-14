<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админка | Ростзолото</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/public/assets/admin/css/admin.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{ route('logout') }}">Выход</a>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/public/assets/admin/img/admin.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->firstname }}</a>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item menu-open">
                        <a href="{{ route('products.index') }}" class="nav-link active">
                            <i class="far fa-gem"></i>
                            <p>Изделия<i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('products.create') }}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Создать</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('autoload') }}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Автозагрузка</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="{{ route('categories.index') }}" class="nav-link active">
                            <i class="fas fa-cubes"></i>
                            <p>Категория<i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('categories.create') }}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Создать</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="{{ route('materials.index') }}" class="nav-link active">
                            <i class="fas fa-cubes"></i>
                            <p>Материал<i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('materials.create') }}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Создать</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="{{ route('stones.index') }}" class="nav-link active">
                            <i class="fas fa-cubes"></i>
                            <p>Вставка<i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('stones.create') }}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Создать</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </nav>
        </div>

    </aside>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Главная панель</h1>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            @yield('content')
        </section>

    </div>

    <footer class="main-footer">
        Все права не защищены, всех прав не защитить...
    </footer>

</div>


<script src="public/assets/admin/js/admin.js"></script>


</body>
</html>
