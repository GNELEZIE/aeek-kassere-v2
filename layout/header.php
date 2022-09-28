<!DOCTYPE html>
<html class="no-js" lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>AEEK-KASSERE - <?=ucfirst($page)?></title>
<meta name="description" content="simple description for your site"/>
<meta name="keywords" content="keyword1, keyword2"/>
<meta name="author" content="Gnelezie"/>
<link rel="shortcut icon" type="image/x-icon"  href="<?=$asset?>/media/icon.png"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />
<link rel="stylesheet" href="<?=$asset?>/vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?=$asset?>/vendor/navbar/bootstrap-4-navbar.css" />
<link rel="stylesheet" href="<?=$asset?>/vendor/animate/animate.css" media="all" />
<link rel="stylesheet" href="<?=$asset?>/vendor/fontawesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?=$asset?>/vendor/owl-carousel/owl.carousel.css" media="all" />
<link rel="stylesheet" href="<?=$asset?>/vendor/magnific/magnific-popup.css" media="all" />
<link rel="stylesheet" href="<?=$asset?>/vendor/nice-select/nice-select.css" media="all" />
<link rel="stylesheet" href="<?=$asset?>/vendor/js-offcanvas/css/js-offcanvas.css" media="all" />
<link rel="stylesheet" href="<?=$asset?>/css/box-img.css" media="all" />
<script src="<?=$asset?>/vendor/modernizr/modernizr-custom.js"></script>
<link id="cbx-style" data-layout="1" rel="stylesheet" href="<?=$asset?>/css/style-default.min.css" media="all" />
<link href="<?=$asset?>/plugins/ticker/css/main.css" rel="stylesheet">
<link href="<?=$asset?>/plugins/sweetalert/sweet-alert.css" rel="stylesheet" />
<link href="<?=$asset?>/plugins/lity/dist/lity.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?=$asset?>/plugins/ani/animate.css"/>
<style>
.bg-home{
    background-color: #ecf1f57d !important;
}
.home-title1{
   font-size: 50px !important;
}
#blog-area {
    background-color: #ecf1f57d !important;
}
.zoom-icon{
    border: 2px solid #fff;
    padding: 5px;
    border-radius: 50%;
    width: 50px !important;
}
.single-gallery-item{
    border-radius: 7px;
    border: 2px solid #ff7729 !important;
}


.gallery-gird .col-lg-3 .single-gallery-item .gallery-hvr-wrap{
    background-color: inherit !important;
}
.box-contact{
    border-left: 8px solid #ff4600;
    padding: 8px;
    margin-bottom: 50px;
}
#header-area .header-bottom-area .main-menu .navbar-nav li a.nav-link {
    margin-right: 0 !important;
}
#header-area .header-bottom-area.fixed .navbar-brand img, #header-area .header-bottom-area .main-menu .navbar-brand img {
    width: 73px !important;
}


.p-more{
    padding: 6px 17px !important;
}
.btn-filtrer{
    padding: 7px 20px;
}

.my-shadow{
    box-shadow: 0 3px 30px 0 rgb(0 0 0 / 10%) !important;
}
.input-style{
    border: 2px solid #ced4da !important;
    border-radius: 6px !important;
}
.contact-form-wrap{
    padding: 20px !important;
}



.btn-transparence-orange {
    background: #ff46003b !important;
    color: #ff4600 !important;
}
.btn-transparence-orange:hover {
    background: #ff4600 !important;
    color: #fff !important;
}

