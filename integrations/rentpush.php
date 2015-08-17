<?php
include '../php/config.php';
$site = new site();
$site->head('RentPush');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/rentpush-large.png')?>" class="img-responsive" style="margin: 0 auto" alt="Minol USA"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>
                        RentPush
                    </h3>
                    <a href="http://www.rentpush.com/" class="lead" target="_blank">
                        rentpush.com
                    </a>
                    <h4>
                        About RentPush
                    </h4>
                    <p>
                        RentPush.com is revenue management, asset optimization software based on scientific modeling and
                        simulation combined with operational controls, performance goals, compliance platform, ROI
                        monitoring and forecasting. RentPush collects and translates integral market data into optimum
                        rent per unit while providing gyro controls of how operations are impacting assets: raising
                        flags, offering perspective and direction. It generates prime rates for renewals and new leases
                        to maximize total revenue growth.
                    </p>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="extra">
                        <div class="white-paper text-center">
                            <img src="<?php echo $site->baseUrl('img/white-paper.png')?>" alt="White Paper"/>
                            <p class="lead">
                                Find Out More About Our Partner
                            </p>
                            <a href="<?php echo $site->baseUrl('downloads/rentpush-whitepaper.pdf') ?>" target="_blank" class="btn btn-primary">
                                Download a PDF About RentPush
                            </a>
                        </div>
                    </div>
                </div>

                <div class="clearfix" style="margin-bottom: 20px;"></div>

                <?php $site->partnerNav() ?>
            </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>