<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 18:18:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>uniAlumni</title>

    <meta name="description" content="simple description for your site"/>
    <meta name="keywords" content="keyword1, keyword2"/>
    <meta name="author" content="Jobz"/>

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@yourtwitterusername"/>
    <meta name="twitter:creator" content="@yourtwitterusername"/>
    <meta name="twitter:url" content="http://twitter.com/"/>
    <meta name="twitter:title" content="Your home page title, max 140 char"/> <!-- maximum 140 char -->
    <meta name="twitter:description" content="Your site description, maximum 140 char "/> <!-- maximum 140 char -->
    <meta name="twitter:image"
          content="<?=$asset?>/img/twittercardimg/twittercard-144-144.png"/>  <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Your home page title"/>
    <meta property="og:url" content="http://your domain here.com"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:site_name" content="Your site name here"/>
    <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <meta property="og:type" content="website"/> <!-- 'article' for single page  -->
    <meta property="og:image"
          content="<?=$asset?>/img/opengraph/fbphoto-476-476.png"/> <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends here -->

    <!-- desktop bookmark -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=$asset?>/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- icons & favicons -->
    <link rel="shortcut icon" type="image/x-icon"  href="<?=$asset?>/img/favicon/favicon.ico"/>  <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="<?=$asset?>/img/favicon/favicon.ico"/> <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?=$asset?>/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=$asset?>/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=$asset?>/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=$asset?>/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=$asset?>/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=$asset?>/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=$asset?>/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=$asset?>/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$asset?>/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?=$asset?>/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$asset?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=$asset?>/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$asset?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=$asset?>/img/favicon/manifest.json">

    <link rel="shortcut icon" type="image/x-icon" href="<?=$asset?>/img/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="<?=$asset?>/img/favicon.ico" />

    <!-- Fallback For IE 9 [ Media Query and html5 Shim] -->
    <!--[if lt IE 9]>
    <script src="<?=$asset?>/vendor/css3-mediaqueries-js/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="<?=$asset?>/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=$asset?>/vendor/navbar/bootstrap-4-navbar.css" />

    <!--Animate css -->
    <link rel="stylesheet" href="<?=$asset?>/vendor/animate/animate.css" media="all" />

    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="<?=$asset?>/vendor/fontawesome/css/font-awesome.min.css" />

    <!--owl carousel css -->
    <link rel="stylesheet" href="<?=$asset?>/vendor/owl-carousel/owl.carousel.css" media="all" />

    <!--Magnific Popup css -->
    <link rel="stylesheet" href="<?=$asset?>/vendor/magnific/magnific-popup.css" media="all" />

    <!--Nice Select css -->
    <link rel="stylesheet" href="<?=$asset?>/vendor/nice-select/nice-select.css" media="all" />

    <!--Offcanvas css -->
    <link rel="stylesheet" href="<?=$asset?>/vendor/js-offcanvas/css/js-offcanvas.css" media="all" />

    <!-- MODERNIZER  -->
    <script src="<?=$asset?>/vendor/modernizr/modernizr-custom.js"></script>

    <!-- Main Master Style  CSS  -->
    <link id="cbx-style" data-layout="1" rel="stylesheet" href="<?=$asset?>/css/style-default.min.css" media="all" />
</head>
<body>

<!--[if lt IE 7]>
<p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started. Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
<![endif]-->

<!--== Header Area Start ==-->
<header id="header-area">
    <div class="header-bottom-area" id="fixheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-menu navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index-2.html">
                            <img src="<?=$asset?>/img/logos.png" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="menucontent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="#">Accueil</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">A propos</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Evenement</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Galerie</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Inscription</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--== Header Area End ==-->

<!--== Slider Area Start ==-->
<section id="slider-area">
    <div class="slider-active-wrap owl-carousel text-center text-md-left">
        <!-- Single Slide Item Start -->
        <div class="single-slide-wrap slide-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider-content">
                            <h2>AEEP PONGALA</h2>
                            <h3>L'association des élèves et Etudiants du <span>Pongala</span></h3>
                            <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                            <div class="slider-btn">
                                <a href="#" class="btn btn-brand smooth-scroll btn-orange radius-6">Carte de membre</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Item End -->

        <!-- Single Slide Item Start -->

        <!-- Single Slide Item End -->

        <!-- Single Slide Item Start -->

        <!-- Single Slide Item End -->
    </div>

    <!-- Social Icons Area Start -->
    <div class="social-networks-icon">
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i> <span>7.2k Likes</span></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i> <span>3.2m Followers</span></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i> <span>7.2k Likes</span></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i> <span>2.2k Subscribers</span></a></li>
        </ul>
    </div>
    <!-- Social Icons Area End -->
