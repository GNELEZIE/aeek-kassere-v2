<?php
if(isset($doc[1]) and !isset($doc[2]) || isset($_GET['page'])) {

    if(isset($_GET['page']) and is_numeric($_GET['page'])){
        $numPage = $_GET['page'];
        $fin = 6 * $numPage;
        $debut = $fin - 6;
    }else{
        $numPage = 1;
        $debut = 0;
        $fin = 6;
    }

    $liste = $events->getEventBySlug($doc[1]);



    if ($eventsData = $liste->fetch()) {
        $eventId =  $eventsData['id_events'];
        $res = $gallerie->nbPhotoByEvents($eventsData['id_events']);
        if($nbre = $res->fetch()){
            $pages = ceil($nbre['nb']/6);
        }else{
            $pages = 1;
        }
        $pagination_list = '';
        $myPage = '/gallerie/'.$doc[1].'/';
        $liste = $gallerie->getGallerieById($eventsData['id_events'],$debut,$fin);
    } else {
        header('location:' . $domaine . '/error');
        exit();
    }

}
include_once $layout.'/header.php';
?>
    <section id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2 pt-5">Notre galerie</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="multi-gallery-section bg-gris section-padding">
    <div class="container">
        <div class="row">
            <?php
            if(isset($doc[1]) and !isset($doc[2])) {
                ?>
                <div class="col-lg-12">
                <div class="full-album-content">
                <div class="single-album-wraper">
                    <div class="album-gallery-item">
                        <div class="row gallery-gird">
                            <?php
                            while($galData = $liste->fetch()) {
                                ?>
                                <div class="col-lg-3  col-sm-6 recent event">
                                    <div class="single-gallery-item" style="background-image: url(<?=$domaine?>/uploads/<?=$galData['photo'];?>);">
                                        <div class="gallery-hvr-wrap">
                                            <a href="<?=$domaine?>/uploads/<?=$galData['photo'];?>"
                                               class="btn-zoom image-popup">
                                                <img src="<?=$asset?>/media/zoom-icon.png" class="zoom-icon" alt="Zoom">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                </div>
            <?php
            }else{
            $listeEven= $events->getAllEvents();
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
            }
            ?>
        </div>
    </div>
</section>

<?php include_once $layout.'/footer.php';?>
