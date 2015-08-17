<?php
include '../php/config.php';
$site = new site();
$site->head("Contact");
$site->nav() ?>

<section class="contact-us-dallas">
    <div class="container">
                <h1 class="text-center">Contact Us</h1>
                <p>
                    Resman's long history of dedication and service keeps our customers happy from day one.
                </p>
        </div>
    </div>
</section>
<section class="contact-us white">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info">
                            <div class="support">
                                <img src="<?php echo $site->baseUrl('img/support.png') ?>">
                            </div>
                            <h3>Support</h3>
                            <p>
                                1-888-702-0971<br />
                                <a href="mailto:support@resmancloud.com" target="_blank">
                                    support@resmancloud.com
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info">
                            <div class="sales">
                                <img src="<?php echo $site->baseUrl('img/sales.png') ?>">
                            </div>
                            <h3>Sales</h3>
                            <p>
                                1-855-737-6261<br />
                                <a href="mailto:sales@resmancloud.com" target="_blank">
                                    sales@resmancloud.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info">
                            <div class="accounting">
                                <img src="<?php echo $site->baseUrl('img/accounting.png') ?>">
                            </div>
                            <h3>Accounting</h3>
                            <p>
                                1-888-702-0971<br />
                                <a href="mailto:accounting@resmancloud.com" target="_blank">
                                    accounting@resmancloud.com
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info">
                            <div class="corporate">
                                <img src="<?php echo $site->baseUrl('img/bldg-icon.png') ?>">
                            </div>
                            <h3>Careers</h3>
                            <p>
                                1-972-349-1406<br />
                                <a href="mailto:jobs@resmancloud.com" target="_blank">
                                    jobs@resmancloud.com
                                </a><br>
                                <a href="https://www.linkedin.com/vsearch/j?page_num=1&locationType=Y&f_C=2215903&trk=careers_promo_module_description" target="_blank">
                                    Apply Now
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
</body>
</html>