</section>
<!--== Slider Area End ==-->

<!--== Upcoming Event Area Start ==-->
<section id="upcoming-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="upcoming-event-wrap">
                    <div class="up-event-titile">
                        <h3>Upcoming event</h3>
                    </div>
                    <div class="upcoming-event-content owl-carousel">
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="up-event-thumb">
                                        <img src="<?=$asset?>/img/event/event-img-1.jpg" class="img-fluid" alt="Upcoming Event">
                                        <h4 class="up-event-date">Le 25 Janvier 2022</h4>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <div class="event-countdown">
                                                    <div class="event-countdown-counter">
                                                        <div class="counter-item">
                                                            <span class="counter-label">Jours</span>
                                                            <span class="single-cont"><i id="days"> 00</i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <h3><a href="#">Première réunion de l'année !</a></h3>
                                                <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipv ex ea.</p>
                                                <a href="#" class="btn btn-brand btn-brand-dark">En savoir plus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- No 2 Event -->
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="up-event-thumb">
                                        <img src="<?=$asset?>/img/event/event-img-2.jpg" class="img-fluid" alt="Upcoming Event">
                                        <h4 class="up-event-date">It’s 27 February 2019</h4>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <div class="event-countdown">
                                                    <div class="event-countdown-counter" data-date="2018/9/10"></div>
                                                    <p>Remaining</p>
                                                </div>
                                                <h3><a href="single-event.html">We are going to arrange a get together!</a></h3>
                                                <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipv ex ea.</p>
                                                <a href="single-event.html" class="btn btn-brand btn-brand-dark">join with us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- partial -->


                        <!-- No 3 Event -->
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="up-event-thumb">
                                        <img src="<?=$asset?>/img/event/event-img-3.jpg" class="img-fluid" alt="Upcoming Event">
                                        <h4 class="up-event-date">It’s 27 February 2019</h4>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <div class="event-countdown">
                                                    <div class="event-countdown-counter" data-date="2018/9/10"></div>
                                                    <p>Remaining</p>
                                                </div>
                                                <h3><a href="single-event.html">We are going to arrange a get together!</a></h3>
                                                <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipv ex ea.</p>
                                                <a href="single-event.html" class="btn btn-brand btn-brand-dark">join with us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- partial -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Upcoming Event Area End ==-->

<!--== About Area Start ==-->
<section id="about-area" class="section-padding">
    <div class="about-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 ml-auto">
                    <div class="about-content-wrap">
                        <div class="section-title text-center text-lg-left">
                            <h2>Our Misssion</h2>
                        </div>

                        <div class="about-thumb">
                            <img src="<?=$asset?>/img/about-bg.jpg" alt="" class="img-fluid">
                        </div>

                        <p>There are many company Lorem ipsm dolor sitg amet, csetur adipicing elit, sed do eiusmod tempor dncint ut labore et dolore magna alis enim ad minim veniam, quis  csetur adipicing elit, sed do eiusmod tempor dncint ut labore et dolore magna alis enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <p>There are many company Lorem ipsm dolor sitg amet, csetur adipicing elit, sed do eiusmod tempor dncint ut labore et dolore magna alis enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <a href="about.html" class="btn btn-brand about-btn">know more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== About Area End ==-->

<!--== Our Responsibility Area Start ==-->
<section id="responsibility-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Our Responsibility</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Responsibility Content Wrapper ==-->
        <div class="row text-center text-sm-left">
            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="<?=$asset?>/img/responsibility/01.png" alt="Responsibility">
                    <h4>Scholarship</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="<?=$asset?>/img/responsibility/02.png" alt="Responsibility">
                    <h4>Help Current Students</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="<?=$asset?>/img/responsibility/03.png" alt="Responsibility">
                    <h4>Help Our University</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="<?=$asset?>/img/responsibility/04.png" alt="Responsibility">
                    <h4>Build Our Community</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->
        </div>
        <!--== Responsibility Content Wrapper ==-->
    </div>
</section>
<!--== Our Responsibility Area End ==-->

