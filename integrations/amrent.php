<?php
include '../php/config.php';
$site = new site();
$site->head('AmRent');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/amrent-lg.jpg')?>" class="img-responsive" style="margin: 0 auto" alt="365 Connect"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <h3>
                AmRent
            </h3>
            <a href="http://www.amrent.com/" class="lead" target="_blank">
                amrent.com
            </a>
            <h4>
                About AmRent
            </h4>
            <div>
                <p>AmRent is a trusted provider of resident screening services. We help housing providers throughout the United States improve their bottom line by quickly converting qualified applicants to residents, while reducing skips and evictions. AmRent provides affordable, fact-based information to help build a foundation of resident excellence.</p>

                <!---<p></p>--->
            </div>

            <div class="clearfix" style="margin-bottom: 20px;"></div>

            <?php $site->partnerNav() ?>
        </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