.sidebar-area-wrap .single-sidebar-wrap {
    padding: 30px 17px !important;
}
.bg-gris{
    background-color: #ecf1f5;
}
.img-galerie{
    object-fit : cover;
    height: 257px;
}
.py30{
    padding: 5px 20px;

}
.btn-white{
    background: #fff;
    color: #008000;
    border : 2px solid #fff;
    border-radius : 6px;

}
.btn-white:hover{
    background: transparent;
    color: #fff;
}
#upcoming-area .upcoming-event-wrap, .event-page-content-wrap .all-event-list .single-upcoming-event {
    background-color: #008000;
}
.event-count-sect .event-countdown-counter-sec .counter-item .single-cont {
    font-size: 1.8rem;
    line-height: 1;
    font-weight: 700;
    border: 1px solid #fff;
    background-color: #fff;
    padding: 10px;
    display: inline-block;
    color: #ff4500;
}
.event-count-sect .event-countdown-counter-sec .counter-item .counter-label {
    font-size: 1.4rem;
    line-height: 1;
    font-weight: 700;
    display: block;
    margin-bottom: 5px;
}
.event-count-sect .event-countdown-counter-sec .counter-item{
    text-align: center;
    color: #fff;
    margin-right: 15px;
}
.event-count-sect .event-countdown-counter-sec {
    display: flex;
}
.event-count-sect {
    margin-bottom: 18px;
    position: relative;
    display: inline-block;
}
.event-count-sect .event-countdown-counter-sec .counter-item .single-cont{
    width: 50px !important;
}
.home-count .owl-nav{
    display: none !important;
}
.btn-brand, .btn-brand-rev {
    padding: 7px 22px !important;
    font-size: 15px !important;
}
.radius-6{
    border-radius: 6px !important;
}
.btn-green{
    background: #039003 !important;
    border: 2px solid #039003 !important;
}
.btn-green:hover{
    background: #ffffff !important;
    color: #039003 !important;
}
.btn-orange{
    background: #ff4500 !important;
    border: 2px solid #ff4500 !important;
}
.btn-orange:hover{
    background: #ffffff !important;
    color: #ff4500 !important;
}
#header-area .header-bottom-area .main-menu li.nav-item a.nav-link:before {
    background-color: #ff4500 !important;
}
#header-area .header-bottom-area .main-menu li.nav-item.active .nav-link {
    background-color: #ff450012 !important;
    color: #ff4500 !important;
}
.event-filter-area .nice-select {
    height: 39px !important;
    text-align: center;
    background-color: #fff;
    color: #000!important;
    font-size: 13px !important;
    line-height: 1 !important;
     text-transform: inherit !important;
    padding-top: 11px;
    border: 2px solid #df4309;
    border-radius: 6px;
}
.font-10{
    font-size:10px !important;
}
.font-11{
    font-size:11px !important;
}
.font-12{
    font-size:12px !important;
}
.font-13{
    font-size:13px !important;
}
.font-14{
    font-size:14px !important;
}
.font-16{
    font-size:16px !important;
}
.font-17{
    font-size:17px !important;
}
.font-18{
    font-size:18px !important;
}
.font-19{
    font-size:19px !important;
}
.font-20{
    font-size:20px !important;
}
.font-21{
    font-size:21px !important;
}







.font-15{
    font-size: 15px !important;
}
#scholership-promo .scholership-promo-text h2 span {
    color: #039003 !important;
}

#footer-area .footer-bottom {
    background-color: #18223f;
    color: #fff;
    padding: 20px 0;
}
.scroll-top {
    background-color: #ff4500 !important;
}
#slider-area .slide-bg-1 {
    background-image: url('<?=$asset?>/media/01.jpg') !important;
}
#scholership-promo {
    background-image: url('<?=$asset?>/media/scholership.png');
    padding: 100px 0 117px;
}
.text-orange{
    color: #ff4500 !important;
}
.single-blog-post .blog-thumb .blog-thumbnail {
    height: inherit !important;
}
.blog-img-cover{
    object-fit: cover;
    width: 100%;
    height: 326px;
}

element.style {
    background: #040404;
    color: #fff;
    important: ;
    font-size: 16px;
    border-radius: 0 6px 6px 0;
}
.sidebar-area-wrap form input {
    padding: 7px 20px !important;
    border-radius: 6px !important;
    border: 2px solid #040404 !important;
}
.sidebar-area-wrap form button {
    position: absolute;
    right: 0;
    top: 20px;
    font-size: 18px;
    color: #696969;
    background: transparent;
    outline: none;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    letter-spacing: 0.046875em;
    line-height: 1;
    padding: 12px;
    cursor : pointer;
}
.sidebar-area-wrap li:hover a{
    color: #ff9822 !important;
}
.sidebar-area-wrap li:hover .nb-cat {
    background-color: #ff9822;
    color: #fff;
}
.sidebar-area-wrap li .nb-cat {
    float: right;
    display: inline-block;
    height: 30px;
    width: 30px;
    text-align: center;
    line-height: 30px;
    border-radius: 100%;
    -webkit-transition: .25s;
    -moz-transition: .25s;
    transition: .25s;
}