<!--== FunFact Area Start ==-->
<section id="funfact-area">
    <div class="container-fluid">
        <div class="row text-center">
            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="<?=$asset?>/img/fun-fact/user.svg" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5 class="funfact-count">4025</h5>
                        <p>Members</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->

            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="<?=$asset?>/img/fun-fact/picture.svg" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5 class="funfact-count">8725</h5>
                        <p>Photos</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->

            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="<?=$asset?>/img/fun-fact/event.svg" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5><span class="funfact-count">231</span>+</h5>
                        <p>Events</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->

            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="<?=$asset?>/img/fun-fact/medal.svg" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5><span class="funfact-count">32</span>+</h5>
                        <p>Awards</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->
        </div>
    </div>
</section>
<!--== FunFact Area End ==-->

<!--== Job Opportunity Area Start ==-->
<section id="job-opportunity" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Recent Jobs</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Job opportunity Wrapper ==-->
        <div class="job-opportunity-wrapper">
            <div class="row">
                <!--== Single Job opportunity Start ==-->
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-job-opportunity">
                        <div class="job-opportunity-text">
                            <div class="job-oppor-logo">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="<?=$asset?>/img/job/compnay-logo-1.png" alt="Job">
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">Urgently Need Five Data Center Specialist</a></h3>
                            <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus est etiam procsus dymicus.<a href="#">[...]</a></p>
                        </div>
                        <a href="#" class="btn btn-job">Apply now</a>
                    </div>
                </div>
                <!--== Single Job opportunity End ==-->

                <!--== Single Job opportunity Start ==-->
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-job-opportunity">
                        <div class="job-opportunity-text">
                            <div class="job-oppor-logo">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="<?=$asset?>/img/job/compnay-logo-2.png" alt="Job">
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">Product Owner (m/f) for our Charter Business</a></h3>
                            <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus est etiam procsus dymicus.<a href="#">[...]</a></p>
                        </div>
                        <a href="#" class="btn btn-job">Apply now</a>
                    </div>
                </div>
                <!--== Single Job opportunity End ==-->

                <!--== Single Job opportunity Start ==-->
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-job-opportunity">
                        <div class="job-opportunity-text">
                            <div class="job-oppor-logo">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="<?=$asset?>/img/job/compnay-logo-1.png" alt="Job">
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">Backend Developer (Java) (m/f) wanted for leading</a></h3>
                            <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus est etiam procsus dymicus.<a href="#">[...]</a></p>
                        </div>
                        <a href="#" class="btn btn-job btn-expired disabled">Expired</a>
                    </div>
                </div>
                <!--== Single Job opportunity End ==-->

                <!--== Single Job opportunity Start ==-->
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-job-opportunity">
                        <div class="job-opportunity-text">
                            <div class="job-oppor-logo">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="<?=$asset?>/img/job/compnay-logo-2.png" alt="Job">
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">API Architect and Lead - Python, SQLAlchemy, GraphQL</a></h3>
                            <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus est etiam procsus dymicus.<a href="#">[...]</a></p>
                        </div>
                        <a href="#" class="btn btn-job">Apply now</a>
                    </div>
                </div>
                <!--== Single Job opportunity End ==-->

                <!--== Single Job opportunity Start ==-->
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-job-opportunity">
                        <div class="job-opportunity-text">
                            <div class="job-oppor-logo">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="<?=$asset?>/img/job/compnay-logo-3.png" alt="Job">
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">Remotely - Javascript Developer Node.js</a></h3>
                            <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus est etiam procsus dymicus.<a href="#">[...]</a></p>
                        </div>
                        <a href="#" class="btn btn-job btn-expired disabled">Expired</a>
                    </div>
                </div>
                <!--== Single Job opportunity End ==-->

                <!--== Single Job opportunity Start ==-->
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-job-opportunity">
                        <div class="job-opportunity-text">
                            <div class="job-oppor-logo">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="<?=$asset?>/img/job/compnay-logo-4.png" alt="Job">
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">Five Years Experience Data Center Specialist Needed</a></h3>
                            <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus est etiam procsus dymicus.<a href="#">[...]</a></p>
                        </div>
                        <a href="#" class="btn btn-job">Apply now</a>
                    </div>
                </div>
                <!--== Single Job opportunity End ==-->
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="career.html" class="btn btn-brand btn-loadmore">All job list</a>
                </div>
            </div>
        </div>
        <!--== Job opportunity Wrapper ==-->
    </div>
</section>
<!--== Job Opportunity Area End ==-->

