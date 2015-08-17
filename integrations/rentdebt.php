<?php
include '../php/config.php';
$site = new site();
$site->head('RentDebt');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/rentdebt-large.png')?>" class="img-responsive" style="margin: 0 auto" alt="Minol USA"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>
                        RentDebt
                    </h3>
                    <a href="http://www.rentdebt.com/" class="lead" target="_blank">
                        rentdebt.com
                    </a>
                    <h4>
                        About RentDebt
                    </h4>
                    <p>
                        At RentDebt Automated Collections we know multifamily collections. Our key personnel have spent decades developing and implementing collection programs for some of America’s most respected property management companies. Our associates have a comprehensive understanding of the day-to-day responsibilities of the on -site teams, so they have unique insight to the time challenges they face.
                    </p>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="extra">
                        <div class="white-paper text-center">
                            <img src="<?php echo $site->baseUrl('img/white-paper.png')?>" alt="White Paper"/>
                            <p class="lead">
                                Find Out More About Our Partner
                            </p>
                            <a href="<?php echo $site->baseUrl('downloads/rentdebt-whitepaper.pdf') ?>" target="_blank" class="btn btn-primary">
                                Download a PDF About RentDebt
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
