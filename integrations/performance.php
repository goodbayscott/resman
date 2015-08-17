<?php
include '../php/config.php';
$site = new site();
$site->head('Performance');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/performance.png')?>" class="img-responsive" style="margin: 0 auto" alt="Performance"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <h3>
                Performance Utility Management & Billing
            </h3>
            <a href="http://performanceutilities.com/?ref=resman" class="lead" target="_blank">
                performanceutilities.com
            </a>
            <h4>
                About Performance
            </h4>
            <div>
                <p>
                    Performance is determined to take the worry of utility management and billing off your shoulders so you can concentrate on your other important responsibilities. Whether it’s utility management, utility billing, energy procurement, or supplying you with water conservation and submetering products, we are committed to saving you time and money while providing good ol’ fashioned service. You might not even know how much time and money you can actually save so we’ll analyze your data for free and show you the savings before you hire us. Give us a call and let’s chat over a slice of pie! Call <a href="tel:512-394-8359" value="+15123948359" target="_blank">512-394-8359</a> or email <a href="mailto:info@performanceutilities.com" target="_blank">info@performanceutilities.com</a> for more info.
                </p>
            </div>

            <div class="clearfix" style="margin-bottom: 20px;"></div>

            <?php $site->partnerNav() ?>
        </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
