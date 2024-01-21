<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{$description ?? ''}}"/>
    <meta name="keywords" content="{{$keywords ?? ''}}"/>
    <title>{{$title ?? ''}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{ asset(config('settings.theme')) }}/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="{{ asset(config('settings.theme')) }}/assets/ico/favicon.ico">
    <script src="https://kit.fontawesome.com/e5bcd3075c.js" crossorigin="anonymous"></script>
    
    {!! $lr_header ?? '' !!}
    <style>
         body *{
            font-family: 'Montserrat', sans-serif;  
        }
        .header *{
            background-color:#1D3F6E !important;
            color:white !important;
            font-family: 'Montserrat', sans-serif;      
          }
          .header i{
            font-family: FontAwesome !important;
            background-color: goldenrod !important;
            padding: 5px 8px;
            font-size: 18px;
            border-radius: 50%;
          }
          .header .contact-number span{
            font-size:18px;
            font-weight:bold;
            line-height:36px
          }
        .header-wrapper{
           padding:10px 0 7px 0 !important;
        }
        .header{
            width:100% !important;
            display: block !important;
        }
        .header .container{
            width:100% !important;
            padding-left:7vw;
        }
        .header .title{
            background-color:transparent !important;
        }
        
        .navigation-bar{        
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }
        
        .is-sticky .logo {
   
        line-height: auto !important;

        }
        .is-sticky .sf-menu .sf-with-ul:after
        {
            right:0.2em;
        }
        .top-bar{
			background-color: black;
			display: flex;
			justify-content: center;
		}
		.top-bar span{
			color:white;
			font-size: 12px;
			font-family: "Open Sans";
            padding:3px;
            margin-right:20px;
		}
        @media screen and (max-width: 429px) {
           
            .navigation-bar .menu-icon {
            display:flex;
            flex-direction:column;
        }
		.top-bar {
			display: none;
		}
        .container .contact-number{
            padding:20px;
            display:flex;
            justify-content:end;
            flex:1;
        }
        .header .nav{
            position:absolute;
            right:0px;
            top:50px;
            padding-top:30px;
            width:0px;
            z-index:-1;
        }
        .header .nav , .header .nav *{
            background-color:#23393d !important;
            
        }
        .nav>li>a {
            padding:10px 15px 10px 15px  !important;
        }

        .m_logo{
            width:30%;
        }
        .header .contact-number span span{
            display:none !important;
        }
         .nav.sf-menu >li>a:hover{
            background-color:#23393d !important;
        }
        }
		@media screen and (min-width: 430px) and (max-width: 991px) {
        
        .navigation-bar .menu-icon {
            display:flex;
            flex-direction:column;
        }
		.top-bar {
			display: none;
		}
        .container .contact-number{
            padding:20px;
            display:flex;
            justify-content:end;
            flex:1;
        }
        .header .nav{
            position:absolute;
            right:0px;
            top:50px;
            padding-top:30px;
            width:0px;
            z-index:-1;
        }
        .header .nav , .header .nav *{
            background-color:#23393d !important;
            
        }
        .nav>li>a {
            padding:10px 15px 10px 15px  !important;
        }

        .m_logo{
            width:30%;
        }
        .nav.sf-menu >li>a:hover{
            background-color:#23393d !important;
        }
		}
        @media screen and (min-width: 992px) and (max-width: 1250px) {
            
            .nav.sf-menu >li>a {
            padding: 28px 15px 28px 35px !important;
            font-size: 13px !important;
        }
            .is-sticky .sf-menu.nav>li>a{
            padding: 28px 15px 28px 35px !important;
            font-size:13px !important;
        }
            .menu-icon{
                display:none;
            }
           
            .m_logo {
            width:20%;
            }
        }
        @media screen and (min-width: 1251px) {
            .header .nav.sf-menu {
                display:flex;
                justify-content:space-between;
                max-width:800px;
            }
            .nav.sf-menu >li>a {
            padding: 28px 15px 28px 35px !important;
            font-size: 13px !important;
        }
            .is-sticky .sf-menu.nav>li>a{
            padding: 28px 15px 28px 35px !important;
            font-size:13px !important;
        }
            .menu-icon{
                display:none;
            }
           
            .navigation-bar
            {
                justify-content:center !important;
            }
        }
        .sticky-wrapper{
            position:sticky;
            top:0;
        }
        .header .nav{
            transition:width 0.3s ease-out;
            flex:1;

        }
        .m_logo img{
            width:100%;
            max-height:70px;

        }
       
       
        .navigation-bar .menu-icon span{
            height:5px;
            background-color:white !important;
            padding:2px 15px;
            transform:rotate(0);
            margin:2px;
            top:0;
            position:relative;
        }
        .navigation-bar .hamburger span{
            transition:top  0.3s 0.3s, transform 0.3s 0s;
        }
        .navigation-bar .cross span{
            transition:top  0.3s 0s, transform 0.3s 0.3s;

        }
        .navigation-bar .hamburger #line2{
           opacity: 1;
           transition: opacity 0.3s;
        }
        .navigation-bar .cross #line1{
            transform: rotate(45deg);
            top:9px ;


        }
        .navigation-bar .cross #line2{
           opacity: 0;
           transition: opacity 0.3s;
        }
        .navigation-bar .cross #line3{
            transform: rotate(-45deg);
            top:-9px ;

        }
        .header  .m_active{
            width: 300px !important;
            max-width:100%;
        }
        .header .sf-menu>li{
            overflow:hidden;
        }
        .sf-menu ul {
            display:none !important;
        }
       
            
    </style>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Select the icon element after the document has loaded
            var iconElement = document.querySelector('.menu-icon');
            var nav_menu = document.querySelector('.nav');
            var line1 = document.querySelector('#line1');
            var line2 = document.querySelector('#line2');
            var line3 = document.querySelector('#line3');

            console.log(iconElement);

            // Add a click event listener to the icon
            iconElement.addEventListener('click', function() {
                // Toggle the 'clicked' class on click\
                nav_menu.classList.toggle('m_active');
                iconElement.classList.toggle('cross');
                iconElement.classList.toggle('hamburger');
            });
        });
    </script>
