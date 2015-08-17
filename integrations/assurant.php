<?php
include '../php/config.php';
$site = new site();
$site->head('Assurant');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/assurant-lg.jpg')?>" class="img-responsive" style="margin: 0 auto" alt="365 Connect"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <h3>
                Assurant
            </h3>
            <a href="http://www.amrent.com/" class="lead" target="_blank">
                assurant.com
            </a>
            <h4>
                About Assurant
            </h4>
            <div>
                <p>
                    365 Connect resolves issues every multifamily community faces: online marketing, leasing, managing social media, and delivering services to residents to keep them renewing leases. The award-winning 365 Connect Platform has the ability to market communities across the Internet to high traffic sites, automate social media postings and deliver desktop and mobile platforms for prospects to transact business.
                </p>

                <p>
                    365 Connect follows the entire resident lifecycle and delivers services after the lease is signed by providing residents with a content rich platform laced with online services and communication tools.
                </p>
            </div>

            <div class="clearfix" style="margin-bottom: 20px;"></div>

            <?php $site->partnerNav() ?>
        </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
