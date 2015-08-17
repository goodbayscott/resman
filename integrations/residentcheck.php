<?php
include '../php/config.php';
$site = new site();
$site->head('ResidentCheck');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/resident-check-large.png')?>" class="img-responsive" style="margin: 0 auto" alt="Minol USA"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>
                        ResidentCheck
                    </h3>
                    <a href="http://www.residentcheck.com/" class="lead" target="_blank">
                        residentcheck.com
                    </a>
                    <h4>
                        About ResidentCheck
                    </h4>
                    <p>
                        ResidentCheck is the direct correlation between the front-end screening and bad debt recovery
                        and led us to develop a multifamily-specific program that addresses both. The advantage of
                        having a single contact providing both resident screening and collections includes detailed
                        management reports that show the “whole picture” of the credit cycle. Our Individually certified
                        criminal records means your staff will no longer have to analyze false positive or unclassified
                        criminal hits. Our additional strict compliance solution will keep your company and staff up to
                        date with all FACTA Fraud Alert and FCRA laws and regulations.
                    </p>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="extra">
                        <div class="white-paper text-center">
                            <img src="<?php echo $site->baseUrl('img/white-paper.png')?>" alt="White Paper"/>
                            <p class="lead">
                                Find Out More About Our Partner
                            </p>
                            <a href="<?php echo $site->baseUrl('downloads/residentcheck-whitepaper.pdf') ?>" target="_blank" class="btn btn-primary">
                                Download a PDF About ResidentCheck
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