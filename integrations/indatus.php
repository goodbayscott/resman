<?php
include '../php/config.php';
$site = new site();
$site->head('InDatus');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/indatus-large.png')?>" class="img-responsive" style="margin: 0 auto" alt="Minol USA"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>
                        InDatus
                    </h3>
                    <a href="http://www.indatus.com/" class="lead" target="_blank">
                        indatus.com
                    </a>
                    <h4>
                        About InDatus
                    </h4>
                    <p>
                        InDatus Cloud-Based Solutions transforms raw data into powerful tools to help your business run
                        more efficiently. Because each solution is online, there’s nothing to install, upgrades occur
                        automatically and can be accessed from any computer with an Internet connection. Whether the
                        solution is tracking leads, handling after-hours calls or sending mass voice and text messages,
                        in the end they all do the same thing — help your business grow.
                    </p>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="extra">
                        <div class="white-paper text-center">
                            <img src="<?php echo $site->baseUrl('img/white-paper.png')?>" alt="White Paper"/>
                            <p class="lead">
                                Find Out More About Our Partner
                            </p>
                            <a href="<?php echo $site->baseUrl('downloads/indatus-whitepaper.pdf') ?>" target="_blank" class="btn btn-primary">
                                Download a PDF About InDatus
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