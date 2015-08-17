<?php
include '../php/config.php';
$site = new site();
$site->head('AMS Billing');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/ams-large.png')?>" class="img-responsive" style="margin: 0 auto" alt="Minol USA"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <h3>
                AMS Billing
            </h3>
            <a href="http://www.amsbilling.com/" class="lead" target="_blank">
                amsbilling.com
            </a>
            <h4>
                About AMS Billing
            </h4>
            <div>
                <p>
                    AMS offers owners and managers of multi-tenant properties adept services to add value to your
                    property and boost your bottom line, by notably reducing expenses related to resident utility
                    management and utilities billing services. Due to the low cost of our service programs, owners
                    derive benefits at nominal and sometimes even no cost!
                </p>
            
                <p>
                    Whether it is a residential or commercial property under consideration; entrust your
                    calculation, billing and collection worries to us and save your time, effort and money. AMS
                    Billing offers customers a first-rate utility billing solution to help enhance overall asset
                    value. Our focus on integrity, highly coordinated teamwork and our matchless customer service
                    make AMS your ultimate partner in utility billing management.
                </p>
            </div>

            <div class="clearfix" style="margin-bottom: 20px;"></div>

            <?php $site->partnerNav() ?>
        </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>