<?php
include '../php/config.php';
$site = new site();
$site->head('Rental History Reports');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/rental-history-reports-large.png')?>" class="img-responsive" style="margin: 0 auto" alt="Minol USA"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <h3>
                Rental History Reports
            </h3>
            <a href="https://www.rentalhistoryreports.com/" class="lead" target="_blank">
                rentalhistoryreports.com
            </a>
            <h4>
                About Rental History Reports
            </h4>
            <div class="row">
                <div class="col-sm-6">
                    <p>
                        Rental History Reports is an expert residential and pre-employment screening company established
                        in 1994. Our company is unique in the sense that we combine the fast, internet-driven technical
                        capabilities of the large national suppliers with the exceptional personal service of a local
                        company. Working with us offers the best of both worlds.
                    </p>
                    <p>
                        Rental History Reports provides a broad array of products and services that are utilized during
                        the entire leasing cycle. When you partner with us for your background screening needs, you
                        receive the best possible applicant vetting system available.
                    </p>
                </div>
                <div class="col-sm-6">
                    <p>
                        Services include on-line, applicant initiated screening interface allowing you to reach more potential renters
                        and providing the ability for the applicant to pay us directly for the background check while
                        we capture the security deposit for you. An automated lease decision that is based upon your
                        unique applicant screening criteria. Auto-population of your lease document to save time,
                        improve accuracy and eliminate redundant key strokes. Ongoing criminal monitoring of your
                        existing residents during the term of their lease. Integrated collections that allow paperless,
                        automated and streamlined processing of your files.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="extra">
                        <div class="white-paper text-center">
                            <img src="<?php echo $site->baseUrl('img/white-paper.png')?>" alt="White Paper"/>
                            <p class="lead">
                                Find Out More About Our Partner
                            </p>
                            <a href="<?php echo $site->baseUrl('downloads/rental-history-reports-whitepaper.pdf') ?>" target="_blank" class="btn btn-primary">
                                Download a PDF About Rental History Reports
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix" style="margin-bottom: 20px;"></div>

            <?php $site->partnerNav('Rental History Reports') ?>
        </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>