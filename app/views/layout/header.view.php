<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <!-- Site Title -->
        <title>Seven Plus IELTS</title>

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="<?=ROOT?>assets/image/pluslogo.png">

        <!-- CSS here -->
        <link rel="stylesheet" href="<?=ROOT?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=ROOT?>assets/css/fontawesome.min.css">
        <link rel="stylesheet" href="<?=ROOT?>assets/css/venobox.min.css">
        <link rel="stylesheet" href="<?=ROOT?>assets/css/odometer.min.css">
        <link rel="stylesheet" href="<?=ROOT?>assets/css/nice-select.css">
        <link rel="stylesheet" href="<?=ROOT?>assets/css/carouselTicker.css">
        <link rel="stylesheet" href="<?=ROOT?>assets/css/swiper.min.css">
        <link rel="stylesheet" href="<?=ROOT?>assets/css/main.css">

             <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
    <style>
        #map {
            width: 300px;
            height: 300px;
        }
        .header-10 .primary-header {
            background-color:white !important;
        }

        .header-6 .primary-header-inner .header-menu-wrap ul li a, [data-theme=dark] .header-6 .primary-header-inner .header-menu-wrap ul li a {

            color:whtie !important;
        }

         .header-6 .primary-header-inner .header-menu-wrap ul li a, [data-theme=light] .header-6 .primary-header-inner .header-menu-wrap ul li a {

            color:black !important;
        }
        /* Mobile devices (portrait and landscape) */
        /* Extra small devices (phones, 576px and down) */
        @media (max-width: 575.98px) { 
          /* Aapke styles yahan likhiye */
          #mgg
          {
            display: none !important;
          }
        }

        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) and (max-width: 767.98px) { 
          /* Aapke styles yahan likhiye */
          #mgg
          {
            display: none !important;
          }
        }


    </style>
    </head>

    <body>
        <div class="line-wrap">
            <div class="line"><span></span></div>
            <div class="line"><span></span></div>
            <div class="line"><span></span></div>
        </div>

        <header class="header header-6 header-10 sticky-active">
            <div class="top-bar">
                <div class="container">
                    <div class="top-bar-inner">
                        <ul class="top-bar-list">
                            <li>
                                <i class="fa-sharp fa-solid fa-phone"></i
                                ><a href="tel:+923105499929">(+92) 310 549 9929</a>
                            </li>
                            <li>
                                <i class="fa-sharp fa-solid fa-location-dot"></i>House No: 21/B Affendi Colony, near Iqra Roza-tul-Itfal School, Rawalpindi.
                            </li>
                            <li>
                                <i class="fa-sharp fa-regular fa-envelope"></i
                                ><a href="mailto:info@agency.com">info@sevenplusielts.com</a>
                            </li>
                        </ul>
                        <div class="top-bar-right">
                            <div class="top-bar-social">
                                <span>Follow Us On: </span>
                                <ul class="social-list">
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=61560917115358"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/sevenplusielts/"><i class="fab fa-instagram"></i></a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="primary-header">
                <div class="container">
                    <div class="primary-header-inner">
                        <div class="header-logo">
                            <a href="<?=ROOT?>home/">
                                <img class="logo-dark " id="mgg" src="<?=ROOT?>assets/image/pluslogo.png" alt="Logo">
                                <img class="logo-light " id="mgg" src="<?=ROOT?>assets/image/pluslogo.png" alt="Logo">
                            </a>
                        </div>
                        <div class="header-menu-wrap">
                            <div class="mobile-menu-items">
                                <ul>
                                    <li class="menu-item-has-children active">
                                        <a href="<?=ROOT?>home/">Home</a>
                                 
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">What's New</a>
                                        <ul>
                                            <li><a href="">New IELTS Test Formats</a></li>
                                            <li><a href="">Changes to IELTS Band Scoring</a></li>
                                            <li><a href="">Upcoming IELTS Exam Dates</a></li>
                                            <li><a href="">International IELTS Updates</a></li>
                                     
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Courses & Services</a>
                                        <ul>
                                            <li><a href="<?=ROOT?>home/IELTS_Academic_Course">IELTS Academic</a></li>
                                            <li><a href="<?=ROOT?>home/IELTS_GT_Course">IELTS General Training</a></li>
                                            <li><a href="<?=ROOT?>home/IELTS_LS_Course"> IELTS Life Skills</a></li>
                                            <li><a href="<?=ROOT?>home/IELTS_UKVI_Course">IELTS UKVI </a></li>
                                            <li><a href="<?=ROOT?>home/IELTS_LCFB_Course">English Language Course for Beginners</a></li>
                                            <li><a href="<?=ROOT?>home/IELTS_LCAL_Course">English Language Course for Advanced Learners</a></li>
                                        </ul>
                                    </li>
                                     <li class="menu-itemf-has-children">
                                        <a href="#">IELTS</a>
                                        <ul>
                                            <li><a href="<?=ROOT?>home/IELTS_Academic">IELTS Academic</a></li>
                                            <li><a href="<?=ROOT?>home/IELTS_General_Training">IELTS General Training</a></li>
                                            <li><a href="<?=ROOT?>home/IELTS_Life_Skills">IELTS Life Skills</a></li>
                                            <li><a href="<?=ROOT?>home/IELTS_UKVI">IELTS UKVI</a></li>
                                            <li><a href="<?=ROOT?>home/IELTS_Scores">IELTS Scores</a></li>
                                            <li><a href="<?=ROOT?>home/IELTS_Upcoming_Exam_Dates">Upcoming IELTS Exam Dates</a></li>
                                            <li><a href="<?=ROOT?>home/Alternative_To_IELTS">Alternatives to IELTS</a></li>
                                            <li><a href="<?=ROOT?>home/IELTS_FAQ">Frequently Asked Questions (FAQs)</a></li>
                                        </ul>
                                    </li>
                                         <li class="menu-itemf-has-children">
                                        <a href="#">Lessons Tips</a>
                                        <ul>
                                            <li><a href="<?=ROOT?>home/LT_Reading_Tips">Reading Tips</a></li>
                                            <li><a href="<?=ROOT?>home/LT_Writing_Tips">Writing Tips</a></li>
                                            <li><a href="<?=ROOT?>home/LT_Listening_Tips">Listening Tips</a></li>
                                            <li><a href="<?=ROOT?>home/LT_Speaking_Tips">Speaking Tips</a></li>
                                            <li><a href="<?=ROOT?>home/LT_Grammer_Tips">Grammer Tips</a></li>
                                            <li><a href="<?=ROOT?>home/LT_Vocabulary_Tips">Vocabulary Tips</a></li>
                                            <li><a href="<?=ROOT?>home/LT_Additional_Tips">Additional Tips for Success</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="blog-grid.html">Practice Tests</a>
                                        <ul>
                                            <li><a href="<?=ROOT?>home/PT_Listening_Tests">Listening Tests </a></li>
                                            <li><a href="<?=ROOT?>home/PT_Reading_Tests">Reading Tests  </a></li>
                                            <li><a href="<?=ROOT?>home/PT_Writing_Tests">Writing Tests </a></li>
                                            <li><a href="<?=ROOT?>home/PT_Speaking_Tests">Speaking Tests </a></li>
                                            <li><a href="<?=ROOT?>home/PT_Practice_Tests">Why Practice Tests Matter: </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?=ROOT?>home/contact_us">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--.header-menu-wrap -->
                        
                    </div>
                    <!--.primary-header-inner -->
                </div>
            </div>
        </header>
        <!--.Main Header -->

        <div id="popup-search-box">
            <div class="box-inner-wrap d-flex align-items-center">
                <form id="form" action="#" method="get" role="search">
                    <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
                </form>
                <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
            </div>
        </div>
        <!--#popup-search-box -->

        <div id="sidebar-area" class="sidebar-area">
            <button class="sidebar-trigger close">
                <svg
                    class="sidebar-close"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    width="16px"
                    height="12.7px"
                    viewBox="0 0 16 12.7"
                    style="enable-background: new 0 0 16 12.7"
                    xml:space="preserve"
                >
                    <g>
                        <rect
                            x="0"
                            y="5.4"
                            transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.1569 7.5208)"
                            width="16"
                            height="2"
                        ></rect>
                        <rect
                            x="0"
                            y="5.4"
                            transform="matrix(0.7071 0.7071 -0.7071 0.7071 6.8431 -3.7929)"
                            width="16"
                            height="2"
                        ></rect>
                    </g>
                </svg>
            </button>
            <div class="side-menu-content">
                <div class="side-menu-logo">
                  <img class="logo-light" src="<?=ROOT?>assets/image/pluslogo.png" alt="Logo">
                </div>
                <div class="side-menu-wrap"></div>
                <div class="side-menu-about">
                    <div class="side-menu-header">
                        <h3>About Us</h3>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nisi ut aliquip ex ea
                        commodo consequat.
                    </p>
                    <a href="contact.html" class="rr-primary-btn">Contact Us</a>
                </div>
                <div class="side-menu-contact">
                    <div class="side-menu-header">
                        <h3>Contact Us</h3>
                    </div>
                    <ul class="side-menu-list">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Valentin, Street Road 24, New York,</p>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:+000123456789">(+92) 310 549 9929</a>
                        </li>
                        <li>
                            <i class="fas fa-envelope-open-text"></i>
                            <a href="mailto:runokcontact@gmail.com">sevenplusielts@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <ul class="side-menu-social">
                    <li class="facebook">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="instagram">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="twitter">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="g-plus">
                        <a href="#"><i class="fab fa-fab fa-google-plus"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.sidebar-area-->

        <div class="mobile-side-menu">
            <div class="side-menu-content">
                <div class="side-menu-head">
                    <a href="<?=ROOT?>home/"><img src="assets/img/logo/logo-2.png" alt="logo"></a>
                    <button class="mobile-side-menu-close"><i class="fa-regular fa-xmark"></i></button>
                </div>
                <div class="side-menu-wrap"></div>
                <ul class="side-menu-list">
                    <li><i class="fa-light fa-location-dot"></i>Address : <span>Amsterdam, 109-74</span></li>
                    <li><i class="fa-light fa-phone"></i>Phone : <a href="tel:+01569896654">+01 569 896 654</a></li>
                    <li>
                        <i class="fa-light fa-envelope"></i>Email :
                        <a href="mailto:info@example.com">info@example.com</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--.mobile-side-menu -->
        <div class="mobile-side-menu-overlay"></div>

        <div id="preloader">
            <div class="loading" data-loading-text="Seven Plus IELTS"></div>
        </div>
        <!-- ./ preloader -->