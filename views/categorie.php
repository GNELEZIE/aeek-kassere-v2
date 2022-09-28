<?php
if(isset($doc[1])){
    $return = $doc[0]."/".$doc[1];
}else{
    $return = $doc[0];
}

if(isset($_GET['page']) and is_numeric($_GET['page'])){
    $numPage = $_GET['page'];
    $fin = 4 * $numPage;
    $debut = $fin - 4;
}else{
    $numPage = 1;
    $debut = 0;
    $fin = 4;
}


if(isset($doc[1]) and !isset($doc[2])) {
    $cat = $categorie->getCategorieBySlug($doc[1]);
    if($catIno = $cat->fetch()){
        $res = $article->getNbrCatByArticle($catIno['id_categorie']);
        $liste = $article->getAllNbrArticlesCat($debut,$fin,$catIno['id_categorie']);
        $categ = html_entity_decode(stripslashes($catIno['nom']));
    }else{
        header('location:' . $domaine . '/error');
        exit();
    }
}else{
    $res = $article->getAllNbrArticle();
    $liste = $article->getAllNbrArticles($debut,$fin);
    $categ = "Actualité";
}

$vus = $compter->compter_visite();


if($nbre = $res->fetch()){
    $pages = $nbre['nb']/4;
}else{
    $pages = 1;
}
$myPage = '/actualite';




include_once $layout.'/header.php';?>
    <section id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2 pt-5"><?=$categ?></h1>
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
                            while($data = $liste->fetch()){
                            $authors = $admin->getAdminById($data['user_id'])->fetch();
                            $nCom = $comment->getCommentByIdNb($data['id_article']);


                            if($nbCom = $nCom->fetch()){
                                $nbRepon = $reponse->nbReponses($nbCom['id_comment']);
                                if($nbReponses = $nbRepon->fetch()) {
                                    $nbreps = $nbReponses['nb'];
                                }else{
                                    $nbreps = 0;
                                }
                                    $nbComments = $comment->nbComment($data['id_article'])->fetch();

                                $nbrComt = $nbComments['nb'] + $nbreps;
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
                            }
                            ?>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
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