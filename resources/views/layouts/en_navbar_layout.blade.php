<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Алматинский многопрофильный колледж</title>
<link rel="shortcut icon" href="/files/favicon.ico" type="image/x-icon">
    <meta name="author" content="Алматинский многопрофильный колледж" />
    <meta name="description" content="Официальный сайт Алматинского многопрофильного колледжа. Алматинский многопрофильный колледж. Жандосова, 63,
  9-й микрорайон, Ауэзовский район, Алматы, 050036/A10M6F5
  4 этажа" />
    <meta name="robots" content="index,follow" />
    <meta name="keywords"
        content="Колледжи алматы, Куда поступить после школы, Лучшие колледжа алматы, алматы колледж, колледж, поступление, 2022, студент,  Алматинский многопрофильный колледж,  сайт Алматинского многопрофильного колледжа, Жандосова, 63 " />
    <meta http-equiv="content-language" content="ru" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="/assets/plugins/vendor/owl-carousel/css/owl.carousel.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/assets/plugins/vendor/animate/animate.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="/assets/dist/css/theme.css">


</head>

<body>

        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white" style="
        left: 0;
        position: fixed;
        right: 0;
        top: 0;
        z-index: 1037;  margin: auto;">
            <div class="container">
              <a href="{{ route('en') }}" class="navbar-brand" style="padding-left: 50px;">
                    <img style="width:65px; heigth:65px;" src="https://i.ibb.co/fx108nS/logo.jpg" alt="АМК Logo">
              </a>
        
              <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav" style="padding-left: 50px;">

                  <li class="nav-item ">
                    <a id="" href="{{ route('en') }}" class="nav-link ">Home</a>
                  
                  </li>
                   
                  {{-- <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                      @foreach ($cat_id_1 as $cat_1)
                      <li><a href="{{ route('pageen.show', $cat_1['id']) }}" class="dropdown-item">{{$cat_1['title']}} </a></li>
                      @endforeach
                      
                    </ul>
                  </li> --}}
        
                  <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">College</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                      @foreach ($cat_id_2 as $cat_2)
                      <li><a href="{{ route('pageen.show', $cat_2['id']) }}" class="dropdown-item">{{$cat_2['title']}} </a></li>
                      @endforeach
                      
                    </ul>
                  </li>
        
                  <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"> For applicants</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                      @foreach ($cat_id_3 as $cat_3)
                      <li><a href="{{ route('pageen.show', $cat_3['id']) }}" class="dropdown-item">{{$cat_3['title']}} </a></li>
                      @endforeach
                      
                    </ul>
                  </li>
        
                  <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"> For Students</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                      @foreach ($cat_id_4 as $cat_4)
                      <li><a href="{{ route('pageen.show', $cat_4['id']) }}" class="dropdown-item">{{$cat_4['title']}} </a></li>
                      @endforeach
                      
                    </ul>
                  </li>
        
                  <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">For teachers</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                      @foreach ($cat_id_5 as $cat_5)
                      <li><a href="{{ route('pageen.show', $cat_5['id']) }}" class="dropdown-item">{{$cat_5['title']}} </a></li>
                      @endforeach
                      
                    </ul>
                  </li>
        
                  <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">State</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                      @foreach ($cat_id_6 as $cat_6)
                      <li><a href="{{ route('pageen.show', $cat_6['id']) }}" class="dropdown-item">{{$cat_6['title']}} </a></li>
                      @endforeach
                      
                    </ul>
                  </li>
        
                   <!--
                  <li class="nav-item dropdown">
                     <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Контакты</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                      @foreach ($cat_id_7 as $cat_7)
                      <li><a href="{{ route('page.show', $cat_7['id']) }}" class="dropdown-item">{{$cat_7['title']}} </a></li>
                      @endforeach
                    
                    </ul>
                  </li> -->
 <li class="nav-item ">
                    <a id="" href="https://amk-college.kz/page/2" class="nav-link ">Contacts</a>
        
                  <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-globe" aria-hidden="true"></i></a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                    
                      <li><a href="{{ route('index') }}" class="dropdown-item">Russian</a></li>
                      <li><a href="{{ route('kz') }}" class="dropdown-item">Kazakh</a></li>
                      
                    </ul>
                  </li>
                  
                </ul>
        
            
            </div>
          </nav>
        

        @yield('content')

			<div class="tel-fix btn btn-outline" style="background-color:white;"><a href="tel:3092916">309-29-16</a></div>

