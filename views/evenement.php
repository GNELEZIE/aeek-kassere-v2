<?php include_once $layout.'/header.php';?>
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
        <div class="event-page-content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="event-filter-area">
                            <form  class="form-inline">
                                <select name="year" id="year">
                                    <option selected>Année</option>
                                    <option>2018</option>
                                    <option>2017</option>
                                    <option>2016</option>
                                    <option>2015</option>
                                    <option>2014</option>
                                </select>

                                <select name="place" id="place">
                                    <option selected>Ville</option>
                                    <option>Alabama</option>
                                    <option>Alaska</option>
                                    <option>Arizona</option>
                                    <option>Colorado</option>
                                    <option>Delaware</option>
                                </select>

                                <select name="type" id="type">
                                    <option selected>Type</option>
                                    <option>Meetup</option>
                                    <option>Seminar</option>
                                    <option>Get Together</option>
                                </select>

                                <button class="btn btn-orange text-white font-15 btn-filtrer">Filter</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="all-event-list">
                            <!-- Single Event Start -->
                            <?php
                            $evt = $flash->getAllFlash();
                            while($flashData = $evt->fetch()){
                                ?>
                                <div class="single-upcoming-event">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="up-event-thumb">
                                                <input type="hidden" id="dateEvents" value="<?=$flashData['date_event']?>"/>
                                                <img src="<?=$domaine?>/uploads/<?=$flashData['photo']?>" class="img-fluid" alt="Upcoming Event">
                                                <h4 class="up-event-date"><?=date('N', strtotime($flashData['date_event'])).' '. month_fr(date('m', strtotime($flashData['date_event']))).' '.date('Y', strtotime($flashData['date_event']))?></h4>
                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="up-event-text">
                                                        <div class="event-count-sect">
<!--                                                            <div class="event-countdown-counter-sec">-->
<!--                                                                <div class="counter-item">-->
<!--                                                                    <span class="counter-label">Jours</span>-->
<!--                                                                    <span class="single-cont"> <i id="days">00</i> </span>-->
<!--                                                                </div>-->
<!--                                                                <div class="counter-item">-->
<!--                                                                    <span class="counter-label">heure</span>-->
<!--                                                                    <span class="single-cont"> <i id="hours">00</i> </span>-->
<!--                                                                </div>-->
<!--                                                                <div class="counter-item">-->
<!--                                                                    <span class="counter-label">min</span>-->
<!--                                                                    <span class="single-cont"> <i id="minutes">00</i> </span>-->
<!--                                                                </div>-->
<!--                                                                <div class="counter-item">-->
<!--                                                                    <span class="counter-label">S</span>-->
<!--                                                                    <span class="single-cont"> <i id="second"></i> </span>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
                                                        </div>
                                                        <h3><a href="#"><?= html_entity_decode(stripslashes($flashData['titre']))?></a></h3>
                                                        <p><?= html_entity_decode(stripslashes($flashData['sous_titre']))?></p>
                                                        <a href="#" class="btn btn-white py30 font-15">En savoir plus</a>
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
                        <div class="pagination-wrap text-center">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">50</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once $layout.'/footer.php';?>
