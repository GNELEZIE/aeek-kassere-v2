<?php
if(isset($doc[1])){
    $return = $doc[0]."/".$doc[1];
}else{
    $return = $doc[0];
}



if(isset($doc[1]) and !isset($doc[2])) {

    $liste = $article->getArticleBySlug($doc[1]);
    $listeNbr = $article->getArticleBySlugNbr($doc[1])->fetch();

    if ($data = $liste->fetch()){
        $authors = $admin->getAdminById($data['user_id'])->fetch();
        $comments = $comment->getCommentById($data['id_article']);
        $comm = $comment->getCommentBSyId($data['id_article']);
        $commentsNb = $comment->getCommentByIdNb($data['id_article'])->fetch();
        if($nbCom = $comm->fetch()){
            $nbComments = $comment->nbComment($data['id_article'])->fetch();
            $nbReponses = $reponse->nbReponses($commentsNb['id_comment'])->fetch();
            $nbrComt = $nbComments['nb'] + $nbReponses['nb'];
        }else{
            $nbrComt = 0;
        }
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

    $res = $article->getAllNbrArticle();

    if($nbre = $res->fetch()){
        $pages = ceil($nbre['nb']/6);
    }else{
        $pages = 1;
    }
    $pagination_list = '';
    $myPage = '/actualite';
    $liste = $article->getAllNbrArticles($debut,$fin);
}



$vus = $compter->compter_visite();
$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;




include_once $layout.'/header.php';?>
    <section id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2 pt-5">Notre actualité</h1>
                        <p>Pour ceux qui ont déjà fait l'inscription vous pouvez verifier si votre carte est disponible</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="page-content-wrap">
    <div class="blog-page-content-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-page-contant-start">
                        <div class="row">
                            <?php
                            if(isset($doc[1]) and !isset($doc[2])) {
                                ?>
                                <div class="col-md-12 mb-5">
                                    <article class="single-blog-content-wrap">
                                        <header class="article-head">
                                            <div class="single-blog-thumb">
                                                <img src="<?=$domaine?>/uploads/<?=$data['couverture'];?>" class="img-fluid" alt="Blog">
                                            </div>
                                            <div class="single-blog-meta">
                                                <h2><?=html_entity_decode(stripslashes($data['titre']))?></h2>
                                                <div class="posting-info">
                                                   <p><?=date('N', strtotime($data['date_article'])).' '. month_fr(date('m', strtotime($data['date_article']))).' '.date('Y', strtotime($data['date_article']))?></p>
                                                </div>
                                            </div>
                                        </header>
                                        <section class="blog-details">
                                           <p>
                                               <?=html_entity_decode(stripslashes($data['description']))?>
                                           </p>


                                        </section>
                                        <footer class="post-share">
                                            <div class="row no-gutters ">
                                                <div class="col-8">
                                                    <div class="shareonsocial">
                                                        <span>Partager:</span>
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                        <a href="#"><i class="fa fa-vimeo"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <div class="post-like-comm">
                                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>20</a>
                                                        <a href="#"><i class="fa fa-comment-o"></i><?=$nbrComt?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </footer>


                                    </article>


                                    <div class="comment-box">
                                        <div class="comments wow bounceInUp center"  id="rep">
                                            <h4 class="font-20">
                                                <?=$nbrComt?>
                                                <?php
                                                if($nbrComt > 1){

                                                    echo 'Commentaires';
                                                }else{
                                                    echo 'Commentaire';
                                                }
                                                ?>
                                            </h4>

                                            <ul>
                                                <?php
                                                while($com = $comments->fetch()){

                                                    $rps = $reponse->getReponseById($com['id_comment'],$data['id_article']);
                                                    if($com['nom'] == ''){
                                                        $nom ='Anonyme';
                                                    }else{
                                                        $nom =$com['nom'];
                                                    }
                                                    ?>
                                                    <li class="comment-item">
                                                        <div class="image">
                                                            <img src="<?=$domaine?>/uploads/default.png" alt="Blog image" class="img-responsive">
                                                        </div>
                                                        <div class="com-content">
                                                            <h4 class="font-15"><?=html_entity_decode(stripslashes($nom))?></h4>
                                                            <span class="font-14"><i class="fa fa-circle" aria-hidden="true"></i> <?=date_lettre($com['date_comment']);?> </span>
                                                            <p class="font-14"><?=html_entity_decode(stripslashes($com['message']))?></p>
                                                            <a  href="javascript:void(0)" class="font-14" data-toggle="collapse" data-target="#collapse<?=$com['id_comment']?>" aria-expanded="true" aria-controls="collapse<?=$com['id_comment']?>">
                                                                <i class="fa fa-reply" aria-hidden="true"></i> Répondre
                                                            </a>
                                                        </div>
                                                        <div class="accordion accordion-flush" id="reponse<?=$com['id_comment']?>">
                                                            <div class="accordion-item">
                                                                <div id="collapse<?=$com['id_comment']?>" class="collapse" aria-labelledby="headingO<?=$com['id_comment']?>" data-parent="#accordion">
                                                                    <div class="comment-form">
                                                                        <form method="post" id="formRepondre">
                                                                            <div class="succesR"></div>
                                                                            <div class="errosR"></div>
                                                                            <div class="row">
                                                                                <div class="col-lg-4 col-md-4 col-xs-12">
                                                                                    <input type="text" name="nomR" id="nomR" placeholder="Nom*" class="comment-input input-style" required>
                                                                                </div>
                                                                                <div class="col-lg-4 col-md-4 col-xs-12">
                                                                                    <input type="email" name="emailR" id="emailR" placeholder="Email*" class="comment-input input-style" required>
                                                                                    <input type="hidden" class="form-control " name="formkey" value="<?= $token ?>">
                                                                                    <input type="hidden" class="form-control " name="article_id" value="<?= $data['id_article'] ?>">
                                                                                    <input type="hidden" class="form-control " name="com_id" id="com_id" value="<?=$com['id_comment']?>">
                                                                                </div>
                                                                            </div>
                                                                            <textarea rows="3" name="messageR" id="messageR" class="comment-input input-style" placeholder="Message"></textarea>
                                                                            <button type="submit" name="submit" class="comment-submit2 btn-orange mb-3" style="text-transform: inherit !important;font-weight: inherit !important;"> <i class="load"></i> Répondre</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul>
                                                            <?php
                                                            while($respon = $rps->fetch()) {
                                                                if($respon['nom'] == ''){
                                                                    $nomR ='Anonyme';
                                                                }else{
                                                                    $nomR =$respon['nom'];
                                                                }
                                                                ?>
                                                                <li class="comment-item">
                                                                    <div class="image"><img src="<?=$domaine?>/uploads/default.png" alt="Blog image" class="img-responsive"></div>
                                                                    <div class="com-content">
                                                                        <h4 class="font-14"><?=html_entity_decode(stripslashes($nomR))?></h4>
                                                                        <span class="font-14"><i class="fa fa-circle" aria-hidden="true"></i><?=date_lettre($respon['date_reponse']);?></span>
                                                                        <p class="font-14"><?=html_entity_decode(stripslashes($respon['message']))?></p>
                                                                        <a href="javascript:void(0)" class="" data-toggle="collapse" data-target="#collapse<?=$com['id_comment'].'_'.$respon['id_reponse']?>" aria-expanded="false" aria-controls="collapse<?=$com['id_comment'].'_'.$respon['id_reponse']?>"><i class="fa fa-reply" aria-hidden="true"></i> Répondre</a>
                                                                    </div>
                                                                    <div class="accordion accordion-flush" id="reponse<?=$com['id_comment'].'_'.$respon['id_reponse']?>">
                                                                        <div class="accordion-item">
                                                                            <div id="collapse<?=$com['id_comment'].'_'.$respon['id_reponse']?>" class="accordion-collapse collapse"  data-parent="#reponse<?=$com['id_comment'].'_'.$respon['id_reponse']?>">
                                                                                <div class="comment-form">
                                                                                    <form method="post" id="formRepondreR">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4 col-md-4 col-xs-12">
                                                                                                <input type="text" name="nomR" id="nomR" placeholder="Nom*" class="comment-input input-style" required>
                                                                                                <input type="hidden" class="form-control " name="article_id" value="<?= $data['id_article'] ?>">
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-xs-12">
                                                                                                <input type="email" name="emailR" id="emailR" placeholder="Email*" class="comment-input input-style" required>
                                                                                                <input type="hidden" class="form-control " name="formkey" value="<?= $token ?>">
                                                                                                <input type="hidden" class="form-control " name="com_id" id="com_id" value="<?=$com['id_comment']?>">
                                                                                                <input type="hidden" class="form-control " name="article_id" id="article_id" value="<?=$data['id_article']?>">
                                                                                            </div>
                                                                                        </div>
                                                                                        <textarea rows="3" name="messageR" id="messageR" class="comment-input input-style" placeholder="Message"></textarea>
                                                                                        <button type="submit" name="submit" class="comment-submit2 btn-transparence-orange mb-3" style="text-transform: inherit !important;font-weight: inherit !important;"> <i class="load"></i> Répondre</button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                    </li>

                                                <?php

                                                }
                                                ?>

                                            </ul>
                                        </div>
                                        <div class="comment-form wow bounceInUp center">
                                            <h4 class="font-17">Commenter</h4>
                                            <form method="post" id="formComment">
                                                <div class="succes"></div>
                                                <div class="erros"></div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" name="nom" id="nom" placeholder="Nom*" class="comment-input input-style" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="email" name="email" id="email" placeholder="Email*" class="comment-input input-style" required>
                                                        <input type="hidden" class="form-control " name="formkey" value="<?= $token ?>">
                                                        <input type="hidden" class="form-control " name="article_id" value="<?= $data['id_article'] ?>">
                                                    </div>
                                                </div>
                                                <textarea rows="6" name="message" id="message" class="comment-input input-style" placeholder="Message"></textarea>
                                                <button  name="submit" class="comment-submit" style="text-transform: inherit !important;font-weight: inherit !important;"> <i class="load"></i> Commenter</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            <?php
                            }else{
                            while($data = $liste->fetch()){
                                $authors = $admin->getAdminById($data['user_id'])->fetch();
                                $commentExiste = $comment->getCommentById($data['id_article']);
                                if($nbCom = $commentExiste->fetch()){
                                    $nbComments = $comment->nbComment($data['id_article'])->fetch();
                                    $nbCom = $comment->getCommentByIdNb($data['id_article'])->fetch();
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
                                <div class="col-md-12 mb-5">
                                    <article class="single-blog-post">
                                        <figure class="blog-thumb">
                                            <div class="blog-thumbnail">
                                                <img src="<?=$domaine?>/uploads/<?=$data['couverture'];?>" alt="Blog" class="blog-img-cover" />
                                            </div>
                                            <figcaption class="blog-meta clearfix">
                                                <a href="single-blog.html" class="author">
                                                    <div class="author-pic">
                                                        <img src="<?=$domaine?>/uploads/<?php if($authors['photo'] != ''){echo $authors['photo'];}else{echo 'default.png';}?>" alt="Author">
                                                    </div>
                                                    <div class="author-info">
                                                        <h5><?=html_entity_decode(stripslashes($authors['nom']))?></h5>
                                                        <p><?=date('N', strtotime($data['date_article'])).' '. month_fr(date('m', strtotime($data['date_article']))).' '.date('Y', strtotime($data['date_article']))?></p>
                                                    </div>
                                                </a>
                                                <div class="like-comm pull-right">
                                                    <a href="#"><i class="fa fa-comment-o"></i><?=$nbrComt?></a>
                                                    <a href="#"><i class="fa fa-heart-o"></i>12</a>
                                                </div>
                                            </figcaption>
                                        </figure>

                                        <div class="blog-content">
                                            <h3 class="m-0 font-17"><a href="<?=$domaine?>/actualite/<?=$data['slug']?>"><?=reduit_text(html_entity_decode(stripslashes($data['titre'])),'100');?></a></h3>
                                            <p class="font-15"><?=reduit_text(html_entity_decode(stripslashes($data['description'])),'300','...');?></p>
                                            <a href="<?=$domaine?>/actualite/<?=$data['slug']?>" class="btn btn-transparence-orange p-more font-15">Lire la suite</a>
                                        </div>
                                    </article>
                                </div>
                                <?php
                            ?>


                            <?php
                            }
                            }
                            ?>

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
                <div class="col-lg-4 order-first order-lg-last">
                    <?php
                    include_once $layout.'/bolg-sidebar.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php include_once $layout.'/footer.php';?>
<script src="<?=$asset?>/plugins/ticker/js/jquery.newsTicker.js"></script>
<script>
    $(document).ready(function(){

        var nt_example1 = $('#flash-infos').newsTicker({
            row_height: 80,
            max_rows: 3,
            duration: 4000,
            prevButton: $('#nt-example1-prev'),
            nextButton: $('#nt-example1-next')
        });


        $('#formComment').submit(function(e){
            e.preventDefault();
            $('.load').html('<i class="loader-btn"></i>');
            var value = document.getElementById('formComment');
            var form = new FormData(value);

            $.ajax({
                method: 'post',
                url: '<?=$domaine?>/controller/save.comment.php',
                data: form,
                contentType:false,
                cache:false,
                processData:false,
                dataType: 'json',
                success: function(data){
//                alert(data.data_info);
                    if(data.data_info == "ok"){
                        $('#message').val('');
                        $('.load').html('');
                        swal("Commentaire ajouté!", "Votre commentaire a été ajouté avec succès et est en attente d\'aprobation par les administrateurs !", "success");
                    }else {
                        $('#message').val('');
                        swal("Impossible!", "Une erreur s\'est produite lors de l\'ajoiut de votre commentaire", "error");
                    }
                },
                error: function (error, ajaxOptions, thrownError) {
                    alert(error.responseText);
                }
            });
        });

        $('#formRepondre').submit(function(e){
            e.preventDefault();
            $('.load').html('<i class="loader-btn"></i>');
            var value = document.getElementById('formRepondre');
            var form = new FormData(value);

            $.ajax({
                method: 'post',
                url: '<?=$domaine?>/controller/save.reponse.php',
                data: form,
                contentType:false,
                cache:false,
                processData:false,
                dataType: 'json',
                success: function(data){
//                alert(data.data_info);
                    if(data.data_info == "ok"){
                        $("#rep").load(location.href + " #rep");
                        $('#messageR').val('');
                        $('.load').html('');
                        swal("Réponse ajoutée!", "Votre réponse a été ajouté avec succès !", "success")
                    }else {
                        $('#message').val('');
                        swal("Impossible!", "Une erreur s\'est produite lors de l\'ajoiut de votre réponse", "error");
                    }
                },
                error: function (error, ajaxOptions, thrownError) {
                    alert(error.responseText);
                }
            });
        });
        $('#formRepondreR').submit(function(e){
            e.preventDefault();
            $('.load').html('<i class="loader-btn"></i>');
            var value = document.getElementById('formRepondreR');
            var form = new FormData(value);

            $.ajax({
                method: 'post',
                url: '<?=$domaine?>/controller/save.reponse.php',
                data: form,
                contentType:false,
                cache:false,
                processData:false,
                dataType: 'json',
                success: function(data){
//                alert(data.data_info);
                    if(data.data_info == "ok"){
                        $("#rep").load(location.href + " #rep");
                        $('#messageR').val('');
                        $('.load').html('');
                        swal("Réponse ajoutée!", "Votre réponse a été ajouté avec succès !", "success")
                    }else {
                        $('#message').val('');
                        swal("Impossible!", "Une erreur s\'est produite lors de l\'ajoiut de votre réponse", "error");
                    }
                },
                error: function (error, ajaxOptions, thrownError) {
                    alert(error.responseText);
                }
            });
        });
    });

</script>