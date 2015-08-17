<?php
include '../php/config.php';
$site = new site();
$site->head('Jonah Systems');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/jonah-lg.jpg')?>" class="img-responsive" style="margin: 0 auto" alt="365 Connect"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <h3>
                Jonah Systems
            </h3>
            <a href="http://www.jonahsystems.com/" class="lead" target="_blank">
                jonahsystems.com
            </a>
            <h4>
                About Jonah Systems
            </h4>
            <div>
                <p>
                    Jonah Systems is a digital marketing firm specializing in building websites to suit the specific needs of multifamily communities. We believe great websites are achieved through the perfect balance of design and technology. So we focus on both. Our websites not only look good, but they get results.</p>

<p>We create a digital storefront for your community that integrates your brand across the web and makes it easier for both prospects and residents to transact with you online. Through seamless integration with ResMan, prospects can browse and view floor plans, check availability and pricing by move-in date, and schedule tours--all in real-time. We use responsive design techniques on our websites to ensure the desktop versions adapt to tablet and mobile platforms. And with our proprietary content management system as an interface, managing the content on your website is a breeze.</p>

<p>When it comes to strategy, we put our designs to work for you. Prominent calls-to-action are placed on critical page views, which stimulates prospect interaction. Engagement turns into leads. And of course, hot leads convert to leases. Our streamlined analytics reports allow our customers to measure success and retool if necessary to achieve their goals.</p>
            </div>

            <div class="clearfix" style="margin-bottom: 20px;"></div>

            <?php $site->partnerNav() ?>
        </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
