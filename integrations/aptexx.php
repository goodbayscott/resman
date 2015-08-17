<?php
include '../php/config.php';
$site = new site();
$site->head('Aptexx: Premier Partner');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/aptexx-large.png')?>" class="img-responsive" style="margin: 0 auto" alt="Minol USA"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <h3>
                Aptexx: Premier Partner
            </h3>
            <a href="http://aptexx.com/" class="lead" target="_blank">
                aptexx.com
            </a>
            <h4>
                About Aptexx: Premier Partner
            </h4>
            <div>
                <p>
                    Aptexx and ResMan have come together to deliver the next generation of mobile payments to the
                    multifamily industry by offering the first mSaaS (mobile Software-as-a-Service) payment platform
                    that utilizes Responsive Web Design and HTML5 technology to empower residents to make online
                    rental payments with credit cards, debit cards and eChecks (ACH). ResMan® and Aptexx also offer
                    check scanning, cash payments by Western Union and traditional online rent payments through
                    ResMan’sCommunity Member’s Portal.
                </p>

                <p>
                    Aptexx is the first payment platform in the multifamily industry to have a ‘mobile first’
                    strategy. Recent statistics show that 80% of Gen Y ‘Millennials (ages 18-34) now own a
                    smartphone. Offering mobile payments will increase participation on the assets you manage. The
                    Aptexx team has decades of experience in property management, electronic payments, and mobile
                    messaging.
                </p>

                <p>
                    Aptexx is led by a team that has decades of experience in property management, payment
                    processing and mobile messaging. Aptexx empowers property managers by reducing resident
                    turnover and increasing the bottom line through integrated mobile rent payments, turn-key
                    resident messaging, mobile maintenance and real-time emergency notifications.
                </p>
            </div>

            <div class="clearfix" style="margin-bottom: 20px;"></div>

            <?php $site->partnerNav() ?>
        </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>