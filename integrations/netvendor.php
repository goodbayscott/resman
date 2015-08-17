<?php
include '../php/config.php';
$site = new site();
$site->head('NetVendor');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/netvendor.png')?>" class="img-responsive" style="margin: 0 auto" alt="NetVendor"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>
                        NetVendor
                    </h3>
                    <a href="http://www.netvendor.net/" class="lead" target="_blank">
                        NetVendor.net
                    </a>
                    <h4>
                        About NetVendor
                    </h4>
                    <p>
                        At no cost to you, we manage vendor lists in nearly 3,000 properties and 40 states.  Let NetVendor work for you and automate the vendor enrollment and insurance document tracking process while seamlessly integrating with your management software. In addition, background screen your vendors to ensure you have the best information to adequately protect the assets you are managing.  Eliminate paper chasing, erase vendor phone calls, automate the vendor enrollment process and centralize all of your important vendor data.  Save Time, Save Money, Reduce Risk.
                    </p>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="extra">
                        <div class="white-paper text-center">
                            <img src="<?php echo $site->baseUrl('img/white-paper.png')?>" alt="White Paper"/>
                            <p class="lead">
                                Find Out More
                            </p>
                            <a href="<?php echo $site->baseUrl('downloads/netvendor-whitepaper.pdf') ?>" target="_blank" class="btn btn-primary">
                                Download a PDF About NetVendor
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