<!--== Gallery Area Start ==-->
<section id="gallery-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Our gallery</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Gallery Container Warpper ==-->
        <div class="gallery-content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Gallery Menu Start -->
                    <div class="gallery-menu text-center">
                        <span class="active" data-filter="*">All</span>
                        <span data-filter=".old">Old Memories</span>
                        <span data-filter=".event">Event</span>
                        <span data-filter=".pic">Our Picnic</span>
                        <span class="d-none d-sm-inline-block" data-filter=".recent">Recent</span>
                    </div>
                    <!-- Gallery Menu End -->

                    <!-- Gallery Item content Start -->
                    <div class="row gallery-gird">
                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 recent event">
                            <div class="single-gallery-item gallery-bg-1">
                                <div class="gallery-hvr-wrap">
                                    <div class="gallery-hvr-text">
                                        <h4>University Cumpus</h4>
                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                    </div>
                                    <a href="<?=$asset?>/img/gallery/gellary-img-1.jpg" class="btn-zoom image-popup">
                                        <img src="<?=$asset?>/img/zoom-icon.png" alt="a">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Gallery End -->

                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 old event pic">
                            <div class="single-gallery-item video gallery-bg-2">
                                <a href="https://player.vimeo.com/video/140182080?title=0&amp;portrait=0&amp;byline=0&amp;autoplay=1&amp;loop=1"
                                   class="btn btn-video-play video-popup"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <!-- Single Gallery End -->

                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 recent pic">
                            <div class="single-gallery-item gallery-bg-3">
                                <div class="gallery-hvr-wrap">
                                    <div class="gallery-hvr-text">
                                        <h4>University Cumpus</h4>
                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                    </div>
                                    <a href="<?=$asset?>/img/gallery/gellary-img-3.jpg" class="btn-zoom image-popup">
                                        <img src="<?=$asset?>/img/zoom-icon.png" alt="a">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Gallery End -->

                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 old">
                            <div class="single-gallery-item gallery-bg-4">
                                <div class="gallery-hvr-wrap">
                                    <div class="gallery-hvr-text">
                                        <h4>University Cumpus</h4>
                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                    </div>
                                    <a href="<?=$asset?>/img/gallery/gellary-img-4.jpg" class="btn-zoom image-popup">
                                        <img src="<?=$asset?>/img/zoom-icon.png" alt="a">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Gallery End -->

                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 pic event">
                            <div class="single-gallery-item gallery-bg-5">
                                <div class="gallery-hvr-wrap">
                                    <div class="gallery-hvr-text">
                                        <h4>University Cumpus</h4>
                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                    </div>
                                    <a href="<?=$asset?>/img/gallery/gellary-img-5.jpg" class="btn-zoom image-popup">
                                        <img src="<?=$asset?>/img/zoom-icon.png" alt="a">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Gallery End -->

                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 old recent">
                            <div class="single-gallery-item gallery-bg-6">
                                <div class="gallery-hvr-wrap">
                                    <div class="gallery-hvr-text">
                                        <h4>University Cumpus</h4>
                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                    </div>
                                    <a href="<?=$asset?>/img/gallery/gellary-img-6.jpg" class="btn-zoom image-popup">
                                        <img src="<?=$asset?>/img/zoom-icon.png" alt="a">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Gallery End -->

                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 pic">
                            <div class="single-gallery-item video gallery-bg-7">
                                <a href="https://player.vimeo.com/video/181545195?title=0&amp;portrait=0&amp;byline=0&amp;autoplay=1&amp;loop=1"
                                   class="btn btn-video-play video-popup"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <!-- Single Gallery End -->

                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 pic recent old">
                            <div class="single-gallery-item gallery-bg-8">
                                <div class="gallery-hvr-wrap">
                                    <div class="gallery-hvr-text">
                                        <h4>University Cumpus</h4>
                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                    </div>
                                    <a href="<?=$asset?>/img/gallery/gellary-img-8.jpg" class="btn-zoom image-popup">
                                        <img src="<?=$asset?>/img/zoom-icon.png" alt="a">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Gallery End -->
                    </div>
                    <!-- Gallery Item content End -->
                </div>
            </div>
        </div>
        <!--== Gallery Container Warpper==-->
    </div>
</section>
<!--== Gallery Area Start ==-->

<!--== Scholership Promo Area Start ==-->
<section id="scholership-promo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="scholership-promo-text">
                    <h2>Demo University Provide <span>Scholarship</span> For Talented Student!</h2>
                    <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need academic, relocation, career, projects, mentorship, etc you can ask the community and get </p>
                    <a href="#" class="btn btn-brand">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Scholership Promo Area End ==-->

