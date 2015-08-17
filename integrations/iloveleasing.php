<?php
include '../php/config.php';
$site = new site();
$site->head('ILoveLeasing');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/iloveleasing_hz.png')?>" class="img-responsive" style="margin: 0 auto" alt="ILoveLeasing"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>
                        ILoveLeasing.com®
                    </h3>
                    <a href="http://www.iloveleasing.com/" class="lead" target="_blank">
                        ILoveLeasing.com
                    </a>
                    <h4>
                        About ILoveLeasing.com®
                    </h4>
                    <p>
                        ILoveLeasing.com® div Spherexx.com® is prospect engagement, advertising management and performance analysis software that has proven to substantially increase closing opportunities. ILoveLeasing.com delivers all your valuable leads into one conversion centric depository. It also collects demographic data and crunches advertising feasibility statistics. This program is a leasing coach that organizes priorities and keeps an effective follow-up schedule.  Each lead activity is tracked individually and corporately, down to what a prospect views on the dynamic brochures: at what time and how often.
                    </p>
                    <p>
                        ILoveLeasing.com’s community and portfolio reporting includes cost and budget analysis, real time demand, and leads and leases by source. Optional features provide broadcast email delivery through Emailkast from Spherexx.com, and telephone monitoring and recording in addition to standard missed call collection.  A tablet version is included through SweetSpotDashboard, a portable dashboard that gives users immediate access to all their cloud-based software, plus on-the-go leasing tools. ILoveLeasing.com can also be integrated with LeasingBook by Spherexx.com, an iPad application that provides a complete leasing platform in the palm of your hand.
                    </p>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="extra">
                        <div class="white-paper text-center">
                            <img src="<?php echo $site->baseUrl('img/white-paper.png')?>" alt="White Paper"/>
                            <p class="lead">
                                Find Out More About Our Partner
                            </p>
                            <a href="<?php echo $site->baseUrl('downloads/iloveleasing-whitepaper.pdf') ?>" target="_blank" class="btn btn-primary">
                                Download a PDF About ILoveLeasing.com®
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