<!DOCTYPE html>
<html lang="en">

  <!-- Mirrored from colorlib.com/preview/theme/vcard2/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Feb 2020 20:00:40 GMT -->
  <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
  <head>
    <title>Arqum | Portfolio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Web Developer">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="{!! asset('public/styles/bootstrap-4.1.2/bootstrap.min.css') !!}" rel="stylesheet" />
    <link href="{!! asset('public/plugins/font-awesome-4.7.0/css/font-awesome.min.css') !!}" rel="stylesheet" />
    <link href="{!! asset('public/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css') !!}" rel="stylesheet" />
    <link href="{!! asset('public/styles/main_styles.css') !!}" rel="stylesheet" />
    <link href="{!! asset('public/styles/responsive.css') !!}" rel="stylesheet" />
    <link href="{!! asset('public/styles/skills.css') !!}" rel="stylesheet" />
    <link href="{!! asset('public/styles/skills_responsive.css') !!}" rel="stylesheet" /> -->


    <link href="http://www.myvitalwireless.com/mehrozportfolio/public/styles/bootstrap-4.1.2/bootstrap.min.css" rel="stylesheet" />
    <link href="http://www.myvitalwireless.com/mehrozportfolio/public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="http://www.myvitalwireless.com/mehrozportfolio/public/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />
    <link href="http://www.myvitalwireless.com/mehrozportfolio/public/styles/main_styles.css" rel="stylesheet" />
    <link href="http://www.myvitalwireless.com/mehrozportfolio/public/styles/responsive.css" rel="stylesheet" />
    <link href="http://www.myvitalwireless.com/mehrozportfolio/public/styles/skills.css" rel="stylesheet" />
    <link href="http://www.myvitalwireless.com/mehrozportfolio/public/styles/skills_responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    {{-- Custome CSS (2025-10-24) --}}
    <style>
        /* Global reset to reduce oversized UI */
      html, body {
        font-size: 14px !important; /* base font slightly smaller; change to 13px if still big */
        line-height: 1.45 !important;
      }

      /* If bootstrap is loaded with large root font, explicitly set rem baseline */
      :root { font-size: 14px; }

      /* Header & nav smaller */
      .header { height: 64px !important; }
      .header .logo { font-size: 20px !important; }
      .header .main_nav ul li a { font-size: 13px !important; padding: 8px 10px !important; }

      /* Sidebar width smaller */
      .general_info { flex: 0 0 240px !important; max-width: 240px !important; }

      /* Sidebar image & text compact */
      .general_info_image img { width: 100%; height: auto; max-height: 220px; object-fit: fill; }
      .general_info_content .general_info_title { font-size: 16px; }
      .general_info_list .general_info_text { font-size: 13px; }

      /* Main content spacing reduced */
      .main_content { padding: 16px !important; }
      .skills-showcase { padding: 22px 0 !important; border-radius: 10px; margin-bottom: 30px; }

      /* Tile sizes reduced */
      .skills_wrapper { gap: 18px; padding: 0 18px; }
      .skill_tile { padding: 18px !important; border-radius: 10px; }
      .skill_tile i { font-size: 30px !important; margin-bottom: 10px !important; }
      .skill_tile h3 { font-size: 15px !important; }
      .skill_tile p { font-size: 12px !important; }

      /* Milestones smaller */
      .milestone_card { padding: 18px 28px !important; }
      .milestone_card h2 { font-size: 28px !important; }

      /* Reduce overall scale on small screens too */
      @media (max-width: 1200px) {
        html, body { font-size: 13px !important; }
        .general_info { flex: 0 0 220px !important; max-width: 220px !important; }
      }

      /* Remove aggressive hover transforms that make tiles appear too large */
      .skill_tile:hover {
        transform: translateY(-6px) scale(1.01) !important;
        box-shadow: 0 6px 18px rgba(0,0,0,0.12) !important;
      }

      /* Make scroll area fit */
      .main_content_scroll {
        height: calc(100vh - 64px - 40px) !important; /* header + padding */
        overflow-y: auto !important;
      }

      /* Prevent image/icon overflow */
      img, svg, .fa { max-width: 100%; height: auto !important; }
    </style>
    {{-- Custome CSS (2025-10-24) --}}

  </head>
  <body>
    <div class="super_container">

      <header class="header">
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
          <div class="logo">Web Developer</div>
          <div class="main_nav d-flex flex-row align-items-end justify-content-start">
            <ul class="d-flex flex-row align-items-center justify-content-start">
              <li><a href="{{ url('/') }}">About</a></li>
              <li><a href="{{ url('/skill') }}">Skills</a></li>
              <li><a href="{{ url('/education') }}">Education</a></li>
              <li><a href="{{ url('/experience') }}">Experience</a></li>
              <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
            </ul>
            <!-- <div class="header_button ml-auto">
              <a href="#">Available for freelance work</a>
              <div class="d-flex flex-column align-items-center justify-content-center"><img src="images/download.png" alt=""></div>
            </div> -->
          </div>
          <div class="menu">
            <div class="menu_content d-flex flex-row align-items-start justify-content-end">
              <div class="hamburger ml-auto">MENU</div><br\>
              <div class="menu_nav text-right">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                  <li><a href="{{ url('/') }}">About</a></li><br\>
                  <li><a href="{{ url('/skill') }}">Skills</a></li><br\>
                  <li><a href="{{ url('/education') }}">Education</a></li><br\>
                  <li><a href="{{ url('/experience') }}">Experience</a></li><br\>
                  <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="content_container">
        <div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

          <div class="general_info d-flex flex-xl-column flex-md-row flex-column">
            <div>
              <div class="general_info_image">
                {{-- <div class="background_image" style="background-image:url(http://level3bos.com/hrm/public/img/_2021-01-01_.128.57142857143_.jpeg);background-position-y: 20px;background-size: 60%;"></div> --}}
                <div class="background_image" style="background-position-y: 20px; background-size: 60%;">
                  <a href="https://example.com" target="_blank">
                    <img src="{{ asset('images/Arqum.png') }}"
                        alt="Background"
                        style="width:100%; Height:100%; position:relative; top:0px;">
                  </a>
                </div>


                <!-- <div class="header_button_2">
                <a href="#">Available for freelance work</a>
                <div class="d-flex flex-column align-items-center justify-content-center"><img src="images/download.png" alt=""></div>
                </div> -->
              </div>
            </div>
            <div class="general_info_content" style="margin-top: -10px;">
              <div class="general_info_content_inner mCustomScrollbar" data-mcs-theme="minimal-dark">
                <div class="general_info_title">General Information</div>
                <ul class="general_info_list">	
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{!! asset('public/images/icon_1.png') !!}" alt=""></div>
                    <div class="general_info_text">Name: <span>Arqum Siddiqui</span></div>
                  </li>
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{!! asset('public/images/licon.png') !!}" alt=""></div>
                    <div class="general_info_text">Location: <span>karachi Pakistan</span></div>
                  </li>
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{!! asset('public/images/icon_2.png') !!}" alt=""></div>
                    <div class="general_info_text">Date of Birth: <span>May 10, 1994</span></div>
                  </li>
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{!! asset('public/images/icon_3.png') !!}" alt=""></div>
                    <div class="general_info_text">Email: <span>arqumsiddiqui14@gmail.com </span></div>
                  </li>
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{!! asset('public/images/icon_4.png') !!}" alt=""></div>
                    <div class="general_info_text">Contact: <span>+92 308 2575413 </span></div>
                  </li>
                  <!-- <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{!! asset('public/images/icon_5.png') !!}" alt=""></div>
                    <div class="general_info_text"><a href="https://colorlib.com/cdn-cgi/l/email-protection#32515d5c46535146725e5b5c4347571c515d5f">www.mytemplatename.com</a></div>
                  </li> -->
                </ul>

                <!-- <div class="social_container">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
                </div> -->
              </div>
            </div>
          </div>
          @yield('content')
        </div>
      </div>

      <div align='center'>

      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed and Develop By <a href="https://colorlib.com/" target="_blank">Arqum Siddiqui</a>
      </div>
    </div>

    <script src="http://www.myvitalwireless.com/mehrozportfolio/public/js/jquery-3.2.1.min.js"></script>
    <script src="http://www.myvitalwireless.com/mehrozportfolio/public/styles/bootstrap-4.1.2/popper.js"></script>
    <script src="http://www.myvitalwireless.com/mehrozportfolio/public/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="http://www.myvitalwireless.com/mehrozportfolio/public/plugins/greensock/TweenMax.min.js"></script>
    <script src="http://www.myvitalwireless.com/mehrozportfolio/public/plugins/greensock/TimelineMax.min.js"></script>
    <script src="http://www.myvitalwireless.com/mehrozportfolio/public/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="http://www.myvitalwireless.com/mehrozportfolio/public/plugins/greensock/animation.gsap.min.js"></script>
    <script src="http://www.myvitalwireless.com/mehrozportfolio/public/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="http://www.myvitalwireless.com/mehrozportfolio/public/plugins/progressbar/progressbar.js"></script>
    <script src="http://www.myvitalwireless.com/mehrozportfolio/public/plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"></script>
    <script src="http://www.myvitalwireless.com/mehrozportfolio/public/plugins/easing/easing.js"></script>
    <script src="http://www.myvitalwireless.com/mehrozportfolio/public/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="http://www.myvitalwireless.com/mehrozportfolio/public/js/custom.js"></script>
    <script src="http://www.myvitalwireless.com/mehrozportfolio/public/js/skills.js"></script>

    <!-- <script src="{!! asset('public/js/jquery-3.2.1.min.js') !!}"></script>
    <script src="{!! asset('public/styles/bootstrap-4.1.2/popper.js') !!}"></script>
    <script src="{!! asset('public/styles/bootstrap-4.1.2/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('public/plugins/greensock/TweenMax.min.js') !!}"></script>
    <script src="{!! asset('public/plugins/greensock/TimelineMax.min.js') !!}"></script>
    <script src="{!! asset('public/plugins/scrollmagic/ScrollMagic.min.js') !!}"></script>
    <script src="{!! asset('public/plugins/greensock/animation.gsap.min.js') !!}"></script>
    <script src="{!! asset('public/plugins/greensock/ScrollToPlugin.min.js') !!}"></script>
    <script src="{!! asset('public/plugins/progressbar/progressbar.js') !!}"></script>
    <script src="{!! asset('public/plugins/mCustomScrollbar/jquery.mCustomScrollbar.js') !!}"></script>
    <script src="{!! asset('public/plugins/easing/easing.js') !!}"></script>
    <script src="{!! asset('public/plugins/parallax-js-master/parallax.min.js') !!}"></script>
    <script src="{!! asset('public/js/custom.js') !!}"></script>
    <script src="{!! asset('public/js/skills.js') !!}"></script> -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="f1a3c1f6d6baa8c06f6665bf-text/javascript"></script>

    <script type="f1a3c1f6d6baa8c06f6665bf-text/javascript">
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>
    <!-- <script src="{!! asset('public/../../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js') !!}"></script> -->
    <script src="http://www.myvitalwireless.com/mehrozportfolio/public/../../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"></script>
  </body>

  <!-- Mirrored from colorlib.com/preview/theme/vcard2/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Feb 2020 20:00:49 GMT -->
</html>