<!--== Blog Area Start ==-->
<section id="blog-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Recent News</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Blog Content Wrapper ==-->
        <div class="row">
            <!--== Single Blog Post start ==-->
            <div class="col-lg-4 col-md-6">
                <article class="single-blog-post">
                    <figure class="blog-thumb">
                        <div class="blog-thumbnail">
                            <img src="<?=$asset?>/img/blog/blog-1.jpg" alt="Blog" class="img-fluid" />
                        </div>
                        <figcaption class="blog-meta clearfix">
                            <a href="single-blog.html" class="author">
                                <div class="author-pic">
                                    <img src="<?=$asset?>/img/blog/author.jpg" alt="Author">
                                </div>
                                <div class="author-info">
                                    <h5>Daney williams</h5>
                                    <p>2 hours Ago</p>
                                </div>
                            </a>
                            <div class="like-comm pull-right">
                                <a href="#"><i class="fa fa-comment-o"></i>77</a>
                                <a href="#"><i class="fa fa-heart-o"></i>12</a>
                            </div>
                        </figcaption>
                    </figure>

                    <div class="blog-content">
                        <h3><a href="single-blog.html">Recently we create a maassive project that</a></h3>
                        <p>This is a big project of our company, we are happy to completed this type projec which are
                            get world famous award</p>
                        <a href="single-blog.html" class="btn btn-brand">More</a>
                    </div>
                </article>
            </div>
            <!--== Single Blog Post End ==-->

            <!--== Single Blog Post start ==-->
            <div class="col-lg-4 col-md-6">
                <article class="single-blog-post">
                    <figure class="blog-thumb">
                        <div class="blog-thumbnail">
                            <img src="<?=$asset?>/img/blog/blog-2.jpg" alt="Blog" class="img-fluid" />
                        </div>
                        <figcaption class="blog-meta clearfix">
                            <a href="single-blog.html" class="author">
                                <div class="author-pic">
                                    <img src="<?=$asset?>/img/blog/author.jpg" alt="Author">
                                </div>
                                <div class="author-info">
                                    <h5>Myra Hindley</h5>
                                    <p>1 Day Ago</p>
                                </div>
                            </a>
                            <div class="like-comm pull-right">
                                <a href="#"><i class="fa fa-comment-o"></i>77</a>
                                <a href="#"><i class="fa fa-heart-o"></i>12</a>
                            </div>
                        </figcaption>
                    </figure>

                    <div class="blog-content">
                        <h3><a href="single-blog.html">Myra Hindley and her lover, Ian Brady, plotted and</a></h3>
                        <p>This is a big project of our company, we are happy to completed this type projec which are
                            get world famous award</p>
                        <a href="single-blog.html" class="btn btn-brand">More</a>
                    </div>
                </article>
            </div>
            <!--== Single Blog Post End ==-->

            <!--== Single Blog Post start ==-->
            <div class="col-lg-4 col-md-6">
                <article class="single-blog-post">
                    <figure class="blog-thumb">
                        <div class="blog-thumbnail">
                            <img src="<?=$asset?>/img/blog/blog-3.jpg" alt="Blog" class="img-fluid" />
                        </div>
                        <figcaption class="blog-meta clearfix">
                            <a href="single-blog.html" class="author">
                                <div class="author-pic">
                                    <img src="<?=$asset?>/img/blog/author.jpg" alt="Author">
                                </div>
                                <div class="author-info">
                                    <h5>Aileen Wuornos</h5>
                                    <p>3 mins Ago</p>
                                </div>
                            </a>
                            <div class="like-comm pull-right">
                                <a href="#"><i class="fa fa-comment-o"></i>77</a>
                                <a href="#"><i class="fa fa-heart-o"></i>12</a>
                            </div>
                        </figcaption>
                    </figure>

                    <div class="blog-content">
                        <h3><a href="single-blog.html">Nurse with a private practice, racked up dozens of victims</a></h3>
                        <p>This is a big project of our company, we are happy to completed this type projec which are
                            get world famous award</p>
                        <a href="single-blog.html" class="btn btn-brand">More</a>
                    </div>
                </article>
            </div>
            <!--== Single Blog Post End ==-->
        </div>
        <!--== Blog Content Wrapper ==-->
    </div>
</section>
<!--== Blog Area EndBlog ==-->

