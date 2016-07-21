<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tecnicol</title>

    <!-- Fonts 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    -->
    <link rel="icon" type="img/ico" href="img/tecnocol.png">
    <!-- Styles 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

     <link  href="<?php echo 'css/bootstrap.css';?>" rel="stylesheet" />

    <link  href="<?php echo 'css/app.css';?>" rel="stylesheet"/>

    <link href="<?php echo 'css/bootstrap-theme.css';?>" rel="stylesheet"/>
    
        
        <link href="<?php echo 'css/bootstrap.min.css';?>" rel ="stylesheet"/>

          <link href="<?php echo 'css/style.css';?>" rel ="stylesheet"/>
    
       <!-- <link rel="stylesheet" href="<?php echo 'css/font-awesome.min.css';?>"  type="text/css" >
!-->
<link rel="stylesheet" type="text/css" href="<?php echo 'css/elegant-icons-style.css';?>">

 <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />

   <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
 <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
      <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet"> 
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">


<script src="js/jquery.js"></script>
<script  src="js/jquery-ui-1.8.18.custom.min.js"></script>
        <link href="<?php echo 'css/footer-distributed-with-address-and-phones.css';?>" rel="stylesheet" type="text/css" >

    <style>
    li:active{
      background-color: orange;
    }
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                 <!--  Tecnicol--> <img src="img/tecnocol.png" height="32" width="60">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/courses') }}">Cursos</a></li>
                     <li><a href="{{ url('/stud') }}">Resultado</a></li>
                      <li><a href="{{ url('/stud') }}">Mensagens</a></li>
                       <li><a href="{{ url('/stud') }}">Contato</a></li>
                     <li><a href="{{ url('/stud') }}">Perfil</a></li>
                     <li><a href="{{ url('/logout') }}">logout</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Entrar</a></li>
                        <li><a href="{{ url('/register') }}">Inscrever-se</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Bem Vida {{  Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')



    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
  @yield('foot')
       <footer class="footer-distributed" style="border:500px 0px 0px 0px;">
         
        <div class="footer-left">

        
        <!--<h3>Tec<span>nicol</span></h3>--><img src="img/tecnocol.png">

        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Blogue</a>
          ·
          <a href="#">Sobre nós</a>
          ·
          <a href="#">Faq</a>
          ·
          <a href="#">Contacto</a>
        </p>

        <p class="footer-company-name">Tecnicol &copy; 2016</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Av. Eduardo Modlane n° 1248 -Maputo</span> Maputo, Mozambique</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+258 82 305 2005</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">support@tecnicol.mz</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          Tecnicol é uma instituição exemplar que leva à formação profissional a um nível totalmente novo. O certificado atesta que é estagiário para ajudar a capacitá-los no futuro.
        </p>

        <div class="footer-icons">

          <a href="https://www.facebook.com/tecnicolmz/"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

       </footer>

</html>