</head>
<body id="home" class="wide @if(isAdminBarVisible())) adminbar @endif">

@if(get_theme_mod('rentit_enable_preloader',1))
    <!-- PRELOADER -->
    <div id="preloader">
        <div id="preloader-status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
            <div id="preloader-title">{{__('Loading')}}</div>
        </div>
    </div>
    <!-- /PRELOADER -->
@endif
<!-- WRAPPER -->
<div class="wrapper">
    <div class="top-bar">
        <span> <i class="fa fa-phone" aria-hidden="true"></i> +971 586 887 706</span>
        <span><i class="fa fa-map-marker" aria-hidden="true"></i> AL SERKAL - 801, 8TH FLOOR - BUILDING 2 17 19B STREET - PORT SAEED - DUBAI - UNITED ARAB EMIRATES</span>
        <span><i class="fa fa-clock-o" aria-hidden="true"></i> MON - SAT 8.00 - 18.00</span>
    </div>
    <!-- HEADER -->
    <header class="header fixed ">
        <div class="header-wrapper">
            <div class="container">
                <!-- Navigation -->
                <nav class="navigation-bar closed clearfix">
                    <!-- Logo --><?php
				if(get_theme_mod( 'header_logo' )){ ?>
                    <div class="m_logo " style="background-color: #1D3F6E !important;">
    
                        <a href="{{ url('/') }}"
                        >
    
                            @if(get_theme_mod( 'header_logo' ))
                                <img 
                                        src="<?php  echo the_image_url( get_theme_mod( 'header_logo' ) ); ?>"
                                        alt=""/>
                            @endif
                        </a>
    
                    </div> <?php  } ?>
                <!-- /Logo -->
    
                <!-- navigation menu -->
						<?php
						/*
                echo cache()->rememberForever( 'header-menu', function () {
                    return app( 'BaseCms' )->nav_menu( [
                        'theme_location' => 'header-menu',
                        'walker' => new  \Corp\Repositories\MenuWalker(),
                        'echo' => false
                    ] );
                } );
                        */

						echo app( 'BaseCms' )->nav_menu( [
							'theme_location' => 'header-menu',
							'walker' => new  \Corp\Themes\RentIt\Classes\MenuWalker(),
							'echo' => false
						] );

						?>


                    <!-- Add Scroll Bar -->
                    <div class ="contact-number">
                        <a href="">
                    <span> <i class="fa fa-phone" aria-hidden="true"></i> <span>+971 586 887 706</span> </span>
                    </a>
                    </div>
                    <div class="swiper-scrollbar"></div>
                     <!-- Mobile menu toggle button -->
                <!-- <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a> -->
                <!-- /Mobile menu toggle button -->
                <div class ="menu-icon hamburger ">
                 <span id="line1"></span>
                 <span id ="line2"></span>
                 <span id= "line3"></span>
                </div>
                

                </nav>
                <!-- /Navigation -->

            </div>


        </div>

    </header>
    <!-- /HEADER -->

</div>



<?php  if(Auth::user() && 1 > 2){ ?>
<div id="themeConfig" class="theme-config  m_active" style="right: 0px;">
    <h4 class="theme-config-head">{{__('User Account')}}<a href="#"><i class="fa   fa-user"></i></a></h4>
    <div class="theme-config-wrap">

        <ul class="options colors" data-type="colors">
            <li class="user-auth-box">
                {{ __('Hi, :name', ['name' =>Auth::user()->name ]  )}}

                <a
                        href="{{route('MyAccount')}}">{{__('My bookings')}}</a>
                <a
                        href="{{route('MyAccountEdit')}}">{{__('Edit account')}}</a>
                <a class="ab-item"
                   href="{{route('logout')}}">{{__('admin.Log Out')}}</a>
            </li>

        </ul>

    </div>
</div>
<?php  } ?>
