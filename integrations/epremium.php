<?php
include '../php/config.php';
$site = new site();
$site->head('ePremium Insurance - ResMan Property Management Integration Partner');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/ePremium-lg.jpg')?>" class="img-responsive" style="margin: 0 auto" alt="ePremium Insurance"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <h3>
                ePremium
            </h3>
            <a href="http://www.epremiuminsurance.com/" class="lead" target="_blank">
                epremiuminsurance.com
            </a>
            <h4>
                About ePremium
            </h4>
            <div>
                <p>
                    ePremium Insurance™ is the gold standard in mandated renters insurance program management.  Offering best-of-breed technology, product and process innovation to redefine the way renters insurance works in the industry.  ePremium has designed custom products with enhanced coverage that works to deflect common profit leaks away from the property asset and onto renters insurance.
                </p>

            </div>

            <div class="clearfix" style="margin-bottom: 20px;"></div>

            <?php $site->partnerNav() ?>
        </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
