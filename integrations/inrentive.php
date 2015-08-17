<?php
include '../php/config.php';
$site = new site();
$site->head('InRentive');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/inrentive-lg.jpg')?>" class="img-responsive" style="margin: 0 auto" alt="365 Connect"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <h3>
                InRentive
            </h3>
            <a href="http://www.inrentive.com/" class="lead" target="_blank">
                inrentive.com
            </a>
            <h4>
                About InRentive
            </h4>
            <div>
                <p>InRentive is a ResMan-integrated platform for managing and publishing your portfolio’s marketing content, including photos, pricing, and availability. Through integration with your ResMan account, inRentive can give you tools for easily marketing your latest pricing and availability to Craigslist, Facebook, and your chosen marketing sites.</p>

				<p>For the first time, you can utilize advanced ILS syndication at the unit level. Exact pricing, availability, and floorplan-specific photos sent out to your ILS partners in a controlled fashion, with you at the wheel. Then, with our Analytics 3.0 tools, get insights into the ROI of each marketing channel you publish to.</p>
            </div>

            <div class="clearfix" style="margin-bottom: 20px;"></div>

            <?php $site->partnerNav() ?>
        </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
