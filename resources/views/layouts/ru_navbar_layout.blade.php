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

   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link  href="../assets/css/fotorama.css" rel="stylesheet">


	 <script src="https://cdn.tiny.cloud/1/83ftca7napm98zyr3ds0ybh0hj8n9s32r6u81i683z6fqqsw/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css" >

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="../assets/css/animated.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
	<link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
	
	 <!-- Версия для слабовидящих -->
  <script src="https://lidrekon.ru/slep/js/jquery.js"></script>
<script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>
  <!---->

<!--

TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

-->

</head>

<body>




  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->
  


  <!-- ***** Header Area Start ***** -->





  <div class="site-mobile-menu site-navbar-target mt-5 bg-indigo">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
 
  
  <header class="site-navbar js-sticky-header site-navbar-target bg-indigo" role="banner" style="height: 60px;">

    <div class="container">
      <div class="row " style="height: 60px;">
        
        
        <div class="col-12 col-md-12 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
             <a href="{{ route('index') }}" class=""><img src="https://i.ibb.co/DWwsVHn/logo-white.png" id="img-logo" alt="" ></a>
              <li><a href="{{ route('index') }}" class="nav-link">Главная</a></li>

              <li class="has-children">
                <a href="#" class="nav-link">Колледж</a>
                <ul class="dropdown" >
                  @foreach ($cat_id_2 as $cat_2)
                  <li style="display: block;"><a href="{{ route('page.show', $cat_2['id']) }}" class="nav-link">{{$cat_2['title']}}</a></li>
                    @endforeach

                </ul>
              </li>
              <li class="has-children">
                <a href="#" class="nav-link">Абитуриентам</a>
                <ul class="dropdown" >
                  @foreach ($cat_id_3 as $cat_3)
                  <li style="display: block;"><a href="{{ route('page.show', $cat_3['id']) }}" class="nav-link">{{$cat_3['title']}}</a></li>
                    @endforeach

                </ul>
              </li>
              <li class="has-children">
                <a href="#" class="nav-link">Студентам</a>
                <ul class="dropdown" >
                  @foreach ($cat_id_4 as $cat_4)
                  <li style="display: block;"><a href="{{ route('page.show', $cat_4['id']) }}" class="nav-link">{{$cat_4['title']}}</a></li>
                    @endforeach

                </ul>
              </li>
              <li class="has-children">
                <a href="#" class="nav-link">Преподавателям</a>
                <ul class="dropdown" >
                  @foreach ($cat_id_5 as $cat_5)
                  <li style="display: block;"><a href="{{ route('page.show', $cat_5['id']) }}" class="nav-link">{{$cat_5['title']}}</a></li>
                    @endforeach

                </ul>
              </li>
              <li class="has-children">
                <a href="#" class="nav-link">Государство</a>
                <ul class="dropdown" >
                  @foreach ($cat_id_6 as $cat_6)
                  <li style="display: block;"><a href="{{ route('page.show', $cat_6['id']) }}" class="nav-link">{{$cat_6['title']}}</a></li>
                    @endforeach

                </ul>
              </li>
              

              <li><a href="https://amk-college.kz/page/2" class="nav-link">Контакты</a></li>
              
              <li class="has-children">
                <a href="#" class="nav-link"><i class="fa fa-globe"></i></a>
                <ul class="dropdown" style="column-count: 1 !important; max-width:120px;">
                 
                  <li><a href="{{ route('kz') }}" class="nav-link">Казахский</a></li>
                    <li><a href="{{ route('en') }}" class="nav-link">Английский</a></li>
                </ul>
              </li>
				
				  <li> <a  class="nav-link"  id="specialButton" href="#"  title="Версия для слабовидящих"><i class="fa fa-eye"></i></a></li>
             
            </ul>
          </nav>
        </div>


        <div class="col-12 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

      </div>
    </div>
    
  </header>


        @yield('content')
	


<div class="tel-fix btn btn-outline" style="background-color:white; position: fixed;
    bottom: 10px;
    right: 10px; -webkit-box-shadow: 0px 3px 15px -1px rgba(34, 60, 80, 0.33);
