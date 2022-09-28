<?php
$sideArticle = $article->getAllArticleSide();
$categ = $categorie->getAllCategorie();
$lastArticl = $article->getLastArticleSide();
if($lastArticle = $lastArticl->fetch()){
    $lastArticles = reduit_text(html_entity_decode(stripslashes($lastArticle['description'])),'500','...');
}else{
    $lastArticles ='';
}
?>
<div class="sidebar-area-wrap">
    <div class="single-sidebar-wrap">
        <h4 class="sidebar-title">Flash info</h4>
        <div class="sidebar-body">
            <div id="nt-example2-container m-3">
                <div id="flash-infos-container">
                    <ul id="flash-infos">
                        <?php

                        while($results = $sideArticle->fetch()){
                            $inf = reduit_text(html_entity_decode(stripslashes($results['titre'])),'50','...');
                            ?>
                            <li>
                                <div class="heure-box text-center">
                                    <span class="font-10"><?= date_fr($results['date_article']).'| '.time_fr($results['date_article']) ?></span>
                                </div>
                                <div class="infos-bars">
                                    <?=$inf?><a href="<?=$domaine?>/actualite/<?=$results['slug']?>" style="color: #ff4500"> Voir plus...</a>
                                </div>
                                <div class="text-center bar"></div>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>









    <div class="single-sidebar-wrap">
        <div class="brand-search-form">
            <?php
            $inputSearch = '';
            if(isset($_GET['search'])){
                $inputSearch = $_GET['search'];
            }
            ?>

            <form method="get" action="<?=$domaine?>/recherche">
                <input type="text" name="search" value="<?=$inputSearch?>" placeholder="Recherche..." style="border-right:6px !important;">
                <button style="background: #040404;color: #fff;important;font-size: 16px;border-radius: 0 6px 6px 0;"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>

    <div class="single-sidebar-wrap">
        <h4 class="sidebar-title">Categories</h4>
        <div class="sidebar-body">
            <ul class="brand-unorderlist">
                <?php
                while($category = $categ->fetch()){
                $nbCat = $article->getNbrCatByArticle($category['id_categorie'])->fetch();
                ?>
                <li><a href="<?=$domaine?>/categorie/<?=$category['slug']?>"><?=html_entity_decode(stripslashes($category['nom']))?></a>
                    <span class="nb-cat"><?=$nbCat['nb']?></span>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="single-sidebar-wrap d-none d-lg-block">
        <h4 class="sidebar-title">Articles récents</h4>
        <div class="sidebar-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="image">
                        <img src="<?=$asset?>/media/a01.jpg" class="img-sidebar" alt="image">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content1">
                        <h4 class=""><a href="#" class="font-15">Côte d’ivoire /Paix et cohésion soci...</a></h4>
                        <ul>
                            <li><a href="#" class="font-15"><i class="fa fa-clock-o" aria-hidden="true"></i> Lundi 30 Mai 2022 </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>