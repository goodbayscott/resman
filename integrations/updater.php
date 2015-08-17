<?php
include '../php/config.php';
$site = new site();
$site->head('Updater');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/updater.jpg')?>" class="img-responsive" style="margin: 0 auto" alt="Updater"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>
                        Updater
                    </h3>
                    <a href="http://www.updater.com/?ref=resman" class="lead" target="_blank">
                        Updater.com
                    </a>
                    <h4>
                        About Updater
                    </h4>
                    <p>
                        There are few things in life more frustrating than moving. While moving into a new apartment home is exciting, your residents waste countless hours on dreaded tasks like forwarding mail, transferring utilities, purchasing renters insurance, and much more. So, we built an elegant technology that streamlines the entire process from hours (or even days) down to minutes, and it's branded for each property and customized for each resident. Think of it like Turbo Tax for moving - your residents will love you for it.
                    </p>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="extra">
                        <div class="white-paper text-center">
                            <img src="<?php echo $site->baseUrl('img/white-paper.png')?>" alt="White Paper"/>
                            <p class="lead">
                                Find Out More
                            </p>
                            <a href="<?php echo $site->baseUrl('downloads/updater-whitepaper.pdf') ?>" target="_blank" class="btn btn-primary">
                                Download a PDF About Updater
                            </a>
                        </div>
                    </div>
                </div>

                <div class="clearfix" style="margin-bottom: 20px;"></div>

                <?php $site->partnerNav() ?>
            </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
