<?php
include '../php/config.php';
$site = new site();
$site->head('Minol USA: Premier Partner');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/minol-large.png')?>" class="img-responsive" style="margin: 0 auto" alt="Minol USA"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <h3>
                Minol USA: Premier Partner
            </h3>
            <a href="http://www.minolusa.com/" class="lead" target="_blank">
                minolusa.com
            </a>
            <h4>
                About Minol
            </h4>
            <div class="row">
                <div class="col-sm-6">
                    <p>
                        Minol and ResMan have come together to provide complete portfolio management by offering clients
                        integrated property management and utility billing solutions.
                    </p>
                    <p>
                        With the Minol ResMan solution, your onsite team easily manages daily operations at the property
                        level while your executive team has access to the critical financial information they need to
                        effectively manage the business at the portfolio level.
                    </p>
                </div>
                <div class="col-sm-6">
                    <p>
                        Minol pioneered the submetering industry more than 60 years ago. Today, they are leading the
                        industry with innovative solutions that help properties measure, manage, recover and conserve
                        energy. From meter technologies and utility billing to energy management and water conservation,
                        Minol offers a full suite of solutions that maximize NOI for the multifamily, military, affordable
                        housing and student communities.
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
                            <a href="<?php echo $site->baseUrl('downloads/minol-usa-whitepaper.pdf') ?>" target="_blank" class="btn btn-primary">
                                Download a PDF About Minol
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix" style="margin-bottom: 20px;"></div>

            <?php $site->partnerNav() ?>
        </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>