<!--== Footer Area Start ==-->
<footer id="footer-area">
    <!-- Footer Widget Start -->
    <div class="footer-widget section-padding">
        <div class="container">
            <div class="row">
                <!-- Single Widget Start -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single-widget-wrap">
                        <div class="widgei-body">
                            <div class="footer-about">
                                <img src="<?=$asset?>/img/footer-logo.png" alt="Logo" class="img-fluid" />
                                <p>We are legend Lorem ipsum dolor sitmet, nsecte ipisicing eit, sed do eiusmod tempor incidunt ut  et do maga aliqua enim ad minim.</p>
                                <a href="#">Phone: +8745 44 5444</a> <a href="#">Fax: +88474 156 362</a> <br> <a href="#">Email: demoemail@demo.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">Get In Touch</h4>
                        <div class="widgei-body">
                            <p>We are legend Lorem ipsum dolor sitmet, nsecte ipisicing eit, sed</p>
                            <div class="newsletter-form">
                                <form id="cbx-subscribe-form" role="search">
                                    <input type="email" placeholder="Enter Your Email"  id="subscribe" required>
                                    <button type="submit"><i class="fa fa-send"></i></button>
                                </form>
                            </div>
                            <div class="footer-social-icons">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">Usefull Link</h4>
                        <div class="widgei-body">
                            <ul class="double-list footer-list clearfix">
                                <li><a href="#">Pricing Plan</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Populer Deal</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Pricing Plan</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Populer Deal</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-2 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">University</h4>
                        <div class="widgei-body">
                            <ul class="footer-list clearfix">
                                <li><a href="#">Pricing Plan</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Populer Deal</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->
            </div>
        </div>
    </div>
    <!-- Footer Widget End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer-bottom-text">
                        <p>© 2018 Codeboxr, All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->
</footer>
<!--== Footer Area End ==-->

<!--== Scroll Top ==-->
<a href="#" class="scroll-top">
    <i class="fa fa-angle-up"></i>
</a>
<!--== Scroll Top ==-->

<!-- SITE SCRIPT  -->

<!-- Jquery JS  -->
<script src="<?=$asset?>/vendor/jquery/jquery-3.3.1.min.js"></script>

<!-- POPPER JS -->
<script src="<?=$asset?>/vendor/bootstrap/js/popper.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="<?=$asset?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=$asset?>/vendor/navbar/bootstrap-4-navbar.js"></script>
<script>
    $(document).ready(function(){
        var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

        var x = setInterval(function() {

            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//            $("#days").html(days);
//            $("#hours").html(hours);
//            $("#minutes").html(minutes);
//            $("#second").html(seconds);
            document.getElementById("days").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";
            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("days").innerHTML = "EXPIRED";
            }
        }, 1000);
    });
</script>
<!--owl-->
<script src="<?=$asset?>/vendor/owl-carousel/owl.carousel.min.js"></script>

<!--Waypoint-->
<script src="<?=$asset?>/vendor/waypoint/waypoints.min.js"></script>

<!--CounterUp-->
<script src="<?=$asset?>/vendor/counterup/jquery.counterup.min.js"></script>

<!--isotope-->
<script src="<?=$asset?>/vendor/isotope/isotope.pkgd.min.js"></script>

<!--magnific-->
<script src="<?=$asset?>/vendor/magnific/jquery.magnific-popup.min.js"></script>

<!--Smooth Scroll-->
<script src="<?=$asset?>/vendor/smooth-scroll/jquery.smooth-scroll.min.js"></script>

<!--Jquery Easing-->
<script src="<?=$asset?>/vendor/jquery-easing/jquery.easing.1.3.min.js"></script>

<!--Nice Select -->
<script src="<?=$asset?>/vendor/nice-select/jquery.nice-select.js"></script>

<!--Jquery Valadation -->
<script src="<?=$asset?>/vendor/validation/jquery.validate.min.js"></script>
<script src="<?=$asset?>/vendor/validation/additional-methods.min.js"></script>

<!--off-canvas js -->
<script src="<?=$asset?>/vendor/js-offcanvas/js/js-offcanvas.pkgd.min.js"></script>

<!-- Countdown -->
<script src="<?=$asset?>/vendor/jquery.countdown/jquery.countdown.min.js"></script>

<!-- custom js: main custom theme js file  -->
<script src="<?=$asset?>/js/theme.min.js"></script>

<!-- custom js: custom js file is added for easy custom js code  -->
<script src="<?=$asset?>/js/custom.js"></script>

<!-- custom js: custom scripts for theme style switcher for demo purpose  -->


</body>

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 18:19:38 GMT -->
</html>
