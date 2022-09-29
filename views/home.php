<?php
$lisPropos = $propos->getAllpropos();
$listes = $article->getHomeAllArticle();
$artNb = $article->getAllNbrArticle();
$vus = $compter->compter_visite();
$team = $admin->getAllAdmin();


include_once $layout.'/header.php';
?>
<section id="slider-area">
    <div class="slider-active-wrap owl-carousel text-center text-md-left">
        <?php
        $list = $banniere->getAllBanniere();
        $counter = 1;
        while($ban = $list->fetch()) {

            ?>
            <div class="single-slide-wrap" style="background-image: url('<?=$domaine?>/uploads/<?=$ban['photo']?>') !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <?php if($ban['titre'] != ''){
                                    $titres = '<h2 class="home-title1 animate__animated animate__zoomIn wow slideInRight">'.html_entity_decode(stripslashes($ban['titre'])).'</h2>';
                                }else{
                                    $titres = '';
                                }
                                ?>
                                <?=$titres?>
                                <h5 class="home-title2"><?=html_entity_decode(stripslashes($ban['sous_titre']))?></h5>
                                <div class="slider-btn">
                                    <a href="#" class="btn btn-brand smooth-scroll btn-orange radius-6">Formation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>

    </div>

    <div class="social-networks-icon">
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i> <span>7.2k Likes</span></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i> <span>3.2m Followers</span></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i> <span>7.2k Likes</span></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i> <span>2.2k Subscribers</span></a></li>
        </ul>
    </div>
