<?php
include '../php/config.php';
$site = new site();
$site->head('ApartmentWebsites');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/apartment_websites.png')?>" class="img-responsive" style="margin: 0 auto" alt="ApartmentWebsites"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <h3>
                ApartmentWebsites.com™
            </h3>
            <a href="http://apartmentwebsites.com" class="lead" target="_blank">
                ApartmentWebsites.com
            </a>
            <h4>
                About ApartmentWebsites.com™
            </h4>
            <div>
                <p>
                    ApartmentWebsites.com™, div Spherexx.com® provides web development, mobile websites, and online marketing designed specifically for the apartment industry. Since 2000, ApartmentWebsites has developed hundreds of apartment websites with unique experience and resources.  Services include virtual tours, photo galleries, interactive floor planners, interactive online brochures, interactive site plans and availability, resident services and countless other features.
                </p>
                <p>
                    ApartmentWebsites is also designed to incorporate advanced leasing, prospect management, and market data analysis tools. Each of the products work together with ApartmentWebsites.com  to increase product value, serve residents and assist the leasing team in closing more leads in less time.  Pricing packages allow clients to select optional features and set budget priorities.
                </p>
            </div>

            <div class="clearfix" style="margin-bottom: 20px;"></div>

            <?php $site->partnerNav() ?>
        </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