.img-sidebar{
    object-fit: cover;
    height: 65px;
    width: 100px;
}
.content1{
    padding-left: 13px;
}
.content1 h4{
    line-height : 0.7 !important;
    color : #000;
    font-weight : 700;
}
.content1 a{
    color : #000;
}

#flash-infos{
    height: 275px !important;
}
#flash-infos li{
    background: inherit !important;
    height: 140px !important;
    padding: 0 !important;
    border-bottom : 0 !important;

}
#flash-infos-container {
    padding: 15px !important;

}
.heure-box span{
    border: 2px solid #ff7729;
    padding: 12px;
    border-bottom: 0;
    color: #fff;
    background: #ff7729;
}
.liBars{
    margin: 15px !important;
}
.color-orange{
    color: #ff7729 !important;
}
.infos-bars{
    box-shadow: rgb(50 50 93 / 25%) 0 2px 5px -1px, rgb(0 0 0 / 30%) 0 1px 3px -1px;
    padding: 10px;
    border: 2px solid #ff7729;
    font-size: 15px !important;
}
#flashBox li{
    font-size: 15px !important;
    margin: 20px;
}

.bar{
    height: 25px;
    width: 2px;
    background: #ff7729;
    z-index: 10;
    margin: auto;
}
.h-339{
    height: 339px !important;
}
.ribban{
    position: absolute;
    top: 0;
    right: 0;
    color: #fff;
    background: #ff0909;
    padding: 4px 15px;
    border-radius: 0 6px 0 50px;
    border-top: 24px !important;
}
.box-card::after {
    display: block;
    position: absolute;
    bottom: -10px;
    left: 20px;
    width: calc(100% - 40px);
    height: 35px;
    background-color: #fff;
    -webkit-box-shadow: 0 19px 28px 5px rgba(64,64,64,0.09);
    box-shadow: 0 19px 28px 5px rgba(64,64,64,0.09);
    content: '';
    z-index: -1;
}
a.box-card {
    text-decoration: none;
}

.box-card {
    position: relative;
    border: 0;
    border-radius: 0;
    background-color: #fff;
    -webkit-box-shadow: 0 12px 20px 1px rgba(64,64,64,0.09);
    box-shadow: 0 12px 20px 1px rgba(64,64,64,0.09);
}
.box-card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,0.125);
    border-radius: .25rem;
}

.box-shadow {
    -webkit-box-shadow: 0 12px 20px 1px rgba(64,64,64,0.09) !important;
    box-shadow: 0 12px 20px 1px rgba(64,64,64,0.09) !important;
}
.head-icon{
    margin-top:18px;
    color:#FF4500;
    width: 51px;
}
.offre-icon{
    object-fit: cover;
    height: 90px;
    width: 90px;
    border-radius: 50px;
    margin-top: 0;
}
.title-emplois{
    padding-top : 35px !important;
    font-weight : 700 !important;
    color: #000;
}
.created-text{
    color: #8c8c8c;
}
.box-card-text {
    padding-top: 12px;
    color: #8c8c8c;
}
.box-card-title {
    margin: 0;
    font-family: "Montserrat",sans-serif;
    font-size: 18px;
    font-weight: 900;
}
.text-color{

}
#header-area .header-bottom-area .main-menu li.nav-item:hover{
    background-color: #ff450012 !important;
    color: #ff4500 !important;
}
.home-article .single-blog-post .blog-thumb .blog-thumbnail {
    height : 200px !important;
}
.home-article .img-art-home{
    object-fit : cover;
    height : 200px !important;
}