</section>
<section id="upcoming-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 home-count">
                <div class="upcoming-event-wrap">
                    <div class="up-event-titile">
                        <h3>Événement à venir</h3>
                    </div>
                    <div class="upcoming-event-content owl-carousel">
                        <?php
                        $evt = $flash->getHomeFlash();
                        while($flashData = $evt->fetch()){
                        ?>
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="up-event-thumb">
                                        <input type="hidden" id="dateEvents" value="<?=$flashData['date_event']?>"/>
                                        <img src="<?=$domaine?>/uploads/<?=$flashData['photo']?>" class="img-fluid" alt="Upcoming Event">
                                        <h4 class="up-event-date"><?=date_lettre($flashData['date_event'])?></h4>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <div class="event-count-sect">
                                                    <div class="event-countdown-counter-sec">
                                                        <div class="counter-item">
                                                            <span class="counter-label">Jours</span>
                                                            <span class="single-cont"> <i id="days">00</i> </span>
                                                        </div>
                                                        <div class="counter-item">
                                                            <span class="counter-label">heure</span>
                                                            <span class="single-cont"> <i id="hours">00</i> </span>
                                                        </div>
                                                        <div class="counter-item">
                                                            <span class="counter-label">min</span>
                                                            <span class="single-cont"> <i id="minutes">00</i> </span>
                                                        </div>
                                                        <div class="counter-item">
                                                            <span class="counter-label">S</span>
                                                            <span class="single-cont"> <i id="second"></i> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3><a href="#"><?= html_entity_decode(stripslashes($flashData['titre']))?></a></h3>
                                                <p><?= html_entity_decode(stripslashes($flashData['sous_titre']))?></p>
                                                <a href="<?=$domaine?>/evenement/<?=$flashData['slug']?>" class="btn btn-white py30 font-15">En savoir plus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="single-upcoming-event"></div>
                        <div class="single-upcoming-event"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <section id="blog-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Nouvelles récentes</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php
                if($dat = $listes->fetch()){
                    $authors = $admin->getAdminById($dat['user_id'])->fetch();
                    $commentExiste = $comment->getCommentById($dat['id_article']);
                    if($nbCom = $commentExiste->fetch()){
                        $nbComments = $comment->nbComment($dat['id_article'])->fetch();
                        $nbCom = $comment->getCommentByIdNb($dat['id_article'])->fetch();
                        $nbRepon = $reponse->nbReponses($nbCom['id_comment']);
                        if($nbReponses = $nbRepon->fetch()) {
                            $nbreps = $nbReponses['nb'];
                        }else{
                            $nbreps = 0;
                        }
                        $nbrComt = $nbComments['nb'] + $nbreps ;
                    }else{
                        $nbrComt = 0;
                    }
                    ?>
                    <div class="col-lg-4 col-md-6 home-article">
                        <article class="single-blog-post">
                            <figure class="blog-thumb">
                                <div class="blog-thumbnail">
                                    <img src="<?=$domaine?>/uploads/<?=$dat['couverture'];?>" alt="Blog" class="img-art-home" />
                                </div>
                                <figcaption class="blog-meta clearfix">
                                    <a href="#" class="author">
                                        <div class="author-pic">
                                            <img src="<?=$domaine?>/uploads/<?php if($authors['photo'] != ''){echo $authors['photo'];}else{echo 'default.png';}?>" alt="Author">
                                        </div>
                                        <div class="author-info">
                                            <h5><?=$authors['nom']?></h5>
                                            <p>2 hours Ago</p>
                                        </div>
                                    </a>
                                    <div class="like-comm pull-right">
                                        <a href="<?=$domaine?>/actualite/<?=$dat['slug']?>"><i class="fa fa-comment-o"></i><?=$nbrComt?></a>
                                        <a href="<?=$domaine?>/actualite/<?=$dat['slug']?>"><i class="fa fa-heart-o"></i>12</a>
                                    </div>
                                </figcaption>
                            </figure>

                            <div class="blog-content">
                                <h3 class="m-0 font-17"><a href="<?=$domaine?>/actualite/<?=$dat['slug']?>"><?=reduit_text(html_entity_decode(stripslashes($dat['titre'])),'35');?></a></h3>
                                <p class="font-15"><?=reduit_text(html_entity_decode(stripslashes($dat['description'])),'100','...');?></p>
                                <a href="<?=$domaine?>/actualite/<?=$dat['slug']?>" class="btn btn-orange text-white font-15">Lire la suite</a>
                            </div>
                        </article>
                    </div>
                <?php
                }

                ?>
                <?php
                if($dat = $listes->fetch()){
                    $authors = $admin->getAdminById($dat['user_id'])->fetch();
                    $commentExiste = $comment->getCommentById($dat['id_article']);
                    if($nbCom = $commentExiste->fetch()){
                        $nbComments = $comment->nbComment($dat['id_article'])->fetch();
                        $nbCom = $comment->getCommentByIdNb($dat['id_article'])->fetch();
                        $nbRepon = $reponse->nbReponses($nbCom['id_comment']);
                        if($nbReponses = $nbRepon->fetch()) {
                            $nbreps = $nbReponses['nb'];
                        }else{
                            $nbreps = 0;
                        }
                        $nbrComt = $nbComments['nb'] + $nbreps ;
                    }else{
                        $nbrComt = 0;
                    }
                    ?>
                    <div class="col-lg-4 col-md-6 home-article">
                        <article class="single-blog-post">
                            <figure class="blog-thumb">
                                <div class="blog-thumbnail">
                                    <img src="<?=$domaine?>/uploads/<?=$dat['couverture'];?>" alt="Blog" class="img-art-home" />
                                </div>
                                <figcaption class="blog-meta clearfix">
                                    <a href="#" class="author">
                                        <div class="author-pic">
                                            <img src="<?=$domaine?>/uploads/<?php if($authors['photo'] != ''){echo $authors['photo'];}else{echo 'default.png';}?>" alt="Author">
                                        </div>
                                        <div class="author-info">
                                            <h5><?=$authors['nom']?></h5>
                                            <p>2 hours Ago</p>
                                        </div>
                                    </a>
                                    <div class="like-comm pull-right">
                                        <a href="<?=$domaine?>/actualite/<?=$dat['slug']?>"><i class="fa fa-comment-o"></i><?=$nbrComt?></a>
                                        <a href="<?=$domaine?>/actualite/<?=$dat['slug']?>"><i class="fa fa-heart-o"></i>12</a>
                                    </div>
                                </figcaption>
                            </figure>

                            <div class="blog-content">
                                <h3 class="m-0 font-17"><a href="<?=$domaine?>/actualite/<?=$dat['slug']?>"><?=reduit_text(html_entity_decode(stripslashes($dat['titre'])),'35');?></a></h3>
                                <p class="font-15"><?=reduit_text(html_entity_decode(stripslashes($dat['description'])),'100','...');?></p>
                                <a href="<?=$domaine?>/actualite/<?=$dat['slug']?>" class="btn btn-orange text-white font-15">Lire la suite</a>
                            </div>
                        </article>
                    </div>
                <?php
                }

                ?>
                <?php
                if($dat = $listes->fetch()){
                    $authors = $admin->getAdminById($dat['user_id'])->fetch();
                    $commentExiste = $comment->getCommentById($dat['id_article']);
                    if($nbCom = $commentExiste->fetch()){
                        $nbComments = $comment->nbComment($dat['id_article'])->fetch();
                        $nbCom = $comment->getCommentByIdNb($dat['id_article'])->fetch();
                        $nbRepon = $reponse->nbReponses($nbCom['id_comment']);
                        if($nbReponses = $nbRepon->fetch()) {
                            $nbreps = $nbReponses['nb'];
                        }else{
                            $nbreps = 0;
                        }
                        $nbrComt = $nbComments['nb'] + $nbreps ;
                    }else{
                        $nbrComt = 0;
                    }
                    ?>
                    <div class="col-lg-4 col-md-6 home-article">
                        <article class="single-blog-post">
                            <figure class="blog-thumb">
                                <div class="blog-thumbnail">
                                    <img src="<?=$domaine?>/uploads/<?=$dat['couverture'];?>" alt="Blog" class="img-art-home" />
                                </div>
                                <figcaption class="blog-meta clearfix">
                                    <a href="#" class="author">
                                        <div class="author-pic">
                                            <img src="<?=$domaine?>/uploads/<?php if($authors['photo'] != ''){echo $authors['photo'];}else{echo 'default.png';}?>" alt="Author">
                                        </div>
                                        <div class="author-info">
                                            <h5><?=html_entity_decode(stripslashes($authors['nom']))?></h5>
                                            <p>2 hours Ago</p>
                                        </div>
                                    </a>
                                    <div class="like-comm pull-right">
                                        <a href="<?=$domaine?>/actualite/<?=$dat['slug']?>"><i class="fa fa-comment-o"></i><?=$nbrComt?></a>
                                        <a href="<?=$domaine?>/actualite/<?=$dat['slug']?>"><i class="fa fa-heart-o"></i>12</a>
                                    </div>
                                </figcaption>
                            </figure>

                            <div class="blog-content">
                                <h3 class="m-0 font-17"><a href="<?=$domaine?>/actualite/<?=$dat['slug']?>"><?=reduit_text(html_entity_decode(stripslashes($dat['titre'])),'35');?></a></h3>
                                <p class="font-15"><?=reduit_text(html_entity_decode(stripslashes($dat['description'])),'100','...');?></p>
                                <a href="<?=$domaine?>/actualite/<?=$dat['slug']?>" class="btn btn-orange text-white font-15">Lire la suite</a>
                            </div>
                        </article>
                    </div>
                <?php
                }

                ?>


                <div class="col-md-12 text-center pt-5">
                    <a href="<?=$domaine?>/actualite" class="btn btn-orange text-white font-15">Voir plus d'article</a>
                </div>
            </div>
        </div>
    </section>
<section id="funfact-area">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="<?=$asset?>/media/user.svg" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5 class="funfact-count">
                            <?php
                            $nbUsr = $membre->nbrMmembre();
                            if($nbrMemb = $nbUsr->fetch()){
                                echo $nbrMemb['nb'];
                            }else{
                                echo '';
                            }
                            ?>
                        </h5>
                        <p>Membres</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="<?=$asset?>/media/picture.svg" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5 class="funfact-count">
                            <?php
                            $nbGals = $gallerie->nbrGaler();
                            if($nbrGals = $nbGals->fetch()){
                                echo $nbrGals['nb'];
                            }else{
                                echo '';
                            }
                            ?>
                        </h5>
                        <p>Photos</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="<?=$asset?>/media/event.svg" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5><span class="funfact-count">
                                <?php
                                $nbEvt = $events->nbrEvents();
                                if($nbrEvents = $nbEvt->fetch()){
                                    echo $nbrEvents['nb'];
                                }else{
                                    echo '';
                                }
                                ?>
                        </h5>
                        <p>Evènements</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="multi-gallery-section bg-gris section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="album-heading">
                    <h2 class="text-center">Notre galerie</h2>

                </div>
            </div>
            <?php
            $listeEven= $events->getSixEvents();
            while($dataEvent = $listeEven->fetch()) {
                $gal = $gallerie->getGallerieByIdForHome($dataEvent['id_events']);
                if($gallerieData = $gal->fetch()){
                    $couver = $gallerieData['photo'];
                }else{
                    $couver = "gallery.jpg";
                }
                ?>
                <div class="col-md-4">
                    <div class="gallery-item">
                        <span></span>
                        <div class="gallery-item-inner">
                            <div class="gallery-thumb">
                                <img src="<?=$domaine?>/uploads/<?=$couver;?>" class="img-galerie" alt="image">
                                <div class="gallery-thumb-ovarlay"></div>
                                <a href="<?=$domaine?>/galerie/<?=$dataEvent['slug'];?>" class="gallery-icon">
                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="gallery-title">
                                <h4 class="font-15"><a href="<?=$domaine?>/galerie/<?=$dataEvent['slug'];?>"><?=html_entity_decode(stripcslashes($dataEvent['nom'])).' '.month_fr(date('m', strtotime($dataEvent['date_events']))).','.date('Y', strtotime($dataEvent['date_events']));?></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<section id="scholership-promo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="scholership-promo-text">
                    <h2>S'inscrire pour suivre<span> la formation </span> de l'AEEK</h2>
                    <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need academic, relocation, career, projects, mentorship, etc you can ask the community and get </p>
                    <a href="#" class="btn btn-green text-white font-15">S'inscrire maintenant</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once $layout.'/footer.php';?>
<script>
    $(document).ready(function(){
     var dateEvents = $('#dateEvents').val();
    var countDownDate = new Date(dateEvents).getTime();

    var x = setInterval(function() {

        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        $("#days").html(days);
        $("#hours").html(hours);
        $("#minutes").html(minutes);
        $("#second").html(seconds);

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
    });
</script>