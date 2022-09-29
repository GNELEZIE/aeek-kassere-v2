<?php
if(isset($doc[1])){
    $return = $doc[0]."/".$doc[1];
}else{
    $return = $doc[0];
}



if(isset($doc[1]) and !isset($doc[2])) {

    $list = $flash->getFlashySlug($doc[1]);
    $listeNbr = $flash->getFlashBySlugNbr($doc[1])->fetch();

    if ($dataFlas = $list->fetch()){

    }else {
        header('location:' . $domaine . '/error');
        exit();
    }
}else{
    if(isset($_GET['page']) and is_numeric($_GET['page'])){
        $numPage = $_GET['page'];
        $fin = 6 * $numPage;
        $debut = $fin - 6;
    }else{
        $numPage = 1;
        $debut = 0;
        $fin = 6;
    }

    $res = $flash->getAllNbrFlash();

    if($nbre = $res->fetch()){
        $pages = ceil($nbre['nb']/6);
    }else{
        $pages = 1;
    }
    $pagination_list = '';
    $myPage = '/evenement';
    $liste = $flash->getAllFlash($debut,$fin);
}
include_once $layout.'/header.php';
?>
    <section id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2 pt-5">Nos évènements</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section id="page-content-wrap" class="multi-gallery-section bg-gris section-padding">
    <div class="container">
        <?php
        if(isset($doc[1]) and !isset($doc[2])){

            ?>
            <div class="row about-page-content-wrap">
                <div class="col-lg-11 m-auto">
                    <div class="single-about-text">

                        <img src="<?=$domaine?>/uploads/<?=$dataFlas['photo']?>" alt="About" class="img-fluid img-left">
                        <h2 class="h3"><?= html_entity_decode(stripslashes($dataFlas['titre']))?></h2>
                        <h5 class="yr"><?= date_lettre($dataFlas['date_event'])?></h5>
                        <p><?= html_entity_decode(stripslashes($dataFlas['sous_titre']))?></p>
                    </div>
                </div>
            </div>
        <?php
        }else{
            ?>
            <div class="event-page-content-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-event-list">
                                <?php
                                while($flashData = $liste->fetch()){
                                    ?>
                                    <div class="single-upcoming-event">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="up-event-thumb">
                                                    <input type="hidden" id="dateEvents" value="<?=$flashData['date_event']?>"/>
                                                    <img src="<?=$domaine?>/uploads/<?=$flashData['photo']?>" class="img-fluid" alt="Upcoming Event">
                                                    <h4 class="up-event-date"><?= date_lettre($flashData['date_event'])?></h4>
                                                </div>
                                            </div>

                                            <div class="col-lg-7">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="up-event-text">
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
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            if(isset($doc[0]) and !isset($doc[1])){
                                ?>
                                <div class="text-center wow bounceInUp center">
                                    <ul class="pagination" style="display: inherit !important;">
                                        <?php
                                        if(isset($_GET['page']) and is_numeric($_GET['page'])){
                                            if($pages < 2 ){
                                                $pagination_list = '
                                            <li><a href="javascript:void(0)"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                                            <li><a href="javascript:void(0)"  class="active">1</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                                        ';
                                            }else{
                                                if($_GET['page'] > 1 ){
                                                    $prec = $_GET['page']-1;
                                                    $pagination_list .= '
                                           <li> <a href="'.$domaine.$myPage.'?page='.$prec.'"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                                        ';
                                                }else{
                                                    $prec = 1;
                                                    $pagination_list .= '
                                           <li><a href="javascript:void(0)" style="cursor: not-allowed"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                                        ';
                                                }

                                                if($pages > 5){
                                                    for($i = 1; $i <= $pages ; $i++){
                                                        if($_GET['page'] > 2){
                                                            if($i > $_GET['page']-2 and $i < $_GET['page']+2){
                                                                if($i != $pages){
                                                                    if($i == $_GET['page']){
                                                                        $pagination_list .='
                                                                 <li class="active"><a href="javascript:void(0)">'.$i.'</a></li>
                                                            ';
                                                                    }else{
                                                                        if($i < 3){
                                                                            $pagination_list .='
                                                                 <li><a href="'.$domaine.$myPage.'?page='.$i.'">'.$i.'</a></li>
                                                            ';
                                                                        }else{
                                                                            $pagination_list .='
                                                                 <li class="hidden-xs"><a href="'.$domaine.$myPage.'?page='.$i.'">'.$i.'</a></li>
                                                            ';
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }else{
                                                            if($i < 6){
                                                                if($i == $_GET['page']){
                                                                    $pagination_list .='
                                                             <li><a href="javascript:void(0)"  class="active">'.$i.'</a></li>
                                                        ';
                                                                }else{
                                                                    if($i < 3){
                                                                        $pagination_list .='
                                                             <li><a href="'.$domaine.$myPage.'?page='.$i.'">'.$i.'</a></li>
                                                        ';
                                                                    }else{
                                                                        $pagination_list .='
                                                             <li class="hidden-xs"><a href="'.$domaine.$myPage.'?page='.$i.'">'.$i.'</a></li>
                                                        ';
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                    if($_GET['page'] < $pages-2){
                                                        $pagination_list .='
                                                    <li class="hidden-xs"><a href="javascript:void(0)">...</a></li>
                                                ';
                                                    }
                                                    if($_GET['page'] == $pages){
                                                        $pagination_list .='
                                                    <li><a href="javascript:void(0)"  class="active">'.$i.'</a></li>
                                                ';
                                                    }else{
                                                        $pagination_list .='
                                                    <li class="hidden-xs"><a href="'.$domaine.$myPage.'?page='.$pages.'">'.$pages.'</a></li>
                                                ';
                                                    }
                                                }else{
                                                    for($i = 1; $i <= $pages ; $i++){
                                                        if($i == $_GET['page']){
                                                            $pagination_list .='
                                                        <li><a href="javascript:void(0)"  class="active">'.$i.'</a></li>
                                                ';
                                                        }else{
                                                            if($i < 3){
                                                                $pagination_list .='
                                                    <li><a href="'.$domaine.$myPage.'?page='.$i.'">'.$i.'</a></li>
                                                ';
                                                            }else{
                                                                $pagination_list .='
                                                    <li class="hidden-xs"><a href="'.$domaine.$myPage.'?page='.$i.'">'.$i.'</a></li>
                                                ';
                                                            }
                                                        }
                                                    }
                                                }

                                                if($_GET['page'] < $pages ){
                                                    $suiv = $_GET['page']+1;
                                                    $pagination_list .= '
                                            <li><a href="'.$domaine.$myPage.'?page='.$suiv.'"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                                        ';
                                                }else{
                                                    $suiv = $pages;
                                                    $pagination_list .= '
                                            <li><a href="javascript:void(0)" style="cursor: not-allowed"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                                        ';
                                                }

                                            }
                                        }else{
                                            if($pages < 2 ){
                                                $pagination_list = '
                                            <li><a href="javascript:void(0)"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                                            <li><a href="javascript:void(0)"  class="active">1</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                                        ';
                                            }else{
                                                $pagination_list .= '
                                            <li><a href="javascript:void(0)" style="cursor: not-allowed"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                                        ';
                                                if($pages > 5){
                                                    for($i = 1; $i <= $pages ; $i++){
                                                        if($i < 6){
                                                            if($i == 1){
                                                                $pagination_list .='
                                                            <li><a href="javascript:void(0)"  class="active">'.$i.'</a></li>
                                                        ';
                                                            }else{
                                                                if($i < 3){
                                                                    $pagination_list .='
                                                            <li><a href="'.$domaine.$myPage.'?page='.$i.'">'.$i.'</a></li>
                                                        ';
                                                                }else{
                                                                    $pagination_list .='
                                                            <li class="hidden-xs"><a href="'.$domaine.$myPage.'?page='.$i.'">'.$i.'</a></li>
                                                        ';
                                                                }
                                                            }
                                                        }
                                                    }
                                                    $pagination_list .='
                                                    <li class="hidden-xs"><a href="javascript:void(0)">...</a></li>
                                            ';
                                                    $pagination_list .='
                                                    <li class="hidden-xs"><a href="'.$domaine.$myPage.'?page='.$pages.'">'.$pages.'</a></li>
                                            ';
                                                }else{
                                                    for($i = 1; $i <= $pages ; $i++){
                                                        if($i == 1){
                                                            $pagination_list .='
                                                        <li><a href="javascript:void(0)"  class="active">'.$i.'</a></li>
                                                    ';
                                                        }else{
                                                            if($i < 3){
                                                                $pagination_list .='
                                                    <li><a href="'.$domaine.$myPage.'?page='.$i.'">'.$i.'</a></li>
                                                    ';
                                                            }else{
                                                                $pagination_list .='
                                                    <li class="hidden-xs"><a href="'.$domaine.$myPage.'?page='.$i.'">'.$i.'</a></li>
                                                    ';
                                                            }
                                                        }
                                                    }
                                                }
                                                $pagination_list .= '
                                            <li><a href="'.$domaine.$myPage.'?page='.(1+1).'"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                                        ';
                                            }
                                        }
                                        ?>
                                        <?=$pagination_list?>
                                    </ul>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>

<?php include_once $layout.'/footer.php';?>