.home-article .single-blog-post .blog-content {
    padding: 17px;
}
.comment-box{
    background: #fff;
    margin-top: 35px;
    padding: 15px;
}
.comment-form .comment-input {
    width: 100%;
    border-radius: 3px;
    margin-bottom: 30px;
    padding: 3px 20px;
    outline: none;
    color: #696969;
}
.comment-form .comment-submit {
    text-transform: uppercase;
    background-color: #65ac4c;
    color: #fff;
    font-size: 14px;
    padding: 3px 21px;
    border : 2px solid #65ac4c !important;
    cursor : pointer;
    border-radius : 6px;
}
.comment-form .comment-submit2 {
    text-transform: uppercase;
    background-color: #65ac4c;
    color: #fff;
    font-size: 14px;
    padding: 3px 21px;
    border : 2px solid #ff4500 !important;
    cursor : pointer;
    border-radius : 6px;
}
.comment-form .comment-submit:hover {
    background-color: #fff;
    color: #65ac4c;
}
.comments .comment-item .image {
    float: left;
    margin-right: 10px;
    height: 50px;
    width: 50px;
    border-radius: 100%;
    overflow: hidden;
}
.comments li {
    list-style: none;
    border-bottom: 1px solid #f0f0f0;
    padding: 30px 0px 20px;
}
.comments .comment-item .com-content {
    display: table;
}
.comments .comment-item a {
    font-size: 14px;
    color: #ff9822;
    font-weight: 600;
    text-decoration: none;
}

#formRepondre, #formRepondreR{
    padding : 10px 35px !important;
}


.pagination li a:hover, .pagination li a:focus {
    background-color: #ff5c00;
    color: #fff;
    border: 1px solid #ff5c00;
}
.pagination li a {
    color: #65ac4c;
    border: 1px solid #65ac4c;
    height: 40px;
    width: 40px;
    line-height: 40px;
    text-align: center;
    border-radius: 3px;
    display: inline-block;
}

.pagination li a.active{
    color: #fff !important;
    border: 1px solid #ff5c00 !important;
    background: #ff5c00 !important;
}
.pagination li {
    margin-right: 10px;
    display: inline-block;
}
.pagination {
    margin-top: 30px;
    margin-bottom: 0;
}
@media(max-width: 767px) {
    .home-title1{
        padding-top: 73px !important;
        font-size: 35px !important;
    }
    .home-title2{
        font-size: 15px;
        line-height: 1.5;
        padding-top: 15px;
    }
    #slider-area .single-slide-wrap {
        padding: 63px 0 60px !important;
    }
    #slider-area .owl-dots {
        bottom: 15px !important;

    }
    .up-event-text{
        text-align: center !important;
    }









}

</style>
</head>
<body class="<?php if($lien == 'home' || $lien == ''){echo 'bg-home';} ;?>">

<header id="header-area">
    <div class="header-bottom-area" id="fixheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-menu navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?=$domaine?>">
                            <img src="<?=$asset?>/media/logos.png" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="menucontent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item <?php if($lien == 'home' || $lien == ''){echo 'active';} ;?>"><a class="nav-link" href="<?=$domaine?>">Accueil</a></li>
                                <li class="nav-item <?php if($lien == 'actualite'){echo 'active';} ;?>"><a class="nav-link" href="<?=$domaine?>/actualite">Actualité</a></li>
                                <li class="nav-item <?php if($lien == 'evenement'){echo 'active';} ;?>"><a class="nav-link" href="<?=$domaine?>/evenement">Evenement</a></li>
                                <li class="nav-item <?php if($lien == 'offre-d-emplois'){echo 'active';} ;?>"><a class="nav-link" href="<?=$domaine?>/offre-d-emplois">Ofres d'emplois</a></li>
                                <li class="nav-item <?php if($lien == 'galerie'){echo 'active';} ;?>"><a class="nav-link" href="<?=$domaine?>/galerie">Galerie</a></li>
                                <li class="nav-item <?php if($lien == 'contact'){echo 'active';} ;?>"><a class="nav-link" href="<?=$domaine?>/contact">Contact</a></li>
                                <li class="nav-item <?php if($lien == 'inscription'){echo 'active';} ;?>"><a class="nav-link" href="<?=$domaine?>/inscription">Inscription</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