<div class="back-to-top" style="visibility: visible;"></div>
     
    <!-- Modal -->
    <div class="modal mt-5" id="exampleModalScrollable" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable mt-5" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class=" mb-2"><a href="html/special/Special1.html">Библиотечное дело, обработка информации и
                        архивное дело</a></div>
                <div class=" mb-2"><a href="html/special/Special2.html">Бухгалтерское дело и налогообложение</a>
                </div>
                <div class=" mb-2"><a href="html/special/Special3.html">Бухгалтерское дело и налогообложение</a>
                </div>
                <div class=" mb-2"><a href="html/special/Special4.html">Автотранспортные средства, морские и
                        воздушные суда</a></div>
                <div class=" mb-2"><a href="html/special/Special5.html">Механика и металлообработка</a></div>
                <div class=" mb-2"><a href="html/special/Special6.html">Производство материалов (стекло, бумага,
                        пластик и дерево)</a></div>
                <div class=" mb-2"><a href="html/special/Special7.html">Строительные работы и гражданское
                        строительство</a></div>
                <div class=" mb-2"><a href="html/special/Special8.html">Маркетинг и реклама</a></div>
                <div class=" mb-2"><a href="html/special/Special9.html">Мода, дизайн интерьеров и промышленный
                        дизайн</a></div>
                <div class=" mb-2"><a href="html/special/Special10.html">Аудиовизуальные средства и медиа
                        производство</a></div>
                <div class=" mb-2"><a href="html/special/Special11.html">Изучение языка</a></div>
                <div class=" mb-2"><a href="html/special/Special12.html">Разработка и анализ программного
                        обеспечения</a></div>
                <div class=" mb-2"><a href="html/special/Special13.html">Электротехника и энергетика</a></div>

            </div>
        </div>
    </div>
</div>
<!-- Modal -->


<footer class="page-footer pb-2">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-3 py-3">
                <img src="/assets/dist/img/index/logo.png" class="mb-4" width="130">


                <p><a href="#">Почта: amk_rko@mail.ru</a></p>
                <p><a href="#"><b>Телефон доверия: 309-29-16</b></a></p>
            </div>

            <div class="col-lg-3 py-3">
                <h5>Справочник</h5>
                <ul class="footer-menu">
                    <li><a href="#">О колледже</a></li>
                    <li><a href="#special">Специальности</a></li>
                    <li><a href="#">Грант</a></li>
                    <li><a href="#">Фотогалерея</a></li>
                    <li><a href="#">Управление</a></li>
                </ul>
            </div>
            <div class="col-lg-6 py-3">
                <div style="position:relative;overflow:hidden;"><a
                        href="https://yandex.kz/maps/org/34266500891/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:0px;">Алматинский многопрофильный
                        колледж</a><a
                        href="https://yandex.kz/maps/162/almaty/category/college/184106236/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:14px;">Колледж в Алматы</a><iframe
                        src="https://yandex.kz/map-widget/v1/-/CCUyuPTX1D" width="560" height="250" frameborder="1"
                        allowfullscreen="true" style="position:relative;"></iframe></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 py-2">
                <p id="copyright">©1941-2021, ГККП "Алматинский многопрофильный колледж" Управления образования
                    города Алматы</p>
            </div>
            <div class="col-sm-8 py-2">
                <p id="copyright">Разработчики сайта: WTC - command 🎸👩‍🎤 <br> Email: zackwoof69@gmail.com <br>
                    Номера связи:&nbsp;&nbsp;87057157135 - Bronislava&nbsp;&nbsp;&nbsp;&nbsp; 87776284441 - Kerigan
                    &nbsp;&nbsp;&nbsp; 87056223908 - Isaak </p>
            </div>

        </div>
    </div> <!-- .container -->
</footer> <!-- .page-footer -->



<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
</body>

</html>