-moz-box-shadow: 0px 3px 15px -1px rgba(34, 60, 80, 0.33);
box-shadow: 0px 3px 15px -1px rgba(34, 60, 80, 0.33);"><a href="tel:3092916" style="color: #6610f2;">
Телефон поддержки: <br>
309-29-16</a></div>
       
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

	


  <footer class="page-footer pb-2 pt-5 bg-dark text-white ">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-3 py-3">
                <img src="https://i.ibb.co/fx108nS/logo.jpg" class="mb-4" width="200px">
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
                <div style="position:relative;overflow:hidden;"><a href="https://yandex.kz/maps/org/34266500891/?utm_medium=mapframe&amp;utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Алматинский многопрофильный
                        колледж</a><a href="https://yandex.kz/maps/162/almaty/category/college/184106236/?utm_medium=mapframe&amp;utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Колледж в Алматы</a><iframe src="https://yandex.kz/map-widget/v1/-/CCUyuPTX1D" width="560" height="250" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
            </div>
        </div>

        <div class="row text-rigth">
          <div class="col-lg-6">
            <p>
              Сайт разработан: WTC - command (volcharazack@gmail.com)<br>
              87057157135 - 87776284441 - 87056223908
            </p>
                    </div>
          <div class="col-lg-6">
  <p id="copyright" >©1941-2021, ГККП "Алматинский многопрофильный колледж" Управления образования
                    города Алматы</p>
          </div>
        
        </div>

      
    </div> <!-- .container -->
</footer>
	
<script src="../vendor/jquery/jquery.js"></script>
<script src="../vendor/bootstrap/js/jquery.sticky.js"></script>
  <!-- Scripts
 
-->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) 
    
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="../assets/js/fotorama.js"></script>
-->
	
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js" ></script>

<script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/animation.js"></script>
  <script src="../assets/js/imagesloaded.js"></script>
  <script src="../assets/js/custom.js"></script>
  
<script src="../assets/js/fotorama.js"></script>


  <script>

$(function() {

var siteSticky = function() {
  $(".js-sticky-header").sticky({topSpacing:0});
};
siteSticky();

var siteMenuClone = function() {

  $('.js-clone-nav').each(function() {
    var $this = $(this);
    $this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
  });


  setTimeout(function() {
    
    var counter = 0;
    $('.site-mobile-menu .has-children').each(function(){
      var $this = $(this);
      
      $this.prepend('<span class="arrow-collapse collapsed">');

      $this.find('.arrow-collapse').attr({
        'data-toggle' : 'collapse',
        'data-target' : '#collapseItem' + counter,
      });

      $this.find('> ul').attr({
        'class' : 'collapse',
        'id' : 'collapseItem' + counter,
      });

      counter++;

    });

  }, 1000);

  $('body').on('click', '.arrow-collapse', function(e) {
    var $this = $(this);
    if ( $this.closest('li').find('.collapse').hasClass('show') ) {
      $this.removeClass('active');
    } else {
      $this.addClass('active');
    }
    e.preventDefault();  
    
  });

  $(window).resize(function() {
    var $this = $(this),
      w = $this.width();

    if ( w > 768 ) {
      if ( $('body').hasClass('offcanvas-menu') ) {
        $('body').removeClass('offcanvas-menu');
      }
    }
  })

  $('body').on('click', '.js-menu-toggle', function(e) {
    var $this = $(this);
    e.preventDefault();

    if ( $('body').hasClass('offcanvas-menu') ) {
      $('body').removeClass('offcanvas-menu');
      $this.removeClass('active');
    } else {
      $('body').addClass('offcanvas-menu');
      $this.addClass('active');
    }
  }) 

  // click outisde offcanvas
  $(document).mouseup(function(e) {
    var container = $(".site-mobile-menu");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ( $('body').hasClass('offcanvas-menu') ) {
        $('body').removeClass('offcanvas-menu');
      }
    }
  });
}; 
siteMenuClone();

});
	  
	  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
  </script>

 

</body>
</html>