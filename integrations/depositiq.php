<?php
include '../php/config.php';
$site = new site();
$site->head('DepositIQ: The Smart Alternative to Deposits');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/depositiq-lg.jpg')?>" class="img-responsive" style="margin: 0 auto" alt="DepositIQ Logo"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <h3>
                DepositIQ
            </h3>
            <a href="http://www.depositiq.com/" class="lead" target="_blank">
                DepositIQ.com
            </a>
            <h4>
                About DepositIQ
            </h4>
            <div>
                <p>
                    DepositIQ offers an award-wining security deposit alternative in the place of standard refundable deposits for the multifamily housing industry. Based in Denver, Colorado and branded as “the smart alternative to deposits”, the product allows owners and operators to be more competitive in their respective markets by offering a lower cost move-in option, increase closing ratios, and generate additional income. Available nationwide, DepositIQ utilizes e-signature and e-payment technology and real-time analytics to provide crucial insight into clients’ operations. The product has been a success at all types of properties including multifamily, manufactured housing, and student housing. </p>
            </div>

            <div class="clearfix" style="margin-bottom: 20px;"></div>

            <?php $site->partnerNav() ?>
        </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
