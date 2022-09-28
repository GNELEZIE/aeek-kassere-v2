<?php include_once $layout.'/header.php';?>
    <section id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2 pt-5">Contactez-nous</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="row">
                    <div class="col-md-6 pl-0 m-0">
                        <div class="box-contact my-shadow">
                            <h2> <i class="fa fa-phone"></i> </h2>
                            <h5>Téléphone</h5>
                            <p>0025 05 46 85 99 36</p>
                        </div>
                    </div>
                    <div class="col-md-6 pl-0 m-0">
                        <div class="box-contact my-shadow">
                            <h2> <i class="fa fa-email"></i> </h2>
                            <h5>Email</h5>
                            <p>contact@aeek-kassere.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-2 my-shadow">
                <div class="contact-form-wrap">
                    <h3>send message</h3>
                    <form action="#" id="cbx-contact-form">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="cbxname">Name</label>
                                    <input type="text" name="cbxname" required id="cbxname" class="form-control input-style">
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="cbxemail">Email</label>
                                    <input type="email" name="cbxemail" required id="cbxemail" class="form-control input-style">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cbxsubject">Subjet</label>
                            <input type="text" name="cbxsubject" id="cbxsubject" class="form-control input-style">
                        </div>

                        <div class="form-group">
                            <label for="cbxmessage">Message</label>
                            <textarea name="cbxmessage" id="cbxmessage" rows="10" cols="80" class="form-control input-style"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-orange text-white font-15">Envoyer maintenant</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include_once $layout.'/footer.php';?>
