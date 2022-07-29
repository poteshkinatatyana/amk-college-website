<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    
     <meta http-equiv="content-language" content="ru" />

	 <script src="https://cdn.tiny.cloud/1/83ftca7napm98zyr3ds0ybh0hj8n9s32r6u81i683z6fqqsw/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- Google Font: Source Sans Pro -->

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="/assets/plugins/vendor/owl-carousel/css/owl.carousel.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/assets/plugins/vendor/animate/animate.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="/assets/dist/css/theme.css">
    <link href="/assets/dist/css/colorbox.css" rel="stylesheet">

    


</head>

<body>



    <div class="wrapper">


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
          
      
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://i.pinimg.com/736x/64/74/52/647452a14797e6a278f6d467248f656b.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>
      
      
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      
                        <li class="nav-item">
                            <a href="{{ route('homeAdmin') }}" class="nav-link">
                                <i class="nav-icon fas fa-rat"></i>
                                <p>
                                    Главная
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-crow"></i>
                                <p>
                                    Русский
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('post.index') }}" class="nav-link">
                                        <p>Все страницы</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('post.create') }}" class="nav-link">
                                        <p>Добавить страницу</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      
                                        <p>
                                            Вкладки
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('category.index') }}" class="nav-link">
                                                <p>Все вкладки</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('category.create') }}" class="nav-link">
                                                <p>Добавить вкладку</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    
      
                       
      
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-dove"></i>
                                <p>
                                   Казахский
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('postkz.index') }}" class="nav-link">
                                        <p>Все страницы</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('postkz.create') }}" class="nav-link">
                                        <p>Добавить страницу</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                       
                                        <p>
                                            Вкладки Kz
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('categorykz.index') }}" class="nav-link">
                                                <p>Все вкладки</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('categorykz.create') }}" class="nav-link">
                                                <p>Добавить вкладку</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
      
                      
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-fish"></i>
                                <p>
                                   Английский
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('posten.index') }}" class="nav-link">
                                        <p>Все страницы</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('posten.create') }}" class="nav-link">
                                        <p>Добавить страницу</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                       
                                        <p>
                                            Вкладки En
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('categoryen.index') }}" class="nav-link">
                                                <p>Все вкладки</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('categoryen.create') }}" class="nav-link">
                                                <p>Добавить вкладку</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
      
                      
      
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
	
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background: url('https://i.pinimg.com/originals/f0/db/aa/f0dbaa7fefc67033f4cab4a78e4c1590.jpg') no-repeat ; background-position: 100%; background-size:100%;">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
      
      
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>

    <!-- jQuery -->
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="/assets/dist/js/adminlte.js"></script>
    <!-- WOW -->
    <script src="/assets/plugins/vendor/wow/wow.min.js"></script>
    <!-- Owl carousel -->
    <script src="/assets/plugins/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <!-- Waypoints -->
    <script src="/assets/plugins/vendor/waypoints/jquery.waypoints.min.js"></script>
    <!-- Animate number -->
    <script src="/assets/plugins/vendor/animateNumber/jquery.animateNumber.min.js"></script>
    <!-- Theme number -->
    <script src="/assets/dist/js/theme.js"></script>
    <script type="text/javascript" src="/assets/dist/js/jquery.colorbox-min.js"></script>

    
    <script type="text/javascript" src="/packages/barryvdh/elfinder/js/standalonepopup.js"></script>
    <script src="/assets/dist/js/admin.js"></script>
    
  
</body>

</html>