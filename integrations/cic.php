<?php
include '../php/config.php';
$site = new site();
$site->head('CIC');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/cic.png')?>" class="img-responsive" style="margin: 0 auto" alt="CICreports.com"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>
                        CIC
                    </h3>
                    <a href="http://www.cicreports.com/" class="lead" target="_blank">
                        CIC Resident Screening
                    </a>
                    <h4>
                        About CIC
                    </h4>
                    <p>
                        CIC is the nation’s premier resident screening provider to the multifamily housing industry, with nearly three decades of industry-leading experience. CIC remains dedicated to providing clients with best-in-class data, technology and customer service.
                    </p>

                    <p>
                        By partnering with CIC, clients get more than just comprehensive resident screening; CIC provides Solutions. This unrivaled commitment to excellence helps clients eliminate turnover, boost occupancy rates, maximize their net operating income and protect their communities.
                    </p>
                    <ul>
                        <li>The nation’s most comprehensive criminal and eviction data coverage</li>
                        <li>Proprietary matching and filtering algorithm ensuring accuracy and legally reportable data.</li>
                        <li>An expert staff committed to YOU.</li>
                        <li>The only resident screener to offer 24/7 technical support, 365 days per year with direct

access to management.</li>
                    </ul>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="extra">
                        <div class="white-paper text-center">
                            <img src="<?php echo $site->baseUrl('img/white-paper.png')?>" alt="White Paper"/>
                            <p class="lead">
                                Find Out More About Our Partner
                            </p>
                            <a href="<?php echo $site->baseUrl('downloads/cic-whitepaper.pdf') ?>" target="_blank" class="btn btn-primary">
                                Download a PDF About CIC
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
